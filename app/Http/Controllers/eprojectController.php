<?php

namespace App\Http\Controllers;

use App\Models\admin_account;
use App\Models\category;
use App\Models\customer;
use App\Models\product;
use App\Models\service;
use App\repos\eproject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use function GuzzleHttp\Promise\all;

//use Intervention\Image\ImageManagerStatic as Image;

class eprojectController extends Controller
{



    public function home()
    {
        $product = product::all();
        $category = category::all();
        $service = service::all();

        return view('masters.home.home_main',[
            'location' => 'home',
            'product' => $product,
            'category' => $category,
            'service' => $service
        ]);
    }

    public function search(Request $request)
    {
        $keyword = $request->keyword;
        $product = product::where('name', 'like', '%'. $keyword. '%')->get();
        $service = service::where('name', 'like', '%'. $keyword. '%')->get();
        $both = $service->merge($product)->paginate(9);
        $category = category::all();
        return view('masters.home.search_product',[
            'product' => $product,
            'category' => $category,
            'service' => $service,
            'both' => $both
        ]);
    }

    public function user_register(){

        $product = product::all();
        $category = category::all();
        $service = service::all();

        return view('masters.elements.user_register',[
            'location' => 'user_register',
            'product' => $product,
            'category' => $category,
            'service' => $service
        ]);


    }

    public function contact()
    {
        $category = category::all();
        return view('masters.home.contact_us'
            ,[
                'location' => 'home_contact'
            ],
            [
                'category' => $category,
            ]
        );
    }


    public function user_store(Request $request){


        $user = new customer();
        $user->name = $request->input('name');
        $user->dob = $request->input('dob');
        $user->gender = $request->input('gender');
        $user->phone = $request->input('phone');
        $user->message = $request->input('message');
        $user->email = $request->input('email');
        $user ->save();

        return redirect()
            ->action('eprojectController@home');
    }



    public function home_product($id){


        switch ($id) {
            case 'product':
//              $product = product::all();
                $product = product::paginate(9);
                $service = null;
                break;
            case 'service':
                $service = service::paginate(9);
                $product = null;
                break;
            default:
                $product = product::where('categoryid', $id)->paginate(9);
                $service = service::where('categoryid', $id)->paginate(9);

        }
        $category = category::all();


        return view('masters.home.home_product',[
            'product' => $product,
            'category' => $category,
            'service' => $service
        ],
        [
            'location' => 'home_contact'
        ]
        );
    }

    //admin

    public function admin()
    {
        $username = auth()->user()->username;
        $id = auth()->user()->id;
        session()->put('username', $username);
        session()->put('id', $id);
//        dd(session()->get('id'));
        return view('masters.admin_home'

            ,[
                'location' => 'admin_home'
            ],
            [
                'admin_account' => auth()->user()
            ]

        );
    }





    public function admin_login()
    {

        return view('masters.login'
            ,[
                'location' => 'admin_login'
            ]


        );
    }


    public function login(Request $request)
    {

        $admin_account = admin_account::where('username', $request->username)->first();
        if ($admin_account){
            if (auth()->attempt(
                request()->only('username', 'password'),
                request()->filled('remember')
                )) {
                    return
                        redirect()
                        ->action('eprojectController@admin')
                        ->with('status', 'logged in Successfull');
                }
        }
        return
            view('masters.login')->with('alert', 'Credentials invalid')->with('request', $request);

    }

    public function logout(){
        session()->flush();
        auth()->logout();
        return
            redirect()
                ->action('eprojectController@admin_login', ['alert' => 'You Logged Out'])
                ->with('alert', 'You Logged Out');

    }

    public function index_admin($id)
    {

        $admin_account = admin_account::where('id', $id)->first();

        return view('masters.index_admin'
            ,[
                'location' => 'admin_detail'
            ],
            [
                'admin_account' => $admin_account
            ]
        );
    }

    public function edit_admin(Request $request, $id)
    {


        $admin_account = admin_account::where('id', $id)->first();
            return view('admin.edit_admin'
                ,[
                    'location' => 'admin_account',
//                    'id' => $id,
                    'admin_account' => $admin_account
                ]

            );
    }


    public function update_admin(Request $request, $id)
    {




        $admin_account = admin_account::where('id', $id)->first();

        $request->validate([
            'username' => ['required'],
            'password' => ['required', 'min:5', 'max:12'],
            'full_name' => ['required'],
            'email' => ['required', 'email'],
            'phone' => ['required'],
        ]);

        if (Hash::check($request->password , $admin_account->password)){
            $admin_account->username = $request->username;
            $admin_account->full_name = $request->full_name;
            $admin_account->email = $request->email;
            $admin_account->phone = $request->phone;
            $admin_account->update();

            $admin_account = admin_account::where('id', $id)->first();
            return view('masters.index_admin'
                ,[
                    'location' => 'admin_account'
                ],
                [
                    'admin_account' => $admin_account
                ]
            );
        }else{
            return view('admin.edit_admin'
                ,[
                    'location' => 'admin_account'
                ],
                [
                    'admin_account' => $admin_account,
                    'request' => $request
                ]
            );

        }


    }


    public function password ($id){


        return view('admin.change_password',
            ['id', $id],
            ['location' => "admin_password"]

        );
    }

    public function edit_password (Request $request, $id){
        $admin_account = admin_account::where('id', $id)->first();
//        dd($request);
        $request->validate([
            'password' => ['required', 'min:5', 'max:12'],
            'password_new' => ['required', 'min:5', 'max:12'],
            'password_confirm' => ['required', 'min:5', 'max:12'],
        ]
        );
        if(Hash::check($request->password , $admin_account->password)){
            if(($request->password_new) == ($request->password_confirm)){
                $admin_account->password = Hash::make($request->password_new);
                $admin_account->update();
                $admin_account = admin_account::where('id', $id)->first();
                return view('masters.index_admin'
                    ,[
                        'location' => 'admin_password'
                    ],
                    [
                        'admin_account' => $admin_account
                    ]
                );
            }else{
                return view('admin.change_password'
                    ,[
                        'location' => 'admin_password',
                        'alert' => 'new password confirm not match'
                    ],
                    [
                        'admin_account' => $admin_account,
                        'request' => $request
                    ]
                );
            }

        }else{
            return view('admin.change_password'
                ,[
                    'location' => 'admin_password',
                    'alert' => 'invalid password'
                ],
                [
                    'admin_account' => $admin_account,
                    'request' => $request,

                ]
            );
        }


    }



    //category
    /////
    /// /////
    /// /////
    /// ////
    ///
    public function index_category()
    {

        $category = category::all();

        return view('masters.index_category'
            ,[
                'location' => 'category_index'
            ],
            [
                'category' => $category
            ]
        );
    }

    public function show_category($id)
    {
        $category = category::where('id', $id)->first();
        return view('category.show_category',
            [
                'category' => $category
            ],
            [
                'location' => 'category_index'
            ]
        );
    }

    public function form_category()
    {
        return view('category.new_categories',
            ["category" => (object)
                [
                    'id' => '',
                    'name' => '',
                    'image' => '',
                    'description' => ''
                ]
            ],
            [
                'location' => 'category_index'
            ]
        );
    }

    public function store_category(Request $request)
    {

        $request->validate([
                'name' => ['required'],
                'image'=> ['required', 'mimes:jpeg,jpg,png', 'max:5000'],
                'description'=> ['required'],
                'type' => ['required']
            ]
        );

        $image = $request->file('image');

        $name = $image->getClientOriginalName();

        //store image to `public/admin_upload` folder

        $image->move('img/admin_upload', $name );

        //store image_name to database as text
        $category = new category();
        $category->name = $request->input('name');
        $category->type = $request->input('type');
        $category->image = $name;
        $category->description = $request->input('name');
        $category->save();


        return redirect()
            ->action('eprojectController@index_category')
            ->with('status', 'New category has been created');
    }


    public function confirm_category($id){
        $category= category::where('id', $id)->first();
        return view('category.confirm_category',
            [
                'category'=> $category,
            ],
            [
                'location' => 'category_index'
            ]
        );
    }

    public function delete_category(Request $request, $id)
    {
        if ($request->input('id') != $id) {
            return redirect()->action('eprojectController@index_category');
        }
        $category= category::where('id', $id)->first();
        unlink((public_path('img/admin_upload/'.$category->image)));
        $category->delete();


        return redirect()->action('eprojectController@index_category')
            ->with('status', 'Delete Category Successfully');
    }


    public function edit_category($id)
    {
        $category = category::where('id', $id)->first();
        return view(
            'category.edit_category',
            [
                'category'=>$category
            ],
            [
                'location' => 'category_index'
            ]
        );
    }

    public function update_category(Request $request, $id)
    {
        if ($id != $request->input('id')) {
            return redirect()->action('eprojectController@index_category');
        }

        $this->formValidate_category($request)->validate(); //shortcut

        $category = category::where('id', $id)->first();
        if ( ($request->file('image')) ){ //if user input contain new image update
            unlink((public_path('img/admin_upload/'.$category->image)));
            $image = $request->file('image');
            $name = $image->getClientOriginalName();
            $image->move('img/admin_upload', $name );
            $category->image = $name;
        }

        $category->type = $request->input('type');
        $category->name = $request->input('name');
        $category->description = $request->input('description');
        $category->update();

        return redirect()->action('eprojectController@index_category')
            ->with('status', 'Category Update Successfully');
    }


    private function formValidate_category($request)
    {
        return Validator::make(
            $request->all(),
            [
                'name' => ['required'],
                'image'=> ['mimes:jpeg,jpg,png', 'max:5000'],
                'description'=> ['required'],
                'type' => ['required']
            ],
        );
    }

    //product
    //
    //
    //




    public function index_product()
    {
        $product = product::orderBy('categoryid', 'desc')->get();

        return view('masters.index_product'
            ,[
                'location' => 'product_index'
            ],
            [
                'product' => $product
            ]
        );
    }

    public function show_product($id)
    {
        $product = product::where('id', $id)->first(); // equal to search by id get first
        $category = category::where('id', $id)->first();
        return view('product.show_product',
            [
                'product' => $product,
                'category' => $category
            ],
            [
                'location' => 'product_index'
            ]
        );
    }

    public function form_product()
    {
        $category = category::all();
        return view('product.new_product',
            ["product" => (object)
            [
                'id' => '',
                'categoryid' => '',
                'name' => '',
                'weight' => '',
                'price' => '',
                'description' => '',
                'brand' => '',
                'country_of_origin' => '',
                'expiration_date' => '',
                'manufacturer' => '',
                'image' => ''
            ]
            ],
            [
                'category' => $category,
                'location' => 'product_index'
            ]
        );
    }

    public function store_product(Request $request)
    {
//        dd($request);

        $request->validate([
            'name' => ['required'],
            'weight' => ['required', 'numeric', 'gt:0'],
            'price' => ['required', 'numeric', 'gt:0'],
            'categoryid' => ['required'],
            'description' => ['required'],
            'brand' => ['required'],
            'country_of_origin' => ['required'],
            'expiration_date' => ['required'],
            'manufacturer' => ['required'],
            'image' => ['required', 'mimes:jpeg,jpg,png', 'max:5000'],
        ],
        [
            'categoryid.required' => 'Please choose a catagory for the product'
        ]);

        $image = $request->file('image');
        $name = $image->getClientOriginalName();

        $image->move('img/admin_upload', $name );

        $product = new product();

        $product->name = $request->input('name');
        $product->categoryid = $request->input('categoryid');
        $product->weight = $request->input('weight');
        $product->price = $request->input('price');
        $product->description = $request->input('description');
        $product->brand = $request->input('brand');
        $product->country_of_origin = $request->input('country_of_origin');
        $product->expiration_date = $request->input('expiration_date');
        $product->manufacturer = $request->input('manufacturer');
        $product->image = $name;

        $product->save();


        return redirect()
            ->action('eprojectController@index_product')
            ->with('status', 'New product with has been created');
    }


    public function confirm_product($id){
        $product = product::where('id', $id)->first();
        return view('product.confirm_product',
            [
                'product'=> $product,
            ],
            [
                'location' => 'product_index'
            ]
        );
    }

    public function delete_product(Request $request, $id)
    {
        if ($request->input('id') != $id) {
            return redirect()->action('eprojectController@index_product');
        }

        $product = product::where('id', $id)->first();
        unlink((public_path('img/admin_upload/'.$product->image)));
        $product->delete();


        return redirect()->action('eprojectController@index_product')
            ->with('status', 'Delete Product Successfully');
    }


    public function edit_product($id, $categoryid)
    {
        $product = product::where('id', $id)->first();
        $category = category::all();
        return view(
            'product.edit_product',
            [
                'product'=>$product,'category'=> $category,'categoryid'=>$categoryid
            ],
            [
                'location' => 'product_index'
            ]
        );
    }

    public function update_product(Request $request, $id)
    {
//        dd($request);
        if ($id != $request->input('id')) {
            return redirect()->action('eprojectController@index_product');
        }


        $this->formValidate_product($request)->validate(); //shortcut

        $product = product::where('id', $id)->first();
        if ( ($request->file('image')) ){ //if user input contain new image update
            unlink((public_path('img/admin_upload/'.$product->image)));
            $image = $request->file('image');
            $name = $image->getClientOriginalName();
            //store image to folder public
            $image->move('img/admin_upload', $name );
            //store image_name to database
            $product->image = $name;
        }


        $product->name = $request->input('name');
        $product->categoryid = $request->input('categoryid');
        $product->weight = $request->input('weight');
        $product->price = $request->input('price');
        $product->description = $request->input('description');
        $product->brand = $request->input('brand');
        $product->country_of_origin = $request->input('country_of_origin');
        $product->expiration_date = $request->input('expiration_date');
        $product->manufacturer = $request->input('manufacturer');
        $product->update();

        return redirect()->action('eprojectController@index_product')
            ->with('status', 'Product Update Successfully');
    }


    private function formValidate_product($request)
    {
        return Validator::make(
            $request->all(),
            [

                'name' => ['required'],
                'weight' => ['required', 'numeric', 'gt:0'],
                'price' => ['required', 'numeric', 'gt:0'],
                'categoryid' => ['required'],
                'description' => ['required'],
                'brand' => ['required'],
                'country_of_origin' => ['required'],
                'expiration_date' => ['required'],
                'manufacturer' => ['required'],
                'image' => ['mimes:jpeg,jpg,png', 'max:5000'],

                ],
                [
                    'categoryid.required' => 'Please choose a catagory for the product'
                ]);
    }



    //service
    /////
    ///
    ///
    ///
    ///
    ///



    public function index_service()
    {
        $service = service::all();

        return view('masters.index_service'
            ,[
                'location' => 'service_index'
            ],
            [
                'service' => $service
            ]
        );
    }

    public function show_service($id)
    {
        $service = service::where('id', $id)->first();
        $category = category::all();
        return view('service.show_service',
            [
                'service' => $service,
                'category' => $category
            ],
            [
                'location' => 'service_index'
            ]
        );
    }

    public function form_service()
    {
        $category = category::all();
        return view('service.new_service',
            ["service" => (object)
            [
                'id' => '',
                'categoryid' => '',
                'name' => '',
                'price' => '',
                'description' => '',
                'service_validity_period' => '',
                'image' => ''

            ]
            ],
            [
                'category' => $category,
                'location' => 'service_index'
            ]
        );
    }

    public function store_service(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'price' => ['required','numeric' ,'gt:0'],
            'categoryid' => ['required'],
            'description' => ['required'],
            'service_validity_period' => ['required','numeric','gt:0'],
            'image' => ['required', 'mimes:jpg,png', 'max:5000'],
        ],
        [
            'categoryid.required' => 'Please choose a catagory for the service'
        ]);

        $image = $request->file('image');
        $name = $image->getClientOriginalName();

        //store image to `public/admin_upload` folder
        $image->move('img/admin_upload', $name );

        //store image_name to database
        $service = new service();
        $service->categoryid = $request->input('categoryid');
        $service->name = $request->input('name');
        $service->price = $request->input('price');
        $service->description = $request->input('description');
        $service->service_validity_period = $request->input('service_validity_period');
        $service->image = $name;

        $service->save();

        return redirect()
            ->action('eprojectController@index_service')
            ->with('status', 'New service has been created');
    }


    public function confirm_service($id){
        $service= service::where('id', $id)->first();
        return view('service.confirm_service',
            [
                'service'=> $service,
            ],
            [
                'location' => 'service_index'
            ]
        );
    }

    public function delete_service(Request $request, $id)
    {
        if ($request->input('id') != $id) {
            return redirect()->action('eprojectController@index_service');
        }

        $service= service::where('id', $id)->first();
        unlink((public_path('img/admin_upload/'.$service->image)));
        $service->delete();


        return redirect()->action('eprojectController@index_service')
            ->with('status', 'Delete Service Successfully');
    }


    public function edit_service($id, $categoryid)
    {
        $service =  service::where('id', $id)->first();
        $category = category::all();
        return view(
            'service.edit_service',
            [
                'service'=>$service, 'category'=> $category, 'categoryid'=>$categoryid
            ],
            [
                'location' => 'service_index'
            ]
        );
    }

    public function update_service(Request $request, $id)
    {
//        dd($request);
        if ($id != $request->input('id')) {
            return redirect()->action('eprojectController@index_service');
        }

        $this->formValidate_service($request)->validate();

        $service = service::where('id', $id)->first();
        if ( ($request->file('image')) ){ //if user input contain new image update
            unlink((public_path('img/admin_upload/'.$service->image)));
            $image = $request->file('image');
            $name = $image->getClientOriginalName();
            $image->move('img/admin_upload', $name );
            $service->image = $name;
        }

        $service = service::where('id', $id)->first();
        $service->categoryid = $request->input('categoryid');
        $service->name = $request->input('name');
        $service->price = $request->input('price');
        $service->description = $request->input('description');
        $service->service_validity_period = $request->input('service_validity_period');

        $service->update();

        return redirect()->action('eprojectController@index_service')
            ->with('status', 'Service Update Successfully');
    }


    private function formValidate_service($request)
    {
        return Validator::make(
            $request->all(),
            [

                'name' => ['required'],
                'price' => ['required','numeric' ,'gt:0'],
                'categoryid' => ['required'],
                'description' => ['required'],
                'service_validity_period' => ['required','numeric','gt:0'],
                'image' => ['mimes:jpg,png', 'max:5000'],

            ],
            [
                'categoryid.required' => 'Please choose a catagory for the service'
            ]);
    }

}

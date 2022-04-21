<?php

namespace App\Http\Controllers;

use App\Models\admin_account;
use App\Models\category;
use App\Models\product;
use App\Models\service;
use App\repos\eproject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

//use Intervention\Image\ImageManagerStatic as Image;

class eprojectController extends Controller
{



    public function home()
    {

        return view('masters.home');
    }


    public function admin()
    {

        return view('masters.admin_home'
            ,[
                'location' => 'admin_home',
                'admin_account' => auth()->user(),
                'username' => auth()->user()->username

            ]


        );
    }

    //admin
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

        $request->validate([
            'username' => ['required'],
            'password' => ['required', 'min:5']
            ],
            [
                'password.required' => 'The password field is required',
                'password.min' => 'The password has at least 5 characters'
            ]
        );
        $admin_account = admin_account::where('username', $request->username)->first();
        if($admin_account) {
            if (auth()->attempt(
                request()->only('username', 'password'),
                request()->filled('remember')
                )) {
                    return
                        redirect()
                        ->action('eprojectController@admin')
                        ->with('status', 'logged in Successfull');
                }else{
                    return
                        redirect()
                        ->back()
                        ->withErrors(['password' => 'invalid Password']);
                }
            }
            return
                redirect()
                ->back()
                ->withErrors(['username' => 'invalid Username']);


//        $admin_account = admin_account::where('username', $request->username)->first();
//        if ($admin_account){
//            if ( Hash::check($request->hash_password, $admin_account->password) ){
//                $request->session()->put('admin', $request->username);
//                return redirect()
//                    ->action('eprojectController@admin')
//                    ->with('status', 'logged in Successfull');
//            }else{
//                return redirect()
//                    ->action('eprojectController@admin_login')
//                    ->with('alert', 'Password not matches');
//            }
//        }else{
//            return redirect()
//                ->action('eprojectController@admin_login')
//                ->with('alert', 'Username not found');
//        }
    }


    public function logout(){

            auth()->logout();
            return
                view('masters.login')
                ->with('status', 'You logged out');

    }

    public function index_admin($username)
    {

        $admin_account = admin_account::where('username', $username)->first();

        return view('masters.index_admin'
            ,[
                'location' => 'admin_account'
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
            if ( !isset($request->hash_password) ){ //if empty use old password

                    $request->validate([
                        'username' => ['required'],
                        'full_name' => ['required'],
                        'email' => ['required', 'email'],
                        'phone' => ['required'],
                    ]);


                $admin_account->username = $request->username;
                $admin_account->full_name = $request->full_name;
//                $admin_account->hash_password = Hash::make($request->hash_password);
                $admin_account->email = $request->email;
                $admin_account->phone = $request->phone;
                $admin_account->update();
            }else{
                    $request->validate([
                        'username' => ['required'],
                        'hash_password' => ['required', 'min:5', 'max:12'],
                        'full_name' => ['required'],
                        'email' => ['required', 'email'],
                        'phone' => ['required'],
                    ],
                        [
                            'hash_password.required' => 'The password field is required',
                            'hash_password.min' => 'The password has at least 5 characters',
                            'hash_password.max' => 'The password has max 12 characters'
                        ]
                    );
                $admin_account->username = $request->username;
                $admin_account->full_name = $request->full_name;
                $admin_account->hash_password = Hash::make($request->hash_password);
                $admin_account->email = $request->email;
                $admin_account->phone = $request->phone;
                $admin_account->update();


            }

        $admin_account = admin_account::where('id', $id)->first();
        return view('masters.index_admin'
            ,[
                'location' => 'admin_account'
            ],
            [
                'admin_account' => $admin_account
            ]
        );
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
                'location' => 'admin_index'
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
                'location' => 'new_category'
            ]
        );
    }

    public function store_category(Request $request)
    {

//        dd($request);
        $this->formValidate_category($request)->validate();

        //lay image_name
        $image = $request->file('image'); //lay file

        $name = $image->getClientOriginalName(); //lấy tên file do người dùng upload

       //store image to `public/admin_upload` folder
        //function move('directory', $ten_anh ) root folder la public co the tu tao thu muc vi du o day la image
        // $ten_anh cai nay tuy chinh? ở đây đang lưu là tên gốc do người dùng upload
        $image->move('img/admin_upload', $name );


        //store image_name to database as text
        $category = new category();
        $category->name = $request->input('name');
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
//                'id' => $id,
                'category'=> $category,
            ]
        );
    }

    public function delete_category(Request $request, $id)
    {
        if ($request->input('id') != $id) {
            //id in query string must match id in hidden input
            return redirect()->action('eprojectController@index_category');
        }
        $category= category::where('id', $id)->first();
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
            ]
        );
    }

    public function update_category(Request $request, $id)
    {
        if ($id != $request->input('id')) {
            //id in query string must match id in hidden input
            return redirect()->action('eprojectController@index_category');
        }

        $this->formValidate_category($request)->validate(); //shortcut

        //xu li file anh
        $image = $request->file('image');
        $name = $image->getClientOriginalName();
        //

        $image->move('img/admin_upload', $name );

        $category = category::where('id', $id)->first();
        $category->name = $request->input('name');
        $category->image = $name;
        $category->description = $request->input('name');
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
                'image'=> ['required', 'mimes:jpg,png', 'max:2000'],
                'description'=> ['required']
            ],
        );
    }

    //product
    //
    //
    //




    public function index_product()
    {
        $product = product::all();//all for select all

        return view('masters.index_product'
            ,[
                'location' => 'admin_index'
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
                'location' => 'new_product'
            ]
        );
    }

    public function store_product(Request $request)
    {
//        dd($request);
        $this->formValidate_product($request)->validate(); //shortcut

        $image = $request->file('image');
        $name = $image->getClientOriginalName();

        //store image to `public/admin_upload` folder
        $image->move('img/admin_upload', $name );


        $product = new product();
        //store image_name to database
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
            ->with('status', 'New product with id: '.
//                .$newId.
                'has been created');
    }


    public function confirm_product($id){
        $product = product::where('id', $id)->first();
        return view('product.confirm_product',
            [
//                'id' => $id,
                'product'=> $product,
            ]
        );
    }

    public function delete_product(Request $request, $id)
    {
        if ($request->input('id') != $id) {
            return redirect()->action('eprojectController@index_product');
        }

        $product = product::where('id', $id)->first();
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


        $image = $request->file('image');
        $name = $image->getClientOriginalName();

        $image->move('img/admin_upload', $name );

        $product = product::where('id', $id)->first();
        //store image_name to database
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
        //dd($product);
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
                'image' => ['required', 'mimes:jpg,png', 'max:2000'],

            ],
        );
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
                'location' => 'admin_index'
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
                'location' => 'new_service'
            ]
        );
    }

    public function store_service(Request $request)
    {
//        dd($request);
        $this->formValidate_service($request)->validate(); //shortcut

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
            ]
        );
    }

    public function delete_service(Request $request, $id)
    {
        if ($request->input('id') != $id) {
            return redirect()->action('eprojectController@index_service');
        }

        $service= service::where('id', $id)->first();
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
            ]
        );
    }

    public function update_service(Request $request, $id)
    {
//        dd($request);
        if ($id != $request->input('id')) {
            return redirect()->action('eprojectController@index_service');
        }

        $this->formValidate_service($request)->validate(); //shortcut


        $image = $request->file('image');
        $name = $image->getClientOriginalName();

        $image->move('img/admin_upload', $name );

        $service = service::where('id', $id)->first();
        $service->categoryid = $request->input('categoryid');
        $service->name = $request->input('name');
        $service->price = $request->input('price');
        $service->description = $request->input('description');
        $service->service_validity_period = $request->input('service_validity_period');
        $service->image = $name;

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
                'image' => ['required', 'mimes:jpg,png', 'max:2000'],

            ],
        );
    }

}

<?php

namespace App\repos;

use Illuminate\Support\Facades\DB;

class eproject
{
//    category
    public static function getAllCategory() {
        $sql = 'select c.* ';
        $sql .= 'from categories as c ';
        $sql .= 'order by c.id';

        return DB::select ($sql);
    }


    public static function insert_category($category){
        $sql = 'insert into `categories` ';
        $sql .= '(name, image, description) ';
        $sql .= 'values (?, ?, ?) ';

        $result =  DB::insert($sql, [$category->name, $category->image, $category->description]);
        if($result){
            return DB::getPdo()->lastInsertId();
        } else {
            return -1;
        }
    }


    public static function getCategoryById($id){
        $sql = 'select c.* ';
        $sql .= 'from categories as c ';
        $sql .= 'where c.id = ? ';

        return DB::select($sql, [$id]);
    }

    public static function delete_category($id){
        $sql = 'delete from `categories` ';
        $sql .= 'where id = ? ';

        DB::delete($sql, [$id]);
    }

    public static function update_category($category){
        $sql = 'update categories ';
        $sql .= 'set name = ?, image = ?, description=? ';
        $sql .= 'where id = ? ';

        DB::update($sql, [$category->name, $category->image, $category->description, $category->id]);

    }

//    public static function get_category($id) {
//        $sql = 'select name ';
//        $sql .= 'from `category` ';
//        $sql .= 'where id = ? ';
//
//        return DB::select($sql, [$id]);
////        $result =  DB::select($sql, [$id]);
////        dd($result);
//    }

    //product



    public static function getAllProduct() {
        $sql = 'select c.* ';
        $sql .= 'from `products` as c ';
        $sql .= 'order by c.id';

        return DB::select ($sql);
    }


    public static function insert_product($product){
        $sql = 'insert into `products` ';
        $sql .= '(categoryid, price, name, weight, description, brand, country_of_origin, expiration_date, manufacturer, image) ';
        $sql .= 'values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?) ';
//dd($product);
        $result =  DB::insert($sql, [$product->categoryid, $product->price, $product->name, $product->weight, $product->description, $product->brand,$product->country_of_origin, $product->expiration_date, $product->manufacturer, $product->image]);
        if($result){
            return DB::getPdo()->lastInsertId();
        } else {
            return -1;
        }
    }


    public static function getProductById($id){
        $sql = 'select c.* ';
        $sql .= 'from `products` as c ';
        $sql .= 'where c.id = ? ';

        return DB::select($sql, [$id]);
    }

    public static function delete_product($id){
        $sql = 'delete from `products` ';
        $sql .= 'where id = ? ';

        DB::delete($sql, [$id]);
    }

    public static function update_product($product){
        $sql = 'update `products` ';
        $sql .= 'set categoryid = ?, price =?, name = ?, weight = ?, description = ?,  brand = ?, country_of_origin = ?, expiration_date = ?, manufacturer = ?, image = ? ';
        $sql .= 'where id = ? ';

        DB::update($sql, [$product->categoryid, $product->price, $product->name, $product->weight, $product->description, $product->brand,$product->country_of_origin, $product->expiration_date, $product->manufacturer, $product->image,  $product->id]);

    }




    //service
    //
    ///
    /// ////////////////////////////////////////////
    /// //////////
    /// //////

    public static function getAllService() {
        $sql = 'select c.* ';
        $sql .= 'from `services` as c ';
        $sql .= 'order by c.id';

        return DB::select ($sql);
    }


    public static function insert_service($service){
        $sql = 'insert into `services` ';
        $sql .= '(categoryid, price, name, description, service_validity_period, image) ';
        $sql .= 'values (?, ?, ?, ?, ?, ?) ';
//dd($product);
        $result =  DB::insert($sql, [$service->categoryid, $service->price, $service->name, $service->description,  $service->service_validity_period, $service->image]);
        if($result){
            return DB::getPdo()->lastInsertId();
        } else {
            return -1;
        }
    }


    public static function getServiceById($id){
        $sql = 'select c.* ';
        $sql .= 'from `services` as c ';
        $sql .= 'where c.id = ? ';

        return DB::select($sql, [$id]);
    }

    public static function delete_service($id){
        $sql = 'delete from `services` ';
        $sql .= 'where id = ? ';

        DB::delete($sql, [$id]);
    }

    public static function update_service($service){
        $sql = 'update `services` ';
        $sql .= 'set categoryid = ?, price =?, name = ?, description = ?, service_validity_period=?, image = ? ';
        $sql .= 'where id = ? ';

        DB::update($sql, [$service->categoryid, $service->price, $service->name, $service->description,  $service->service_validity_period, $service->image, $service->id ]);

    }

}

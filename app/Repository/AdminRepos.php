<?php

namespace App\Repository;

use http\Env\Request;
use Illuminate\Support\Facades\DB;

class AdminRepos
{
    public static function getAllAdmin(){
        $sql = 'select a.* ';
        $sql .= 'from admin as a ';
        $sql .= 'order by a.username';

        return DB::select($sql);
    }

    public static function getAdminByUsername($username){
        $sql = 'select a.* ';
        $sql .= 'from admin as a ';
        $sql .= 'where a.username = ?';

        return DB::select($sql, [$username]);
    }

    public static function updateadmin($admin){
        $sql = 'update admin ';
        $sql .= 'set name = ?, dob = ?, contact = ?, email = ? ';
        $sql .= 'where username = ? ';

        DB::select($sql, [$admin->name, $admin->dob, $admin->contact, $admin->email, $admin->username]);
    }














    public static function getallcollection(){
        $sql = 'select * ';
        $sql .= 'from collection ';
        $sql .='order by name ';

        return DB::select($sql);
    }

    public  static function getcollectionbyid($id){
        $sql = 'select * ';
        $sql .= 'from collection ';
        $sql .= 'where CollectionID = ? ';

        return DB::select($sql,[$id]);
    }

    public static function insertcollection($collection){
        $sql = 'insert into collection ';
        $sql .= '(name, stylist, urlimg, introduce) ';
        $sql .= 'values(?, ? ,?, ? ) ';
        $result = DB::insert($sql, [$collection->name,$collection->stylist,$collection->urlimg,$collection->introduce]);

        if($result){
            return DB::getPdo()->lastInsertID();
        }else{
            return -1;
        }
    }
    public  static function updatecolelction($collection){
        $sql = 'update collection ';
        $sql .= 'set name = ?, urlimg = ?, introduce = ? ';
        $sql .= 'where CollectionID = ? ';

        DB::update($sql,[$collection->name,$collection->urlimg,$collection->introduce,$collection->CollectionID]);
    }
    public  static  function  deletecollection($id){
        $sql = 'delete from collection ';
        $sql .= 'where CollectionID = ? ';

        DB::delete($sql,[$id]);
    }

    public static function  getproductbyCollectionID($id){
        $sql = "select * ";
        $sql .= "from product ";
        $sql .= "where CollectionID = ? ";


        return DB::select($sql, [$id]);
    }


    public static function getadmin($request){
        $sql = "select password ";
        $sql .= "from admin ";
        $sql .= "where username = ?";

        return DB::select($sql,[$request]);
    }



















    public static function getallstylist(){
        $sql = 'select * ';
        $sql .= 'from stylist ';
        $sql .='order by name ';

        return DB::select($sql);
    }
    public static function getstylistbyid($SID){
        $sql = 'select a.* ';
        $sql .= 'from stylist as a ';
        $sql .= 'where a.SID = ?';

        return DB::select($sql, [$SID]);
    }

    public static function updatestylist($stylist){
        $sql = 'update stylist ';
        $sql .= 'set name = ?, dob = ?, contact = ?, email = ?, history = ?, urlimg = ? ';
        $sql .= 'where SID = ? ';

        DB::update($sql, [$stylist->name, $stylist->dob, $stylist->contact, $stylist->email,
            $stylist->history, $stylist->urlimg, $stylist->SID]);
    }

    public static function insertstylist($stylist){
        $sql = 'insert into stylist ';
        $sql .= '(name, dob, contact, email, history, urlimg) ';
        $sql .= 'values(?, ?, ?, ?, ?, ?) ';

        $result = DB::insert($sql, [$stylist->name, $stylist->dob, $stylist->contact,
            $stylist->email, $stylist->history, $stylist->urlimg]);
        if ($result){
            return DB::getPdo()->lastInsertID();
        }else {
            return -1;
        }
    }

    public static function deletestylist($id){
        $sql = 'delete from stylist ';
        $sql .= 'where SID = ? ';

        DB::delete($sql, [$id]);
    }


    public static function getAllCustomer(){
        $sql = 'select a.* ';
        $sql .= 'from customer as a ';
        $sql .= 'order by a.name';

        return DB::select ($sql);
    }

    public static function getsCustomerById($ID){
        $sql = 'select a.* ';
        $sql .= 'from customer as a ';
        $sql .= 'where a.CusID = ?';

        return DB::select($sql, [$ID]);
    }

    public static function updatecustomer($customer){
        $sql = 'update customer ';
        $sql .= 'set name = ?, dob = ?, contact = ?, email = ?, address = ? ';
        $sql .= 'where CusID = ? ';

        DB::update($sql, [$customer->name, $customer->dob, $customer->contact, $customer->email,
            $customer->address, $customer->CusID]);
    }
















    public static function getAllProducts(){
        $sql = 'select p.* ';
        $sql .= 'from product as p ';
        $sql .= 'order by CID';

        return DB::select($sql);
    }

    public static function getProductById($id){
        $sql = 'select p.* ';
        $sql .= 'from product as p ';
        $sql .= 'where p.CID = ?';

        return DB::select($sql, [$id]);
    }

    public static function updateproduct($product){
        $sql = 'update product ';
        $sql .= 'set product_code = ?, fabric = ?, price = ?, size = ?, urlimg = ?, CollectionID = ?, SID = ? ';
        $sql .= 'where CID = ? ';

        DB::update($sql, [$product->product_code, $product->fabric, $product->price, $product->size,
            $product->urlimg, $product->CollectionID, $product->SID, $product->CID]);
    }

    public static function deleteproduct($CID){
        $sql = 'delete from product ';
        $sql .= 'where CID = ? ';

        DB::delete($sql, [$CID]);
    }

    public static function insertproduct($product){
        $sql = 'insert into product ';
        $sql .= '(product_code, fabric, price, size, urlimg, CollectionID, SID) ';
        $sql .= 'value(?, ?, ?, ?, ?, ?, ? )';

        $result = DB::insert($sql, [$product->product_code, $product->fabric, $product->price, $product->size,
            $product->urlimg, $product->CollectionID, $product->SID]);

        if ($result){
            return DB::getPdo()->lastInsertCID();
        } else {
            return -1;
        }
    }

    public static function getcollectionbyProductid($id){
        $sql = "select c.* ";
        $sql .="from collection as c ";
        $sql .="join product as p on c.CollectionID = p.CollectionID ";
        $sql .= "where p.CID = ? ";

        return DB::select($sql, [$id]);
    }

    public static function getstylistbyProductid($id){
        $sql = "select s.* ";
        $sql .="from stylist as s ";
        $sql .="join product as p on s.SID = p.SID ";
        $sql .= "where p.CID = ? ";

        return DB::select($sql, [$id]);
    }
}

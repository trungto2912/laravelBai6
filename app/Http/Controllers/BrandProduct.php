<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Brand;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class BrandProduct extends Controller
{
    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('admin')->send();
        }
     }
     public function add_brand_product(){
        $this->AuthLogin();
        return view('admin.add_brand_product');
     }
     public function all_brand_product(){
        $this->AuthLogin();
        //$all_brand_product = DB::table('tbl_brand')->get(); //static huong doi tuong
        // $all_brand_product = Brand::all(); 
        $all_brand_product = Brand::orderBy('Bid','DESC')->get();
        $manager_brand_product = view('admin.all_brand_product')->with('all_brand_product',$all_brand_product);
        return view('admin_layout')->with('admin.all_brand_product',$manager_brand_product);
     }
     public function save_brand_product(Request $request){
        $this->AuthLogin();
        $data = $request->all();

        $brand = new Brand();
        $brand->Bname = $data['bname'];
        $brand->Bslug = $data['bslug'];
        $brand->Bdes = $data['bdes'];
        $brand->Bstatus = $data['bstatus'];
        $brand->save();
 
        // $data = array();
        // $data['brand_name'] = $request->brand_product_name;
        // $data['brand_slug'] = $request->brand_slug;
        // $data['brand_desc'] = $request->brand_product_desc;
        // $data['brand_status'] = $request->brand_product_status;
        // DB::table('tbl_brand')->insert($data);
 
        Session::put('message','Thêm thương hiệu sản phẩm thành công');
        return Redirect::to('add-brand-product');
     }
     public function unactive_brand_product($brand_product_id){
        $this->AuthLogin();
        DB::table('tbl_brand')->where('Bid',$brand_product_id)->update(['Bstatus'=>0]);
        Session::put('message','Không kích hoạt thương hiệu sản phẩm thành công');

        return Redirect::to('all-brand-product');
     }
     public function active_brand_product($brand_product_id){
        $this->AuthLogin();
        DB::table('tbl_brand')->where('Bid',$brand_product_id)->update(['Bstatus'=>1]);
        Session::put('message','Kích hoạt thương hiệu sản phẩm thành công');
        return Redirect::to('all-brand-product');
     }

}

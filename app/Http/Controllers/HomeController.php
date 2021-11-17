<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Session;
use App\Http\Requests;
use Mail;
use Illuminate\Support\Facades\Redirect;
session_start();
class HomeController extends Controller
{
    public function index(){
        $cate_product = DB::table('tbl_category_product')->where('Cstatus','1')->orderby('Cid','desc')->get();
        return view('pages.home')->with('category',$cate_product);
 
    }
    public function product(){
        return view('pages.product');
    }
    public function news(){
        return view('pages.news');
    }
    public function contact(){
        return view('pages.contact');
    }
}

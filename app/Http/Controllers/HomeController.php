<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Faq;
use App\Models\Product;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public static function maincategorylist()
    {
        return Category::where('parent_id', '=', 0)->with('children')->get();
    }

    //
    public function index()
    {
        $page='home';
        $sliderdata = Product::limit(4)->get();
        $productlist1 = Product::limit(6)->get();
        $setting = Setting::first();
        return view('home.index', [
            'page' => $page,
            'setting' => $setting,
            'sliderdata' => $sliderdata,
            'productlist1' => $productlist1

        ]);
    }
    public function references()
    {
        echo"references";
        exit();
        $setting = Setting::first();
        return view('home.index', [
            'setting' => $setting
        ]);
    }
    public function contact()
    {
        echo"contact";
        exit();
        $setting=Setting::first();
        return view('home.contact', [
            'setting' => $setting
        ]);
    }
    public function faq()
    {
        $setting=Setting::first();
        $datalist=Faq::all();
        return view('home.faq', [
            'setting' => $setting,
            'datalist' => $datalist

        ]);
    }
    public function about()
    {
        $setting=Setting::first();
        return view('home.about', [
            'setting' => $setting
        ]);
    }

    public function product($id)
    {
        $data=Product::find($id);
        $images=DB::table('images')->where('product_id',$id)->get();
        return view('home.product',[
            'data'=>$data,
            'images'=>$images
        ]);
    }

    public function test()
    {
        return view('home.test');
    }
    public function test3()
    {
        return view('home.testlayout');
    }
    public function param($id,$number)
    {
        //echo "Parameter1 : ", $id;
        //echo "<br>Parameter 2 : ",$number;
       // echo "<br>Sum parameters : ", $id+$number;
        return view('home.test2',[
            'id'=>$id,
            'number'=>$number
        ]);
    }

    public function save(Request $request)
    {
       // echo "Save Function<br>";
        //echo "First Name : ",$_REQUEST["fname"];
       // echo "<br>Last Name : ",$_REQUEST["lname"];
        return view('home.test',[
            'fname'=>$_REQUEST["fname"],
            'lname'=>$_REQUEST["lname"]
        ]);
    }

}

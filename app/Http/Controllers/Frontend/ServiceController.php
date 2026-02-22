<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    static $viewPath = "frontend.pages.services.";
    public function index()
    {
//        $categories = Category::select('id', 'name_'.LaravelLocalization::getCurrentLocale().' as name','image')->take(8)->get();
//        $posts      = Post::select('id', 'company_id', 'position', 'slug', 'description', 'last_date', 'contract', 'location','carrer_level')->orderBy('id', 'desc')->where('status',1)->get()->take(6);
//        $allPost    = Post::where('status',1)->count();
//        return view('frontend.pages.index',compact('categories', 'posts','allPost'));
        return view(self::$viewPath.'index');

    }  //End Services Page

    public function getPageServiceDetails()
    {
//        $categories = Category::select('id', 'name_'.LaravelLocalization::getCurrentLocale().' as name','image')->take(8)->get();
//        $posts      = Post::select('id', 'company_id', 'position', 'slug', 'description', 'last_date', 'contract', 'location','carrer_level')->orderBy('id', 'desc')->where('status',1)->get()->take(6);
//        $allPost    = Post::where('status',1)->count();
//        return view('frontend.pages.index',compact('categories', 'posts','allPost'));
        return view(self::$viewPath.'service_details');

    }  //End Services Page

    public function getPageExteriorPaintingServiceDetails()
    {
        return view(self::$viewPath.'exterior_painting_details');

    }  //End getPageExteriorPainting
}

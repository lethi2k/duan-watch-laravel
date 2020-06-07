<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\CompanyModel;
use App\CategoryBlogModel;
use Auth;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    function __construct(){
        $this->Base();
        $this->Dangnhap();
    }
    function Base(){
        $company = CompanyModel::limit(1)->get();
        $cateblog = CategoryBlogModel::all();
        return view()->share(['company'=>$company,'cateblog'=>$cateblog]);
    }
    function Dangnhap(){
        if(Auth::check()){
            return view()->share(['user_login'=>Auth::user()]);
        }
    }
}

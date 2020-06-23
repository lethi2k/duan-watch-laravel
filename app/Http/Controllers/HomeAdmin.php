<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SliderModel;
use App\AdvertisementModel;
use App\BlogModel;
use App\CategoryBlogModel;
use App\CommentBlog;
use App\ContactModel;
use App\ProductModel;
use App\CateProductModel;
use App\CategoryProductModel;
use App\CommentModel;
use App\OderModel;
use App\BillModel;
use App\User;
class HomeAdmin extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $count_comment = CommentModel::all()->count();
        $count_product = ProductModel::all()->count();
        $count_trade = AdvertisementModel::all()->count();
        $count_cate = CateProductModel::all()->count();
        $count_cate_blog = CategoryBlogModel::all()->count();
        $count_user = User::all()->count();
        $count_bill = BillModel::all()->count();
        $count_blog = BlogModel::all()->count();
        return view('back-end.index',compact('count_comment','count_product','count_trade','count_cate','count_cate_blog','count_user','count_bill','count_blog'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

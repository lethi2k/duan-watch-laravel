<?php

namespace App\Http\Controllers;
use App\CommentModel;
use Illuminate\Http\Request;

class Comment extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $show = CommentModel::paginate(10);
        $Count = count(CommentModel::all());
        return view('back-end.Comment.index',['show' =>$show, 'Count' => $Count]);
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
        $comment = CommentModel::find($id);
        if($comment == null){
            header("location: " . asset('') . "admin/comment/index?msg=id không tồn tại");
        }
        CommentModel::destroy($id);
        return redirect('admin/comment/index');
    }

    public function search(Request $request)
    {
        if ($request->ajax()) {
            $output = '';
            $comment = CommentModel::where('product_id', 'LIKE', '%' . $request->search . '%')->get();
            if ($comment) {
                foreach ($comment as $key => $cate) {
                    $output .= '<tr>
                    <td>' . $cate->id . '</td>
                    <td>' . $cate->user . '</td>
                    <td>' . $cate->product_id . '</td>
                    <td>' . $cate->content_comment . '</td>
                    <td>
                    <a href="'.'admin/comment/delete/'.$cate->id.'" class="btn btn-sm btn-danger btn-remove">Xóa</a>
                    </td>
                    </tr>';
                }
            }
            return Response($output);
        }
    }


}

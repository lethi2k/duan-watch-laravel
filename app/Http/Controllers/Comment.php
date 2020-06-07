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


    public function destroy($id)
    {
        $comment = CommentModel::find($id);
        if($comment == null)
        {
            header("location: " . asset('') . "admin/comment/index?msg=id không tồn tại");
        }
        CommentModel::destroy($id);
        return redirect('admin/comment/index');
    }

    
    public function search(Request $request)
    {

        if ($request->ajax()) 
        {
            $output = '';
            $comment = CommentModel::where('content_comment', 'LIKE', '%' . $request->search . '%')->get();
            if ($comment) 
            {

                foreach ($comment as $key => $cate) 
                {
                    $output .= '<tr>
                    <td>' . $cate->id . '</td>
                    <td>' . $cate->User->username . '</td>
                    <td>' . $cate->Product->product_name . '</td>
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
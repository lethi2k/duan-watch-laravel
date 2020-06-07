<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\CommentBlog;


class CommentBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $show = CommentBlog::paginate(10);
        $Count = count(CommentBlog::all());
        return view('back-end.Comment.commentbl',['show' =>$show, 'Count' => $Count]);
    }

    public function destroy($id)
    {
        $comment = CommentBlog::find($id);
        if($comment == null){
            header("location: " . asset('') . "admin/commentbl/index?msg=id không tồn tại");
        }
        CommentBlog::destroy($id);
        return redirect('admin/commentbl/index');
    }


    public function search(Request $request)
    {

        if ($request->ajax()) 
        {
            $output = '';
            $comment = CommentBlog::where('content', 'LIKE', '%' . $request->search . '%')->get();
            if ($comment) 
            {

                foreach ($comment as $key => $cate) 
                {
                    $output .= '<tr>
                    <td>' . $cate->id . '</td>
                    <td>' . $cate->User->username . '</td>
                    <td>' . $cate->Blog->name_blog . '</td>
                    <td>' . $cate->content . '</td>
                    <td>
                    <a href="'.'admin/commentbl/delete/'.$cate->id.'" class="btn btn-sm btn-danger btn-remove">Xóa</a>
                    </td>
                    </tr>';
                }

            }
            return Response($output);
        }

    }

}

<?php

namespace App\Http\Controllers;

use App\Comment;
use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{

    public function delete($id, $idNews) {
        $comment= Comment::find($id);
        $comment->delete();

        return redirect('admin/news/edit/'.$idNews);
    }

    public function comment(Request $request, $id) {
        $idTin= $id;
        $comment= new Comment;
        $tintuc= News::find($id);
        $comment->idTinTuc= $idTin;
        $comment->idUser= Auth::user()->id;
        $comment->NoiDung= $request->NoiDung;
        $comment->save();

        return redirect("tintuc/$id/".$tintuc->TieuDeKhongDau)->with('thongbao', 'Viết bình luận thành công');
    }
}

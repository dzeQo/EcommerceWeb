<?php

namespace App\Http\Controllers;

use App\Models\comments;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    //
    public function index(){
        $comments = comments::all();
        return view('admin.comments.index' , ['comments' => $comments]);
    }
        //delete comments
        public function TrachComment($id){
            comments::where('id' , $id)->delete();
            return redirect('/admin/comments');
        }
    
        //edit commemts
        public function updateCmnt($id){
            $data=comments::find($id);
            return view('admin.comments.update' , ['comment'=>$data]);
        }
        public function editCmnt( Request $req ,  $id){
            $req->validate([
                'status'=>'required'
            ]);
            $cm = comments::find($id);
            $cm->status = $req->status;
            $cm->save();
    
            return redirect('/admin/comments')->with('success', 'Product has been updated');
        }
    
}

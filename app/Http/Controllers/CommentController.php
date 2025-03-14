<?php

namespace App\Http\Controllers;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function create(Request $request)
    {

        $comment = new Comment();
      
        $comment->lastname = $request->lastname;
        $comment->firstname = $request->firstname;
        $comment->email = $request->email;
        $comment->postId = $request->postId;
        $comment->comment = $request->comment;
        $comment->save();

        return view('comment', [
            'comment' => $comment
        ]);

    
    }

    public function delete(Request $request)
    {
        $comment = Comment::find($request->id);
        $comment->delete();
        return redirect()->route('post', ['id' => $comment->postId])->with('success', 'Commentaire bien supprimé');
    }


    public function edit($id)
    {
        $comment = Comment::findOrFail($id);

        return view('update_comment', [
            'comment' => $comment
        ]);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'lastname' => 'required|string',
            'firstname' => 'required|string|',
            'email' => 'required|email|',
            'comment' => 'required|string',
        ]);

        $comment = Comment::findOrFail($id);
        $comment->update($validatedData);

        return redirect()->route('post', ['id' => $comment->postId])->with('success', 'Commentaire bien modifié');
    }

}

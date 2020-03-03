<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Post;
use App\Comment;


class PostController extends Controller
{
    public function add(Request $request) {

       $this->validate($request, [
            'title' => 'required|max:255',
            'text' => 'required',
        ]);

       $post = new Post();
       $post->title = $request->input('title');
       $post->text = $request->input('text');

       $post -> save();

       $request->session()->flash('status', 'Post inserito correttamente!');
       return redirect()->route('homepage');
    }

    public function delete($id) {
      $post = Post::where('id', $id)->first();
      $post->delete();

      return redirect()->route('homepage');
    }

    public function edit($id) {
      $post = Post::find($id);

      return view('editpost', $post);
    }

    public function update(Request $request, $id) {
      $this->validate($request, [
           'title' => 'required|max:255',
           'text' => 'required',
      ]);

      $post = Post::find($id);
      $post->update($request->all());

      return redirect()->route('homepage');
    }


    public function single($id) {
      $post = Post::where('id', $id)->with(['comments'])->first();

      return view('singlepost', $post);
    }


    public function newcomment($id) {
      return view('newcomment', ['postid' => $id]);
    }

    public function addcomment(Request $request, $idpost) {
      $this->validate($request, [
           'text' => 'required',
      ]);

      $comment = new Comment();
      $comment->text = $request->input('text');
      $comment->post_id = $idpost;

      $comment->save();

      $request->session()->flash('commentstat', 'Commento aggiunto correttamente');
      return redirect()->route('singlepost', $idpost);
    }

}

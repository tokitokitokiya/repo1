<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\PostRequest;
/**
 * Post一覧を表示する
 * 
 * @param Post Postモデル
 * @return array Postモデルリスト
 */

class PostController extends Controller
{
    public function index(Post $post)//インポートしたPostをインスタンス化して$postとして使用。
    {
        return view('posts/index')->with(['food' => $post->getPaginateByLimit()]);
    }
    
    public function show(Post $post){
        return view('posts/show')->with(['mise' => $post]);
    }
    
    public function create(){
        return view('posts/create');
    }
    
    public function store(Post $post, PostRequest $request){
        $input=$request['post'];
        $post->fill($input)->save();
        return redirect('/posts/' . $post->id);
    }
    
}

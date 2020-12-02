<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    //
    function getPosts(){
     
      $posts=[
        "post1"=>["title"=>"this is first post","body"=>"this is body of post 1" ], 
        "post2"=>["title"=>"this is second post","body"=>"this is body of post 2" ],
        "post3"=>["title"=>"this is third post","body"=>"this is body of post 3" ]
      ];
 
        return view('blog.posts', ['posts'=> $posts]);
    }


    function posttitle($title){
      $body=null;
      $posts=[
        "post1"=>["title"=>"this is first post","body"=>"this is body of post 1" ], 
        "post2"=>["title"=>"this is second post","body"=>"this is body of post 2" ],
        "post3"=>["title"=>"this is third post","body"=>"this is body of post 3" ]
      ];
      //$post=request("posttitle");
      foreach($posts as $key => $value){
      if($value['title']==$title){
      $body=$value['body']; 
      break;}
     
    }if($body){
      return view('blog.posttitle',['body'=> $body ]);
    }else{
      abort("404");
    }
  
     
 
    }
   function displayPosts(){
     $posts=Post::all();
     return view("posts.show",["posts"=>$posts]);
   } 
   function createPost(){
 return view("posts.addpost");
}
function insertPost(){
  $data=request();

        $title=request("title");
        $slug=request("slug");
        $body=request("body");
        $version=request("version");
        Post::create([
          "title"=>$title,
          "slug"=>$slug,
          "body"=>$body,
          "version"=>$version,
        ]);
       // return redirect("posts.show");
       return redirect()->route('posts');

}

}

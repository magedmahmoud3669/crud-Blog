@extends('lab4.structure')
<h1> Add new post </h1>

        <form action="{{route("post.store")}}" method="POST">
        @csrf
       
        <div class="form-group row">
            <label style="margin-left: 20px;" for="name" class="col-sm-2 col-form-label">Title</label>
            <input type="text" class="form-control" value="{{old('title') }}"

name="title" id="name" aria-describedby="std_nameHelp">
            <label class="col-sm-2 col-form-label">{{$errors->first("title")}}</label>
        </div>

        <div class="form-group row">
            <label style="margin-left: 20px;" for="slug" class="col-sm-2 col-form-label">slug</label>
            <input type="text" class="form-control" value="{{old('slug') }}"  name="slug" id="name" aria-describedby="std_nameHelp">
            <label class="col-sm-2 col-form-label">{{$errors->first("slug")}}</label>
        </div>

        <div class="form-group row">
            <label style="margin-left: 20px;" for="body" class="col-sm-2 col-form-label">body</label>
            <textarea class="form-control" value="{{old('body') }}"  name="body" id="track" aria-describedby="std_nameHelp"> </textarea>
            <label class="col-sm-2 col-form-label">{{$errors->first("body")}}</label>
        </div>

        <div class="form-group row">
            <label for="name" style="margin-left: 35px;">version</label>
            <input type="text" class="form-control" value="{{old('version') }}"  name="version" id="name" aria-describedby="std_nameHelp">
            <label class="col-sm-2 col-form-label">{{$errors->first("version")}}</label>
        </div>
      
            <button type="submit" class="btn btn-primary">Submit</button>
            
    </form>
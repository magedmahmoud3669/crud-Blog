<h1> Edit post </h1>

<form action="{{route("post.update",$post)}}" method="post">
@csrf


    <input type="hidden" method="put">
    <div class="form-group">
            <label for="name">Title</label>
            <input type="text" class="form-control"  name="title"   value="{{$post["title"]}}" id="name" aria-describedby="std_nameHelp">
        </div>
        <div class="form-group">
            <label for="slug">slug</label>
            <input type="text" class="form-control"  name="slug" value="{{$post["slug"]}}" id="name" aria-describedby="std_nameHelp">
        </div>
        <div class="form-group">
            <label for="body">body</label>
            <input class="form-control"  name="body" value="{{$post["body"]}}" id="track" aria-describedby="std_nameHelp"> </input>
        </div>
        <div class="form-group">
            <label for="name">version</label>
            <input type="text" class="form-control"  name="version" value="{{$post["version"]}}" id="name" aria-describedby="std_nameHelp">
        </div>  


    <button type="submit" class="btn btn-primary">Submit</button>
</form>
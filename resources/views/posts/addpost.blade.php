<h1> Add new post </h1>
        <form action="{{route("posts.show")}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Title</label>
            <input type="text" class="form-control"  name="title" id="name" aria-describedby="std_nameHelp">
        </div>
        <div class="form-group">
            <label for="slug">slug</label>
            <input type="text" class="form-control"  name="slug" id="name" aria-describedby="std_nameHelp">
        </div>
        <div class="form-group">
            <label for="body">body</label>
            <textarea class="form-control"  name="body" id="track" aria-describedby="std_nameHelp"> </textarea>
        </div>
        <div class="form-group">
            <label for="name">version</label>
            <input type="text" class="form-control"  name="version" id="name" aria-describedby="std_nameHelp">
        </div>  

            <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<body>
<table class="table table-dark" border="1px">
    <thead class="thead-dark">
          <tr>
              <th scope="col">
                  title
              </th>
              <th scope="col">
                slug
              </th>
              <th scope="col">
                  body
              </th>
              <th scope="col">
                  version
              </th>
              <th scope="col" colspan="3">
                  action
              </th>
          </tr>
          </thead>
        @foreach($post as $post)
            <tr>
                <td>
                {{$post["title"]}}
              
                </td>
                <td>
                {{$post["slug"]}}
                </td>
                <td>
                {{$post["body"]}}
                </td>
                <td>
                {{$post["version"]}}
                </td>
                <td>
                    <a href="{{route("post.show",$post)}}">
                        Show  
                    </a>
                </td>
                <td>
                    <a href="{{route("post.edit",$post)}}">
                        Edit 
                    </a>
                </td>
                <td>
                    <form method="post"  action="{{route("post.destroy",$post)}}">
                        @csrf
                        @method("delete")
                        <input type="submit"  value="Delete" class="btn btn-danger" >
                    </form>
                </td>
            </tr>


        @endforeach
        </table>
        <a  href="{{route("post.create")}}">add new post</a>
   
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
</body>
</html> 
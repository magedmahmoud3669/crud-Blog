<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<body>
<table border="1px">
          <tr>
              <th>
                  title
              </th>
              <th>
                slug
              </th>
              <th>
                  body
              </th>
              <th>
                  version
              </th>
          </tr>
        @foreach($posts as $po)
            <tr>
                <td>
                {{$po["title"]}}
              
                </td>
                <td>
                {{$po["slug"]}}
                </td>
                <td>
                {{$po["body"]}}
                </td>
                <td>
                {{$po["version"]}}
                </td>
            </tr>


        @endforeach
        </table>
   <a href="{{route("posts.add")}}">Add post</a>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
</body>
</html> 
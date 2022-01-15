<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
 <div class="container">

     <form action="{{route('intervention.store')}}" method="post" enctype="multipart/form-data">
         @csrf
         <div class="form-group">
             <label for="pwd">Image:</label>
             <input type="file" class="form-control" name="image">
         </div>

         <div class="form-group">
             <input type="submit" class="btn btn-success" value="Submit">
         </div>

         <div class="form-group">
             <a href="{{route('intervention.delete')}}" class="btn btn-success">Delete Image</a>
         </div>
     </form>
 </div>

</body>
</html>

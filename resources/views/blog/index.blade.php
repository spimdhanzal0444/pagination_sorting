<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

    <div class="container">
        <h2>Create Blog Post</h2>
        <form action="{{route('json.post.insert')}}" method="post">
            @csrf
            <div class="form-group">
                <label>Category Name:</label>
                <a href="{{route('ajax')}}" class="btn btn-outline-dark">Ajax Index</a>
                <input type="text" class="form-control" placeholder="Category Name" name="category">
            </div>

            <div class="card control-group after-add-more">
                <div class="card-body">

                    <div class="input-group-btn">
                        <button class="btn btn-success add-more" type="button"><i class="glyphicon glyphicon-plus"></i>Add Item</button>
                    </div>

                    <div class="form-group">
                        <label>Image:</label>
                        <input type="file" class="form-control" placeholder="image" name="image[]">
                    </div>


                    <div class="form-group">
                        <label>Title:</label>
                        <input type="text" class="form-control" placeholder="Title" name="title[]">
                    </div>

                    <div class="form-group">
                        <label>Link:</label>
                        <input type="text" class="form-control" placeholder="Link" name="link[]">
                    </div>

                    <div class="form-group">
                        <label>Status:</label>
                        <select class="form-control" name="status[]">
                            <option selected>Set Status</option>
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Copy Fields -->
            <div class="card copy hide">
                <div class="control-group">
                    <div class="input-group-btn">
                        <button class="btn btn-danger remove" type="button"><i class="glyphicon glyphicon-remove"></i>Remove Item</button>
                    </div>

                    <div class="form-group">
                        <label>Image:</label>
                        <input type="file" class="form-control" placeholder="image" name="image[]">
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <label>Title:</label>
                            <input type="text" class="form-control" placeholder="Title" name="title[]">
                        </div>

                        <div class="form-group">
                            <label>Link:</label>
                            <input type="text" class="form-control" placeholder="Link" name="link[]">
                        </div>

                        <div class="form-group">
                            <label>Status:</label>
                            <select class="form-control" name="status[]">
                                <option selected>Set Status</option>
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            {{--    Form Submit   --}}
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script>
        $(document).ready(function() {


            $(".add-more").click(function(){
                var html = $(".copy").html();
                $(".after-add-more").after(html);
            });


            $("body").on("click",".remove",function(){
                $(this).parents(".control-group").remove();
            });


        });
    </script>

</body>
</html>

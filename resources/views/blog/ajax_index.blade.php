<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2>Ajax Example</h2>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
        Add Item
    </button>

    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Ajax Heading</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="" method="" id="ajaxform">

                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="fname" placeholder="First Name">
                            <div class="input-group-append">
                                <span class="input-group-text">@example.com</span>
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="lname" placeholder="Last Name">
                            <div class="input-group-append">
                                <span class="input-group-text">@example.com</span>
                            </div>
                        </div>


                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="email" placeholder="Your Email">
                            <div class="input-group-append">
                                <span class="input-group-text">@example.com</span>
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="password" placeholder="Password">
                            <div class="input-group-append">
                                <span class="input-group-text">@example.com</span>
                            </div>
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" id="save" data-dismiss="modal">Save</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <h2>crud</h2>
    <p id="msg" class="lead text-success"></p>
    <h2><a href=""></a></h2>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>SN</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
            <th>Password</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody id="tbody">
            @foreach($data as $key=>$row)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$row->fname}}</td>
                    <td>{{$row->lname}}</td>
                    <td>{{$row->email}}</td>
                    <td>{{$row->password}}</td>
                    <td>
                        <a href="" class="btn btn-success btn-sm">edit</a>
                        <a href="" class="btn btn-danger btn-sm">delete</a>
                        <a href="" class="btn btn-info btn-sm">View</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script>
    $(document).ready(function (){
        $('#save').click(function (event){
            event.preventDefault();

            var fname = $('#fname').val();
            var lname = $('#lname').val();
            var email = $('#email').val();
            var password = $('#password').val();
            let _token   = $('meta[name="csrf-token"]').attr('content');

            $.ajax({
                url: "/ajax_add",
                type:"POST",
                data:{
                    fname:fname,
                    lname:lname,
                    email:email,
                    password:password,
                    _token: _token
                },
                success:function(response){
                    if(response) {
                        var tr = `
                                <tr>
                                    <td>${response.data.id}</td>
                                    <td>${response.data.fname}</td>
                                    <td>${response.data.lname}</td>
                                    <td>${response.data.email}</td>
                                    <td>${response.data.password}</td>
                                    <td>
                                        <a href="" class="btn btn-success btn-sm">edit</a>
                                        <a href="" class="btn btn-danger btn-sm">delete</a>
                                        <a href="" class="btn btn-info btn-sm">View</a>
                                    </td>
                                </tr>
                                `
                        $('#tbody').append(tr)
                        $('#msg').text(response.msg)
                    }
                },
                error: function(error) {
                    console.log(error);
                }
            });

        })
    })
</script>

</body>
</html>


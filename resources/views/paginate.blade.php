<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <link rel="stylesheet" href="{{asset('assets/bootstrap.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</head>
<body>

<div class="container">
    <div class="card">
        <div class="card-header">
            <h3 class="lead text-center"><centar>This is pagination table</centar></h3>
            <input class="form-control mr-sm-2" id="search" type="search" placeholder="Search......">
        </div>

        <div class="card-header">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th width="5%" class="sorting" data-sorting_type="asc" data-column_name="id" style="cursor: pointer">ID <span id="id_icon"></span></th>
                    <th class="sorting" data-sorting_type="asc" data-column_name="title" style="cursor: pointer">Title <span id="post_title_icon"></span></th>
                    <th>Description</th>
                    <th>Short Description</th>
                </tr>
                </thead>
                <tbody>
                    @include('include.paginate_data')
                </tbody>
            </table>
            <input type="hidden" name="hidden_page" id="hidden_page" value="1" />
            <input type="hidden" name="hidden_column_name" id="hidden_column_name" value="id" />
            <input type="hidden" name="hidden_sort_type" id="hidden_sort_type" value="asc" />
        </div>

        <div class="card-footer">
            <td colspan="3" align="center">
                {!! $paginates->links() !!}
            </td>
        </div>
    </div>
</div>
<script src="{{asset('assets/popper.js')}}"></script>
<script>
    $(document).ready(function(){
        function clear_icon()
        {
            $('#id_icon').html('');
            $('#post_title_icon').html('');
        }

        function fetch_data(page, sort_type="", sort_by="", query=""){
            $.ajax({
                url:"/pagination/fetch_data?page="+page+"&sortby="+sort_by+"&sorttype="+sort_type+"&query="+query,
                success:function(data)
                {
                    $('tbody').html('');
                    $('tbody').html(data);
                },
                error:function (error){
                    console.log(error)
                }
            })
        }

        $(document).on('keyup', '#search', function(){
            var query = $('#search').val();
            var column_name = $('#hidden_column_name').val();
            var sort_type = $('#hidden_sort_type').val();
            var page = $('#hidden_page').val();
            fetch_data(page, sort_type, column_name, query);
        });

        $(document).on('click', '.sorting', function(){
            var column_name = $(this).data('column_name');  //title
            var order_type = $(this).data('sorting_type'); //asc
            var reverse_order = '';
            if(order_type == 'asc')
            {
                $(this).data('sorting_type', 'desc');
                reverse_order = 'desc';
                clear_icon();
                $('#'+column_name+'_icon').html('<span class="glyphicon glyphicon-triangle-bottom"></span>');
            }
            if(order_type == 'desc')
            {
                $(this).data('sorting_type', 'asc');
                reverse_order = 'asc';
                clear_icon()
                $('#'+column_name+'_icon').html('<span class="glyphicon glyphicon-triangle-top"></span>');
            }
            $('#hidden_column_name').val(column_name);
            $('#hidden_sort_type').val(reverse_order);
            var page = $('#hidden_page').val();
            var query = $('#search').val();
            fetch_data(page, reverse_order, column_name, query);
        });

        $(document).on('click', '.pagination a', function(event){
            event.preventDefault();
            var page = $(this).attr('href').split('page=')[1];
            $('#hidden_page').val(page);
            var column_name = $('#hidden_column_name').val();
            var sort_type = $('#hidden_sort_type').val();

            var query = $('#search').val();

            $('li').removeClass('active');
            $(this).parent().addClass('active');
            fetch_data(page, sort_type, column_name, query);
        });
    })
</script>

</body>
</html>

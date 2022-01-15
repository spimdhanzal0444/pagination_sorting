@foreach($paginates as $paginate)
    <tr>
        <td>{{$paginate->id}}</td>
        <td>{{$paginate->title}}</td>
        <td>{{$paginate->description}}</td>
        <td>{{$paginate->sort_description}}</td>
    </tr>
@endforeach

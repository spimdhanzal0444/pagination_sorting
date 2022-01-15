<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blade template</title>
</head>
<body>

    <h2>
        @forelse($students as $key=> $valye)

            <p> {{$valye}}</p>

            @if($loop->first)
                Loop Count {{$loop->count}}
            @endif

            @if($loop->last)
                {{$loop->even}}
                Loop count ended
            @endif

            @empty
            Number not found
        @endforelse


    </h2>

</body>
</html>

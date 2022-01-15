<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<div>
    <h2>Student List</h2>

{{--    @foreach($students as $stu)--}}

{{--        @if(count($students) > 0)--}}
{{--            @includeIf("student")--}}
{{--        @else--}}
{{--            <li>Student not found</li>--}}
{{--        @endif--}}

{{--    @endforeach--}}

{{--    @forelse($students as $comment)--}}
{{--        @include('student')--}}
{{--    @empty--}}
{{--        <li>No found</li>--}}
{{--    @endforelse--}}

    @each('student', $students, 'stu', 'notFount')
</div>

</body>
</html>

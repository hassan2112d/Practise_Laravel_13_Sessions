<h2>Hello_World</h2>

{{"hello"}}

{!! "<script>alert('hiii');</script>"!!}

<br>
{{5+9}}

@php
    $user = ["Hassan","Ali"];
@endphp

<br>

<ul>
    @if(count($user) > 0)
        @foreach ($user as $users)
            <li>{{$loop->iteration}}: {{$users}}</li>
        @endforeach
    @else
        <li><h1>No data</h1></li>
    @endif
</ul>

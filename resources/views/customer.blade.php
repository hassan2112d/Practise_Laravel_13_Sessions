<h1>Customer Page</h1>


        @foreach($fruit as $id => $f)
            <li>{{$id}}  {{$f['name']}} </li>
            <a href="{{route('view.customer', $id)}}"> Show More </a>
        @endforeach
   

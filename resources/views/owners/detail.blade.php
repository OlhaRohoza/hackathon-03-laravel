<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Owner Info</title>
</head>
<body>
      <a href="http://www.hackathon3.test/index"><button>Back to main</button></a>
    <h1>{{$owner->first_name .' '. $owner->surname}}</h1>


    <p>Email: {{$owner->email}}</p>
    <p>Phone: {{$owner->phone}}</p>
    <p>Address: {{$owner->address}}</p>
    
    <ul>
    @foreach ($animals as $animal) 
        <li> <a href="{{ route('animals.detail', $animal->id)}}">{{$animal->name. ' - ' . $animal->species. ' breed: ' . $animal->breed}} </a> </li>
    @endforeach
    </ul>

 
    <form action="{{ route('animals.store', $owner->id)}}" method="post">
        @csrf
        <button type='submit' class="edit">Add a pet</button>
    </form>

    
</body>
</html>
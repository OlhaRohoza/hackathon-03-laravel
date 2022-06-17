<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    <title>Animal Info</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <a href="http://www.hackathon3.test/index"><button>Back to main</button></a>
     
    @include('common/message')

    <h1>{{$animal->name}}</h1>

    <div class="animal__container">

        @if(isset($animal_image->path))
        <div class="animal__img">
           
            <img src="{{'/images/pets/' . $animal_image->path}}" alt="animal image">
            
        </div>
        @endif

        <div class="animal__info">
            <h4>{{$animal->species}} : {{$animal->breed}}</h4>
            <p>Age: {{$animal->age}}</p>
            <p>Weight: {{$animal->weight}}</p>

            <h4> Owner: <a href="{{ route('owners.detail', $owner->id)}}">{{$owner->first_name . ' ' . $owner->surname}} </a> </h4>

            <br>
            <a href="{{route('animals.edit', ['animalId' => $animal->id])}}" >
                <button class="edit">Edit an animal</button>
            </a>

            <br>
            <br>

            <form action="{{route('animals.delete', $animal->id)}}" method="post">
                @csrf
                @method('delete')

                <button>DELETE the pet</button>
            </form>

        </div>
    </div>
  
</body>
</html>
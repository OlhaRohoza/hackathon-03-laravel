<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    <title>Animal Info</title>
</head>
<body>
    
    <div class="animal__container">

    
    <div class="animal__img">
        {{-- images/pinky.jpg --}}
        <img src="{{'/images/pets/' . $animal_image->path}}" alt="animal image">
        {{-- <img src="images/pinky.jpg" alt="animal image"> --}}
    </div>

    <div class="animal__info">
        <h1>{{$animal->name}}</h1>
        <h4>{{$animal->species}} : {{$animal->breed}}</h4>
        <p>Age: {{$animal->age}}</p>
        <p>Weight: {{$animal->weight}}</p>

        <?php foreach ($animal_owners as $owner) : ?>
            <li> <a href="/owners/detail/{{$owner->id}}">{{$owner->first_name . ' ' . $owner->surname}} </a>
            </li>
        <?php endforeach; ?>

    </div>
    </div>
    


    
</body>
</html>
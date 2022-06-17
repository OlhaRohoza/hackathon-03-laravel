<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vetclinic Main Page</title>
</head>
<body>
    <h1>Welcome to our vetclinic!</h1>

    <h2>Search for an owner or a pet</h2>
 
    <form action="{{route('owner.search', 'surname')}}" method="get">
        @csrf
        @method('get')

        <label for='owner_surname'> Search for an owner</label>
        <br>
        <input type="text" name="surname" value="">
        <button>Search</button>    

    </form>
  <br>
     {{-- have to add route for action!!! --}}
    <form action="{{route('animal.search', 'animal_name')}}" method="get">
        @csrf
        @method('get')

        <label for='pet_name'> Search for a pet</label>
        <br>
        <input type="text" name="animal_name" value="">
        <button>Search</button>     
    </form>

    <h2>Here will go clickable list of owners:</h2>
        <ul>    
            @foreach ($owners as $key => $owner)            
                <li> 
                    {{-- to add correct route for detail href!!! --}}                         
                   
                    <b>Owner:  <a href="#"> </b> {{$owner->first_name}} {{$owner->surname}} 
                    </a>
                    <br>
                   
                    <b>Pet name: </b> <a href="#"> {{$animals_name[$key]}}
                    
                    <br>                        
                    <img src="/images/pets/{{ $animals_img[$key]}}" width="200" alt="">
                    </a>
                    <br>
                </li>
            @endforeach
        </ul>
      
</body>
</html>
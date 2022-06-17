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
    {{-- have to add route for action!!! --}}
    <form action="" method="get">
         @csrf
        <label for='owner_name'> Search for an owner</label>
        <br>
        <input type="text" name="owner_name" value="">
        <button>Search</button>     
    </form>
  <br>
     {{-- have to add route for action!!! --}}
    <form action="" method="get">
         @csrf
        <label for='pet_name'> Search for a pet</label>
        <br>
        <input type="text" name="owner_name" value="">
        <button>Search</button>     
    </form>

    <h2>Here will go clickable list of animals:</h2>

      
</body>
</html>
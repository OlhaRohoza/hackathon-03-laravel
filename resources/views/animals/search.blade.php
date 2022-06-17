<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Search resuls</title>
</head>
<body>

    <h1>List of results for '{{$search_word}}'</h1>

    <div class="result__animal">
        <ul>
        @foreach ($animals as $animal)
            <li>{{$animal->name}}</li> 
            

        @endforeach

        </ul>



    </div>

    
</body>
</html>
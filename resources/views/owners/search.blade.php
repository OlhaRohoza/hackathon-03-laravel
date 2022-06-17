<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Search resuls</title>
</head>
<body>

    <h1>List of results for '{{$search_word}}' consist of {{count($owners)}} lines </h1>

    <div class="result__owner">

        <ul>
            @foreach ($owners as $owner)
                <li> <a href="/owners/detail/{{$owner->id}}"> {{$owner->first_name}} <strong>{{$owner->surname}} </strong> </a></li> 
            @endforeach
        </ul>
    </div>


</body>
</html>
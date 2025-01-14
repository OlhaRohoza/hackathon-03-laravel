<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $animal->id ? 'Edit': 'Create' }} an animal</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    {{-- @include('common/messages') --}}
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li style="color: red">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif


    <h1>{{ $animal->id ? 'Edit': 'Create' }} an animal</h1>
    @if ($animal->id)
        <form action="{{ route('animals.update', ['animalId' => $animal->id]) }}" method="post">
            @method('put')
    @else
        <form action="{{ route('animals.store', $animal->owner_id) }}" method="post">
    @endif
        @csrf

            <label>Name:</label>
            <input
                type="text"
                name="name"
                value="{{ old('name', $animal->name) }}"
            >
            <br>
            <br>

            <label>Species:</label>
            <input
                type="text"
                name="species"
                value="{{ old('species', $animal->species) }}"
            >
            <br>
            <br>
            <label>Breed:</label>
            <input
                type="text"
                name="breed"
                value="{{ old('breed', $animal->breed) }}"
            >
            <br>
            <br>
            <label>Age:</label>
            <input
                type="text"
                name="age"
                value="{{ old('age', $animal->age) }}"
            >
            <br>
            <br>
            <label>Weight:</label>
            <input
                type="text"
                name="weight"
                value="{{ old('weight', $animal->weight) }}"
            >
        <br>
        <br>
        <button>Send</button>

    </form>
    <br>
     <a href="http://www.hackathon3.test/index"><button>Back to main</button></a>
</body>
</html>
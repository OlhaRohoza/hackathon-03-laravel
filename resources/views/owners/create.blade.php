<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create owner</title>
</head>
<body>
        <a href="http://www.hackathon3.test/index"><button>Back to main</button></a>
    <h1>Create an owner</h1>
    <form action="" method="post">
        @csrf
            <label>Name:</label>
            <input
                type="text"
                name="first_name"
                value=""
            >

            <label>Surname:</label>
            <input
                type="text"
                name="surname"
                value=""
            >
            <label>Email:</label>
            <input
                type="text"
                name="email"
                value=""
            >
            <label>Phone:</label>
            <input
                type="text"
                name="phone"
                value=""
            >
            <label>Address:</label>
            <input
                type="text"
                name="address"
                value=""
            >

        <button>Create</button>
        <br>
     

    </form>
</body>
</html>
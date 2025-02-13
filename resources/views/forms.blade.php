<!DOCTYPE html>

<html>

<head>

    <title>Laravel Custom Validation Rule Example - ItSolutionStuff.com</title>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container">



    <h1>Laravel Custom Validation Rule Example - ItSolutionStuff.com</h1>



    <form method="POST" action="{{ route('custom.validation.post') }}">



        {{ csrf_field() }}



        <div class="mb-3">

            <label class="form-label" for="inputName">Name:</label>

            <input

                type="text"

                name="name"

                id="inputName"

                class="form-control @error('name') is-invalid @enderror"

                placeholder="Name">



            @error('name')

            <span class="text-danger">{{ $message }}</span>

            @enderror

        </div>



        <div class="mb-3">

            <label class="form-label" for="inputEmail">Birth Year:</label>

            <input

                type="text"

                name="birthday"

                id="inputEmail"

                class="form-control @error('birth_year') is-invalid @enderror"

                placeholder="Birth Year">



            @error('birth_year')

            <span class="text-danger">{{ $message }}</span>

            @endif

        </div>



        <div class="mb-3">

            <button class="btn btn-success btn-submit">Submit</button>

        </div>

    </form>

</div>

</body>

</html>

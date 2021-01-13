<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>One Three Five List</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Roboto&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Styles -->
    <style>
        html,
        body {
            color: #636b6f;
            font-family: 'Open Sans', sans-serif;
            font-weight: 400;
            height: 100vh;
            margin: 0;
        }

        /* Typography */
        h1,
        h2,
        h3,
        h5 {
            font-family: 'Roboto', sans-serif;
            padding: .375rem .75rem;
        }

        h1 {
            font-size: 2.5rem;
            color: #40376e;
        }

        h5 {
            color: #744afe;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        /* Layout */
        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        /* Forms */
        .form-group {
            margin-bottom: 1rem;
        }

        .form-group .form-control {
            margin-top: .5rem;
        }

        .form-control {
            border-radius: 0;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row flex-center position-ref full-height">
            @if (Route::has('login'))
            <div class="top-right links">
                @auth
                <a href="{{ url('/home') }}">Home</a>
                @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}">Register</a>
                @endif
                @endauth
            </div>
            @endif

            <div class="col-md-7">
                <h1 class="mb-4">
                    Today I will Accomplish...
                </h1>

                <form>
                    <div class="form-group">
                        <h5>1 Big Thing</h5>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Big task item here">
                    </div>

                    <div class="form-group">
                        <h5>3 Medium Things</h5>
                        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Medium task item here">
                        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Medium task item here">
                        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Medium task item here">
                    </div>

                    <div class="form-group">
                        <h5>5 Little Things</h5>
                        <input type="text" class="form-control" id="formGroupExampleInput3" placeholder="Little task item here">
                        <input type="text" class="form-control" id="formGroupExampleInput3" placeholder="Little task item here">
                        <input type="text" class="form-control" id="formGroupExampleInput3" placeholder="Little task item here">
                        <input type="text" class="form-control" id="formGroupExampleInput3" placeholder="Little task item here">
                        <input type="text" class="form-control" id="formGroupExampleInput3" placeholder="Little task item here">
                    </div>
                </form>
            </div>
        </div>
    </div><!--/container -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh5U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
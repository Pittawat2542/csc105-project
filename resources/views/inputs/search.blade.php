<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Inputs</title>
    <style>
        .input-group {
            width: 33.072916666vw;
        }

        .no-rounding {
            border-radius: 0;
            width: 33.072916666vw;
        }
        .border-only-bottom{
            border-top: 0;
            border-left: 0;
            border-right: 0;
        }
        .border-only-bottom:focus{
            box-shadow: 0 2px 2px -2px #405377;
        }
    </style>
</head>

<body>
    <form class="form-inline md-form form-sm mt-0">
        <i class="fa fa-search" aria-hidden="true"></i>
        <input class="form-control form-control-sm ml-3 w-30 no-rounding border-only-bottom" type="text" placeholder="Search . . ." aria-label="Search">
      </form>
</body>

</html>
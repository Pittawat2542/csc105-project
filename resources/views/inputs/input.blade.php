<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Inputs</title>
  <style>
    @font-face {
      font-family: Delicious;
      src: url('Delicious-Roman.otf');
    }

    @font-face {
      font-family: Delicious;
      font-weight: bold;
      src: url('Delicious-Bold.otf');
    }

    .input-group-text {
      padding: 0.2rem 0.2rem;
      background-color: #405377;
    }

    .input-group {
      width: 33.072916666vw;
    }

    .no-rounding {
      border-radius: 0;
    }

    .input-label {
      color: #405377;
      font-family: "Helvetica Neue", Helvetica, sans-serif;
    }
  </style>
</head>

<body>
  <label for="name" class="input-label">name</label>
  <br>
  <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text no-rounding"></span>
    </div>
    <input type="text" class="form-control no-rounding">


</body>

</html>
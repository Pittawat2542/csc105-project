<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="{{asset('css/navbar.css')}}" rel="stylesheet">
    <title>Hello, world!</title>

    <style>
        a {
            color: #405377 !important;
        }

        a:hover {
            color: #273A5E !important;

        }

        button.btn {
            border-radius: 0;
            font-size: 1.25rem;
            font-weight: 500;
            text-transform: uppercase;
            -webkit-box-shadow: 0px 5px 5px 0px rgba(0,0,0,0.3);
            -moz-box-shadow: 0px 5px 5px 0px rgba(0,0,0,0.3);
            box-shadow: 0px 5px 5px 0px rgba(0,0,0,0.3);
        }

        button.btn.btn-primary {
            border: 3px solid #405377;
            background-color: #405377;
        }

        button.btn.btn-primary:hover {
            border: 3px solid #273A5E;
            background-color: #273A5E;
        }

        button.btn.btn-outline-primary {
            border: 3px solid #405377;
            color: #405377;
        }

        button.btn.btn-outline-primary:hover {
            background-color: #405377;
            color: white;
        }

        input {
            -webkit-box-shadow: 0px 5px 5px 0px rgba(0,0,0,0.3);
            -moz-box-shadow: 0px 5px 5px 0px rgba(0,0,0,0.3);
            box-shadow: 0px 5px 5px 0px rgba(0,0,0,0.3);
        }

        input.form-control {
            border: 0;
            border-radius: 0;
            color: #405377;
        }

        input.form-control::placeholder {
            color: #405377;
        }

        .input-group .input-group-prepend .input-group-text {
            background-color: #405377;
            border: 0;
            border-radius: 0;
            padding: .375rem 0.5rem;
            -webkit-box-shadow: 0px 5px 5px 0px rgba(0,0,0,0.3);
            -moz-box-shadow: 0px 5px 5px 0px rgba(0,0,0,0.3);
            box-shadow: 0px 5px 5px 0px rgba(0,0,0,0.3);
        }

        form {
            width: 33.33%;
            margin: 0 auto;
        }

        label {
            color: #405377;
        }

        .form-buttons {
            text-align: center;
        }

        .form-buttons > button {
            width: 47.25%;
        }

        .form-buttons > button:first-child {
            float: left;
        }

        .form-buttons > button:last-child {
            float: right;
        }

        .form-button > button {
            width: 100%;
        }

        .header {
            color: #405377;
            font-weight: 700;
            text-align: center;
            text-transform: uppercase;
        }



    </style>
</head>

<body>

@include('navbar.navbar')

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col">
            <h2 class="header mb-3">Reset Password</h2>

            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"></span>
                        </div>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    </div></div>
                <div class="form-button">
                    <button type="submit" class="btn btn-primary">Reset Password</button>
                </div>
            </form>
        </div>
    </div>
</div>

@include('footer.footer')

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
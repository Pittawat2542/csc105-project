<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .container {
            display: block;
            position: relative;
            padding-left: 35px;
            margin-bottom: 12px;
            cursor: pointer;
            font-size: 22px;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .container input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
        }

        .checkmark {
            position: absolute;
            top: 0;
            left: 0;
            height: 20px;
            width: 20px;
            background-color: white;
            border-radius: 50%;
            box-shadow: 1px 2px 4px 1px #ccc;
        }

        .container:hover input~.checkmark {
            background-color: white;
        }

        .container input:checked~.checkmark {
            background-color: white;
        }

        .checkmark:after {
            content: "";
            position: absolute;
            display: none;
        }

        .container input:checked~.checkmark:after {
            display: block;
        }

        .container .checkmark:after {
            top: 33%;
            left: 34%;
            width: 0.33em;
            height: 0.33em;
            border-radius: 50%;
            background: #405377;
        }
    </style>
</head>

<body>
    <h1>Something</h1>
    <label class="container">yes
        <input type="radio" name="something" value="yes">
        <span class="checkmark"></span>
    </label>
    <label class="container">no
        <input type="radio" name="something" value="no">
        <span class="checkmark"></span>
    </label>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
    <style>
        .container {
            display: block;
            position: relative;
            padding-left: 40px;
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
            height: 0;
            width: 0;
        }

        .checkmark {
            position: absolute;
            top: 0;
            left: 0;
            height: 25px;
            width: 25px;
            background-color: white;
            box-shadow: 1px 2px 4px 1px #ccc;
        }

        .container:hover input~.checkmark {
            background-color: white;
        }

        .container input:checked~.checkmark {
            background-color: white;
        }

        .checkmark:after {
            content: "✓";
            position: absolute;
            display: none;
            font-size: 1.6rem;
        }

        .container input:checked~.checkmark:after {
            display: block;
        }

        .container .checkmark:after {
            left: 5px;
            top: -10px;
            width: 5px;
            height: 10px;
            border-width: 0 3px 3px 0;
        }
    </style>
</head>

<body>
    <br>
    <div>
        <label class="container ml-0 ">something
            <input type="checkbox" id="something" name="name" value="something">
            <span class="checkmark"></span>
        </label>
        
    </div>
</body>

</html>
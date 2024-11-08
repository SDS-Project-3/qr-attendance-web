<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/index_style.css') }}">
    <link rel=stylesheet href="\css\myapp.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
</head>
<body>

    @auth
    <p>Congrats you are logged in.</p>
    <form action="/logout" method="POST">
        @csrf
        <button>Log out</button>

    @else
    <div class = "homepageThing">
        <h1 class = "headingTitle">QR Code Attendance recorder for School of Digital Science</h1>
        
        <h1 style = "margin-bottom = 0"> </h1>
        <h1 style="color: black; font-size: 25px;font-family: sans-serif;">Register as lecturer</h1>

        <form action="/register-staff" method="POST">
            @csrf
            <input name="lecturer_name" type="text" placeholder="name">
            <input name="lecturer_email" type="text" placeholder="email">
            <input name="lecturer_password" type="password" placeholder="password">
            <button style= "background-color: rgb(56, 56, 103);
            Border: 1px solid white;
            color: white;">Register</button>
        </form>

    </div>
    <div class = "login">
        <h2 style ="font-family: sans-serif">Login as lecturer</h2>

        <form action="/login-staff" method="POST">
            @csrf
            <input name="lecturer_name" type="text" placeholder="name">
            <input name="lecturer_password" type="password" placeholder="password">
            <button>Log in</button>
        </form>

    </div>
    @endauth


</body>
</html>

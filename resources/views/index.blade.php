<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code Attendance Portal</title>
    <link rel="stylesheet" href="{{ asset('css/index_style.css') }}">

</head>
<body>

    <header>
        <div class="logo">
            <h1>Student Attendance System</h1>
        </div>
    </header>
</div>
<div class="topnav">
    <a class="active" href="#home">Home</a>
    <a href="#news">News</a>
    <a href="#contact">Contact</a>
    <a href="#about">About</a>
</div>
    <div class="banner">
        <img src="{{ asset('images/banner.JPG') }}" alt="Banner Image" class="banner-image">
        <h1 class="banner-text">Student and Lecture Portal</h1>
    </div>


    <div class="content">
        <div class="description">

        </div>
    </div>

    <div class="container">
        <div class="card">
            <img src="{{ asset('images/Student.png') }}" alt="Student" style="width: 50%; height: auto;">
            <h2>Student Login</h2>
            <p>Access attendance history</p>
            <a class="button" href="{{ route('home') }}">Login</a>
        </div>

    </div>
    <div class="container">

        <div class="card">
            <img src="{{ asset('images/Lecturer.png') }}" alt="Lecturer" style="width: 50%; height: auto;">
            <h2>Lecture Login</h2>
            <p>Generate QR code, review attendance</p>
            <a class="button" href="{{ route('home3') }}">Login</a>
        </div>
    </div>


    <footer>
        <p>&copy; 2024 Student Lecture Portal</p>
    </footer>

</body>
</html>

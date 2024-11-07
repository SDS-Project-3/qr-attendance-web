<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code Attendance Portal</title>
    <link rel="stylesheet" href="{{ asset('css/index_style.css') }}">

</head>
<body>
<div class="hero">
    <nav>
        <img src="{{ asset('images/UBD LOGO.png') }}" class="logo" style="width:5%; height:auto;">
        <ul>
            <li><a href="#">About</a></li>
            <li><a href="#">Features</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
        <div>
            <a href="{{ route('home-login') }}" class="login-btn">Student Log In</a>
            <a href="#" class="login-btn">Lecturer Log In</a>
        </div>
    </nav>
    <div class="content">
        <h1 class="anim">QR Code Attendance</h1>
        <p class="anim">Welcome to the QR Code Attendance Portal! This system simplifies attendance tracking by allowing students
             to quickly scan a QR code to register their presence, while lecturers can easily generate unique QR codes for each session.
              Streamline attendance management with a secure and efficient solution designed for modern classrooms.</p>
              <a href="#" class="login-btn anim">Learn More</a>
    </div>
    <img src="{{ asset('images/Scan.png') }}" class="feature-img anim">
</div>

<!--
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
            <a class="button" href="lecture_login.html">Login</a>
        </div>
    </div>


    <footer>
        <p>&copy; 2024 Student Lecture Portal</p>
    </footer>
-->
</body>
</html>

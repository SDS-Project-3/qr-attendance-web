<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/index_style.css') }}">
    <title>Student Attendance Form</title>
    <style>

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f4f6;
        }
        header {
            background-color: #004e92;
            color: white;
            text-align: center;
            padding: 20px 0;
        }
        .container {
            max-width: 1200px;
            margin: auto;
            padding: 20px;
            display: flex;
            flex-direction: column; /* Stack forms vertically */
            align-items: center; /* Center forms horizontally */
            justify-content: center; /* Center forms vertically */
        }
        .form-container {
            width: 100%; /* Full width for better appearance */
            max-width: 400px; /* Limit the width for larger screens */
            margin: 10px 0; /* Margin between forms */
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #ffffff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #004e92;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }
        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        .form-group button {
            padding: 10px 15px;
            background-color: #008CBA;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .form-group button:hover {
            background-color: #005f7f;
        }
        .alert {
            color: red;
            margin-bottom: 15px;
        }
        footer {
            text-align: center;
            padding: 20px;
            background-color: #004e92;
            color: white;
            position: relative;
            bottom: 0;
            width: 100%;
        }

    </style>
</head>
<body>
<div class="hero">
    <div class="layer">
        <nav>
            <img src="{{ asset('images/UBD LOGO.png') }}" class="logo" style="width:5%; height:auto;">
            <ul>
                <li><a href="#">About</a></li>
                <li><a href="#">Features</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            <div>
                <a href="{{ route('home') }}" class="login-btn">Student Log In</a>
                <a href="#" class="login-btn">Lecturer Log In</a>
            </div>
        </nav>
    <div class="container">
        @auth
            <div class="form-container">
                <h2>Student Attendance Form</h2>
                @if ($errors->any())
                    <div class="alert">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="/attendance" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="student-id">Student ID A:</label>
                        <input type="text" id="student-id" name="student_id" required>
                    </div>
                    <div class="form-group">
                        <label for="student-name">Student Name:</label>
                        <input type="text" id="student-name" name="student_name" required>
                    </div>
                    <div class="form-group">
                        <label for="student-email">Student Email:</label>
                        <input type="email" id="student-email" name="student_email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="student_password" required>
                    </div>
                    <div class="form-group">
                        <button type="submit">Submit Attendance</button>
                    </div>
                </form>
                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit">Log Out</button>
                </form>
            </div>
        @else
            @if (session('registered'))
                <div class="form-container">
                    <h2>Registration Successful!</h2>
                    <p>Please log in with your credentials.</p>
                </div>
            @endif
<p></p>
{{--
<div class="form-container">
    <h2>Student Login</h2>
    @if ($errors->any())
        <div class="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="/login" method="POST">
        @csrf
        <div class="form-group">
            <label for="student-id">Student ID:</label>
            <input type="text" id="student-id" name="student_id" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div class="form-group" style="display: flex; justify-content: space-between;">
            <button type="submit" class="register-button">Log In</button> <!-- Keep as a submit button -->
            <a href="{{ url('/register') }}" class="register-button">Register</a> <!-- Link to the registration page -->
        </div>
    </form>
</div>

<p></p>
--}}
            <div class="form-container"> {{-- Top --}}
                <h2>Student Login</h2>
                @if ($errors->any())
                    <div class="alert">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="/login" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="student-id">Student ID:</label>
                        <input type="text" id="student-id" name="student_id" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="student_password" required>
                    </div>
                    <div class="form-group">
                        <button type="submit">Log In</button>
                    </div>
                </form>
            </div>
<p></p>
            <div class="form-container"> {{-- Bottom --}}
                <h2>Student Registration</h2>
                @if ($errors->any())
                    <div class="alert">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="/register" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="student-id">Student ID:</label>
                        <input type="text" id="student-id" name="student_id" required>
                    </div>
                    <div class="form-group">
                        <label for="student-name">Student Name:</label>
                        <input type="text" id="student-name" name="student_name" required>
                    </div>
                    <div class="form-group">
                        <label for="student-email">Student Email:</label>
                        <input type="email" id="student-email" name="student_email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="student_password" required>
                    </div>
                    <div class="form-group">
                        <button type="submit">Register</button>
                    </div>
                </form>
            </div>
        @endauth
    </div>
</div>
</div>
</body>
</html>


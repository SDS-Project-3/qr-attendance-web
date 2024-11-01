<<<<<<< HEAD
=======
<!DOCTYPE html>
>>>>>>> 0c2af13b8644056852ba8d1afb48be82614af515
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <title>Document</title>
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
    </form>
    <main>
        <form action="/" id="qr-generation-form">
            @csrf
            <div class="form-group">
                <label for="mod-major-dd">Select Module Major:</label>
                <select name="module-major" id="mod-major-dd" class="dd-select">
                    <option value="">-- Select --</option>
                    <option value="ZA">ZA - Artificial Intelligence & Robotics</option>
                    <option value="ZC">ZC - Computer Science</option>
                    <option value="ZD">ZD - Data Science</option>
                    <option value="ZI">ZI - Applied Artificial Intelligence</option>
                    <option value="ZS">ZS - Cybersecurity & Forensics</option>
                    <option value="ZZ">ZZ - Degree Core</option>
                </select>
            </div>

            
            <div class="form-group">
                <label for="module-dd">Select Module:</label>
                <select name="module-num" id="module-dd" class="dd-select">
                    <option value="">-- Select --</option>
                    <option value="1102">1102</option>
                    <option value="1103">1103</option>
                    <option value="1104">1104</option>
                    <option value="1201">1201</option>
                    <option value="1202">1202</option>
                    <option value="1301">1301</option>
                    <option value="2201">2201</option>
                    <option value="2202">2202</option>
                    <option value="2203">2203</option>
                    <option value="2204">2204</option>
                    <option value="2205">2205</option>
                    <option value="2301">2301</option>
                    <option value="2302">2302</option>
                    <option value="3201">3201</option>
                    <option value="3202">3202</option>
                    <option value="3301">3301</option>
                    <option value="3302">3302</option>
                    <option value="3303">3303</option>
                    <option value="3304">3304</option>
                    <option value="3305">3305</option>
                    <option value="3306">3306</option>
                    <option value="3307">3307</option>
                    <option value="3308">3308</option>
                    <option value="3309">3309</option>
                    <option value="3310">3310</option>
                    <option value="3311">3311</option>
                    <option value="3312">3312</option>
                    <option value="3313">3313</option>
                    <option value="4201">4201</option>
                    <option value="4202">4202</option>
                    <option value="4290">4290</option>
                    <option value="4301">4301</option>
                    <option value="4302">4302</option>
                    <option value="4303">4303</option>
                    <option value="4304">4304</option>
                    <option value="4305">4305</option>
                    <option value="4306">4306</option>
                    <option value="4307">4307</option>
                    <option value="4308">4308</option>
                    <option value="4309">4309</option>
                    <option value="4310">4310</option>
                    <option value="4311">4311</option>
                    <option value="4313">4313</option>
                    <option value="4314">4314</option>
                    <option value="4315">4315</option>
                </select>
            </div>

            <div class="form-group">
                <label for="period-dd">Select Module Period:</label>
                <select name="module-period" id="period-dd" class="dd-select">
                    <option value="">-- Select --</option>
                    <option value="AM1">Period 01: 0750 - 0940</option>
                    <option value="AM2">Period 02: 0950 - 1140</option>
                    <option value="AN0">Period 03: 1150 - 1340</option>
                    <option value="PM1">Period 04: 1410 - 1600</option>
                    <option value="PM2">Period 05: 1610 - 1800</option>
                </select>
            </div>
            
            <div class="form-group">
                <input type="date" name="module-date" id="date">
            </div>

            <input type="submit" value="Generate QR Code" />

        </form>

        <br />
        <div id="qr-code"></div>


        <form action="/debuggingQR" method="GET" id="debugging-form">
            <input type="hidden" name="pk" value="{{ old('pk') }}" id="pk">
            <input type="submit" value="Go to Attendance Page" />
        </form>

    </main>

    <script src="/js/qr-gen.js"></script>

    @else        
    <div class = "homepageThing">
        <h1 class = "headingTitle">QR Code Attendance recorder for School of Digital Science</h1>
        <img src="https://ubd.edu.bn/wp-content/uploads/2023/11/UBD-logo-Oct2023-219x300.png" alt="Trulli" width="150" height="200" class="center">
        <h1 style = "margin-bottom = 0"> </h1>
        <h1 style="color: white; font-size: 25px;font-family: sans-serif;">Register as lecturer</h1>
        <form action="/register" method="POST">
            @csrf
            <input name="name" type="text" placeholder="name">
            <input name="email" type="text" placeholder="email">
            <input name="password" type="password" placeholder="password">
            <input name="subject" type="text" placeholder= "subject">
            <button style= "background-color: rgb(56, 56, 103);
            Border: 1px solid white;
            color: white;">Register</button>
        </form>
    </div>
    <div class = "login">
        <h2 style ="font-family: sans-serif">Login as lecturer</h2>
        <form action="/login" method="POST">
            @csrf
            <input name="loginname" type="text" placeholder="name">
            <input name="loginpassword" type="password" placeholder="password">
            <button>Log in</button>
        </form>
    </div>
    @endauth

    
</body>
</html>
=======
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
            flex-wrap: wrap;
            justify-content: space-between;
        }
        .form-container {
            flex: 1 1 300px;
            margin: 10px;
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
    <header>
        <h1>Student Attendance System</h1>
    </header>

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
                        <input type="password" id="password" name="password" required>
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
                    <div class="form-group">
                        <button type="submit">Log In</button>
                    </div>
                </form>
            </div>

            <div class="form-container">
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
                        <input type="password" id="password" name="password" required>
                    </div>
                    <div class="form-group">
                        <button type="submit">Register</button>
                    </div>
                </form>
            </div>
        @endauth
    </div>

    <footer>
        <p>SDS Student Attendance Form</p>
    </footer>
</body>
</html>
>>>>>>> 0c2af13b8644056852ba8d1afb48be82614af515

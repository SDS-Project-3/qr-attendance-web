<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code Generator</title>
    <link rel="stylesheet" href="{{ asset('css/index_style.css') }}">

    <!-- Select2 CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />

    <!-- jQuery and Select2 JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
    <!--
    <link rel="stylesheet" href="{{asset('css/qr-gen.css')}}">
    -->

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
        <nav>
            <img src="{{ asset('images/UBD LOGO.png') }}"  class="logo" style="width:5%; height:auto;">
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
    <main>
        <div class="form-container">
        <form action="/create-form" id="qr-generation-form">
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
                <label for="period-dd">Date:</label>
                <input type="date" name="module-date" id="date">
            </div>

            <input class="btn" type="submit" value="Generate QR Code" />

        </form>

        <br />
        <div id="qr-code"></div>


        <form action="/debuggingQR" method="GET" id="debugging-form">
            <input type="hidden" name="pk" value="{{ old('pk') }}" id="pk">
            <input type="submit" class="btn" value="Go to Attendance Page" />
        </form>
    </div>
    </main>

    <script src="/js/qr-gen.js"></script>
</div>
</body>
</html>

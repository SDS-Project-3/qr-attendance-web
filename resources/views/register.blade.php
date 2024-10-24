<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        .success {
            color: green;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
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
                <h2>Attendance Submitted</h2>
                @if (session('success'))
                    <div class="success">{{ session('success') }}</div>
                @endif
                <h3>Your Attendance History</h3>
                <table>
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Student ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($attendances as $attendance)
                            <tr>
                                <td>{{ $attendance->attendance_date }}</td>
                                <td>{{ $attendance->student_id ?? 'None'}}</td>
                                <td>{{ $attendance->student_name ?? 'None'}}</td>
                                <td>{{ $attendance->student_email ?? 'None'}}</td>
                                <td>{{ $attendance->present ? 'Present' : 'Absent' }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <form action="/logout" method="POST" style="margin-top: 20px;">
                    @csrf
                    <button type="submit">Log Out</button>
                </form>
            </div>
        @else
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
            </div>
        @endauth
    </div>

    <footer>
        <p>SDS Student Attendance Form</p>
    </footer>
</body>
</html>

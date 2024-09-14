<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Attendance Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .form-container {
            max-width: 400px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #f9f9f9;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
        .form-group button {
            padding: 10px 15px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .form-group button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Student Attendance Form</h2>
        <form action="/" method="POST">
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
                <button type="submit">Submit Attendance</button>
            </div>
        </form>
    </div>
</body>
</html>

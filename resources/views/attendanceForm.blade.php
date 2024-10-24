<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/register-attendance" method="POST">
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
</body>
</html>

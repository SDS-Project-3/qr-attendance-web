<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="app.css">
</head>
<body style="  margin: 0;
  padding: 0;
  background-color: white;">

    @auth
    <p>Congrats you are logged in.</p>
    <form action="/logout" method="POST">
        @csrf
        <button>Log out</button>
    </form>
    <div style="border: 3px solid black;">
        <h2>Create a New Post</h2>
        <form action="/create-post" method="POST">
            @csrf
            <input type="text" name="title" placeholder="post title">
            <textarea name="body"placeholder="body content..."></textarea>
            <button>Save Post</button>
        </form>
    <div style="border: 3px solid black;">
        <h2>All Posts</h2>
        @foreach($posts as $post)
        <div style="background-color: gray; padding: 10px; margin: 10px;">
            <h3>{{$post['title']}} by {{$post->user->name}}</h3>
            {{$post['body']}}
            <p><a href="/edit-post/{{$post->id}}">Edit</a></p>
            <form action="/delete-post/{{$post->id}}" method="POST">
                @csrf
                @method('DELETE')
                <button>Delete</button>
            </form>
        </div>
        @endforeach
    </div>

    @else        
    <div style="border: 3px solid black;
    background-color: rgb(20, 20, 69);
    padding-left: 16px;
    padding-right: 16px;">
        <h1 style="color: white; font-size: 50px;font-family: sans-serif;">QR Code Attendance recorder for School of Digital Science</h1>
        <img src="https://ubd.edu.bn/wp-content/uploads/2023/11/UBD-logo-Oct2023-219x300.png" alt="Trulli" width="200" height="300" style="transform: translate(600px);">
        <h1 style = "margin-bottom = 0"> </h1>
        <h1 style="color: white; font-size: 25px;font-family: sans-serif;">Register as lecturer</h1>
        <form action="/register" method="POST">
            @csrf
            <input name="name" type="text" placeholder="name">
            <input name="email" type="text" placeholder="email">
            <input name="password" type="password" placeholder="password">
            <input name ="class" type="class" placeholder="class: ZC-...">
            <button style= "background-color: rgb(56, 56, 103);
            Border: 1px solid white;
            color: white;">Register</button>
        </form>
    </div>
    <div style="border: 1px solid black;
    padding-left: 16px;
    padding-right: 16px;">
        <h2 style="font-family: sans-serif;">Login as lecturer</h2>
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
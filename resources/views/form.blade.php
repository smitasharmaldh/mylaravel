<html>
    <head>
        <title>My Form</title>
    </head>
    <body>
        <form action="Formcontrollers" method="POST">
            @csrf
            <input type="text" placeholder="Username" name="user">@error('user')<div>{{$message}}</div>@enderror<br><br>
            <input type="password" placeholder="Password" name="password">@error('password')<div>{{$message}}</div>@enderror<br><br>
            <input type="text" placeholder="Contact Number" name="phone">
            @error('phone')<div>{{$message}}</div>@enderror
            <br><br>
            <button type="submit">submit</button>
        </form>
        
    </body>
</html>

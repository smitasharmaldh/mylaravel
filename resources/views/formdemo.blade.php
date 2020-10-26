<html>
    <head>
        <title>My Form</title>
    </head>
    <body>
        <form action="auth1" method="GET">
            @csrf
            <input type="text" placeholder="Email" name="email"><br><br>
            <input type="password" placeholder="Password" name="password"><br><br>


            <br><br>
            <button type="submit">submit</button>
        </form>

    </body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/light.css" id="theme">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
</head>
<script>
        function toggle()
        {
            if(document.getElementById('theme').href = "css/light.css")
            {
                document.getElementById('theme').href = "css/dark.css";
            }
            else 
            {
                document.getElementById('theme').href = "css/light.css";
            }
        }

        function toggle2()
        {
            if(document.getElementById('theme').href = "css/dark.css")
            {
                document.getElementById('theme').href = "css/light.css";
            }
            else 
            {
                document.getElementById('theme').href = "css/dark.css";
            }
        }
</script>
<body>
        <button id="switch" class="" onclick="toggle()"></button>
        <button id="switch2" class="" onclick="toggle2()"></button>
        <div class="container">
                <form method="post" class="needs-validation" novalidate>
                    <div class="form-group">
                        <label for="inputEmail">Email / Username</label>
                        <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email / Username" required>
                        <div class="invalid-feedback">Please enter a valid email address or username.</div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword">Password</label>
                        <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password" required>
                        <div class="invalid-feedback">Please enter your password to continue.</div>
                    </div>
                    <button type="submit" name="login" class="btn btn-primary btn-block">LOGIN</button>
                </form>
            </div>
            <!-- JS files: jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
            <script src="login/login.js"></script>
</body>
</html>
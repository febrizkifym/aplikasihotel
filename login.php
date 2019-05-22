<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Dashboard</title>
    <style>
        .container{
            text-align: center;
        }
        *{
            font-size:12pt;
            font-family:sans-serif;
        }
        body{
            background-color:#9368E9;
        }
        .login{
            background-color:#FFF;
            display:inline-block;
            margin:0 auto;
            margin-top:100px;
            padding:30px 50px;
            padding-bottom:50px;
            border-radius:2px;
            box-shadow:5px 5px 5px 5px rgba(0,0,0,0.2);
        }
        .form-group label{
            display:block;
            margin-bottom:5px;
            margin-top:5px;
        }
        .form-control{
            padding:10px 20px 10px 20px;
            margin-bottom:5px;
            background-color:#e5e5e5;
            border:2px solid #e5e5e5;
        }
        .form-control:focus{
            outline:none;
        }
        .btn{
            text-transform: uppercase;
            color:#FFF;
            width:100%;
            padding:10px 20px 10px 20px;
            background-color:#10a3ff;
            border:2px solid #10a3ff;
            cursor:pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="login">
           <form action="p_login.php" method="POST">
            <h3>Login Dashboard</h3>
            <div class="form-group">
                <input type="text" class="form-control" name="username" placeholder="Username">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
            <div class="form-group">
                <button class="btn" type="submit">Login</button>
            </div>
           </form>
        </div>
    </div>
</body>
</html>
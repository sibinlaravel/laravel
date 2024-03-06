<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
            .center {
                text-align: center;
                margin-top: 20%;
            }
        </style>
</head>
<body>
    <div class="center">
    <form method="post">
    @csrf()
       Email <input type="email" name="email" value="">
       <br><br>
       Password<input type="password" name="pass" value="">
       <br><br>
       <input type="submit" name="submit" value="Login">
     </form>
    </div>
</body>
</html>
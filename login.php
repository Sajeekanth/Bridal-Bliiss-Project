<!DOCTYPE html>
<html lang="en" >
<head>
  <title>Transparent Login Form</title>
  <link rel="stylesheet" href="css/login.css">
</head>

<body>
  
   </head>

<!-- partial:index.partial.html -->
 <body>
<form class="login-form" action="php/login.php" method="post">
  <h1>Login</h1>
  <div class="form-input-material">
    <input type="text" name="username" id="username" placeholder=" " autocomplete="off" class="form-control-material" required />
    <label for="username">Username</label>
  </div>
  <div class="form-input-material">
    <input type="password" name="password" id="password" placeholder=" " autocomplete="off" class="form-control-material" required />
    <label for="password"> Password</label>
  </div>
  <button type="submit" name="login" class="btn btn-primary btn-ghost">Login</button>
</form>
</body>
</html>

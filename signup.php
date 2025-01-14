<!DOCTYPE html>
<html lang="en" >
<head>
<body>
  <title>Transparent sigin Form</title>
  <link rel="stylesheet" href="css/sigin.css">
    </head>
</head>
<body>
 
<form class="login-form" action="php/signup.php" method="post">
  <h1 style="color: white;">Sigin</h1>
  <div class="form-input-material">
    <input type="text" name="username" id="username" placeholder=" " autocomplete="off" class="form-control-material" required />
    <label for="username" style="color: white;">Username</label>
  </div>
  <div class="form-input-material">
    <input type="password" name="password" id="password" placeholder=" " autocomplete="off" class="form-control-material" required />
    <label for="password" style="color: white;">Password</label>
  </div>
  
  <div class="form-input-material">
    <input type="email" name="email" id="email" placeholder=" " autocomplete="off" class="form-control-material" required />
    <label for="email" style="color: white;">Gmail ID</label>
  </div>
  <button type="submit" class="btn btn-primary btn-ghost">SIGIN</button>
</form>
<!-- partial -->
<a href="Home.php">

</body>
</html>

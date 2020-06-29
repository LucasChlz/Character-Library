<?php
  require("assets/header.php");
  require("assets/nav.php");
?>
<br>
<br>
<br>
<form method="POST">
  <div class="container">
  <div class="form-group">
    <label for="exampleInputEmail1">Nickname</label>
    <input type="text" name="name" class="form-control">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  <input type="submit" class="btn btn-primary" name="register"></input>
</form>
</div>
</body>
</html>
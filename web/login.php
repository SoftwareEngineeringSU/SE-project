<!DOCTYPE html>
<html lang="en">
<?php include 'php/navbar.php'; ?>

<body>
  <form class="well well-sm" method='POST' action='php/login.php' role="form" align=center style="width: 500px;margin-top: 150px;margin-left: 30%;">
    <h3 style="padding-bottom: 40px;"> Log In</h3>
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="text" class="form-control" name="email" placeholder="Enter email"> </div>
    <div class="form-group">
      <label>Password</label>
      <input type="password" class="form-control" name="password" placeholder="Password"> </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
  <div class="footer copy" style=" position: absolute;width: 100%; bottom: 0;"><p>&copy; 2017. All Rights Reserved | Design by <a>SE Project</a> </p></div>
</body>

</html>
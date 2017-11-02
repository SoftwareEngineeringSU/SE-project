<!DOCTYPE html>
<html>
<?php include "php/navbar.php"; ?>

<body>
  <script type="text/javascript">

      function checkForm(form)
      {
          if(form.password.value.length < 8) 
          {
              alert("Short Password!");
              form.password.focus();
              return false;
          }
          if(form.password.value != form.password2.value) 
          {
            alert("Passwords do not match!");
            form.password.focus();
            return false;
          }

      }

      </script>
    <form align=center class="form" action="php/register_user.php" id="register" method="POST" enctype="multipart/form-data" onsubmit="return checkForm(this);">
      <br>
      <br>
      <br>
      <br>
      <br>
      <div style="column-count: 2;"> First Name
        <br>
        <input required type="text" name="first_name" />
        <br>
        <br> Last Name :
        <br>
        <input required type="text" name="last_name" />
        <br>
        <br> Email Address :
        <br>
        <input required type="text" name="email" />
        <br>
        <br> Phone Number :
        <br>
        <input required type="int" name="phone" />
        <br>
        <br> Password :
        <br>
        <input required type="password" name="password" placeholder="************" />
        <br>
        <br> Confirm Password :
        <br>
        <input required type="password" name="password2" placeholder="************" />
        <br>
        <br> </div>
      <br>
      <br>
      <input type="submit" id="reg" value="Register">
      <br>
      <br>
      <br>
      <br>
      <br>
      <br> </form>
    <div class="footer copy navbar-fixed-bottom">
      <p>&copy; 2015 My_Albums. All Rights Reserved | Design by <a>SE Project</a> </p>
    </div>
    </div>
  </body>
  
</html>

<!DOCTYPE html>
<html>
  <?php include 'php/navbar.php'; ?>
  <body>
    <br><br><br>
    <form  id="upload" action="php/register_event.php" method="POST" enctype="multipart/form-data" align=center>
      <div  style="column-count: 2;" > 
        Event Name                        <br><input  type="text"     name="name"                required><br><br>
        Date                              <br><input  type="date"     name="date"                required><br><br>
        Time                              <br><input  type="time"     name="time"                required><br><br>
        Venue                             <br><input  type="text"     name="venue"               required><br><br><br><br>
        Price                             <br><input  type="text"     name="price"               required><br><br>
        Capacity                          <br><input  type="text"     name="capacity"            required><br><br>                    
        Description                       <br><textarea  rows="4" cols="50" name="info"></textarea><br>
        Image                            <input style="margin-left: 40%;" type="file"     name="image"        required><br><br>
      </div>
      <input type="submit"   value="Create"  class="btn btn-info"    name="Create">
    </form>
  </body>
  <div class="footer copy" style=" position: absolute;width: 100%; bottom: 0;">
    <p>&copy; 2017. All Rights Reserved | Design by <a>SE Project</a> </p>
  </div>
</html>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <form action="mail.php">
      <?php
        foreach ($_GET as $key=>$val) {
          $value = urldecode($val);
          echo "<span class='item'> $key = $value </span>";
          echo "<input type='hidden' name='$key' value='$value'>";
        }
        $address = $_SERVER['REMOTE_ADDR'];
        echo "<span class='item'>Address = $address</span>";
        echo "<input type='hidden' name='address' value='$address'>"
      ?>
      <input id="email" name="email" type="text" placeholder="email">
      <input type="submit" value="Send">
    </form>

  </body>
</html>

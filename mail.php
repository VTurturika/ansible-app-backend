<?php

foreach ($_GET as $key=>$val) {
  $value = urldecode($val);
  echo "<span class='item'> $key = $value </span>";
  echo "<input type='hidden' name='$key' value='$value'>";
}

// header("Location: index.php");
// die();

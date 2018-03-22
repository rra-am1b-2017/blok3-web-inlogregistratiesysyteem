<?php
  include("./connect_db.php");
  include("./functions/functions.php");

  $userrole = sanitize($_POST["userrole"]);
  $id = sanitize($_POST["id"]);

  $sql = "UPDATE `login` SET `userrole` = '{$userrole}' WHERE `login`.`id` = {$id}";

  mysqli_query($conn, $sql);

  header("Location: ./index.php?action=change_userrole");
?>
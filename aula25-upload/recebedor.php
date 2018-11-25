<?php
  $arquivo = $_FILES['arquivo'];
  if (isset($arquivo['tmp_name']) && !empty($arquivo['tmp_name'])) {
      move_uploaded_file($arquivo['tmp_name'], 'arquivo/'.$arquivo['name']);
      header("Location: index.php");
  }
?>
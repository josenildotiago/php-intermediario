<pre>
<?php
  $arquivo = $_FILES['arquivo'];
  $ext = $arquivo['type'];
  $extencao = explode("/",$ext);
  $final = $extencao[1];
  //print_r($arquivo);
  //echo $final;
  if (isset($arquivo['tmp_name']) && !empty($arquivo['tmp_name'])) {
      $nomedoarquivo = md5(time()).rand(0,99).".".$final;
      move_uploaded_file($arquivo['tmp_name'], 'arquivo/'.$nomedoarquivo);
      //header("Location: index.php");
      echo "Upload realizado com sucesso";
  }
?>
</pre>
<pre>
<?php
  $arquivo = $_FILES['arquivo'];
  $ext = $arquivo['name'];
  $ext2 = $arquivo['type'];
  $extencao = explode(".",$ext);
  $final = $extencao[1];
  $cond = explode("/",$ext2);
  $final2 = $cond[0];

if ($final2 == "image") {
  if (isset($arquivo['tmp_name']) && !empty($arquivo['tmp_name'])) {
    $nomedoarquivo = md5(time()).rand(0,99).".".$final;
    move_uploaded_file($arquivo['tmp_name'], 'arquivo/'.$nomedoarquivo);
    //header("Location: index.php");
    echo "Upload realizado com sucesso";
  }
} else {
  echo "Extenção não permetido";
}
?>
</pre>
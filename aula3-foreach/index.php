<?php header("Content-type: text/html; charset=utf-8"); ?>
<?php
$nomes = array("Lucas","Matheus","Miguel","Mariana");
  foreach ($nomes as $luno) {
      echo "Aluno: ".$luno."<br>";
  }
//Exemplo 2
$nomes2 = array(
  array("nome"=>"Lucas", "idade"=>15),
  array("nome"=>"Matheus", "idade"=>2),
  array("nome"=>"Miguel", "idade"=>1)
);
  foreach ($nomes2 as $aluno) {
    echo "Aluno: ".$aluno["nome"]." - Idade: ".$aluno;
  }
?>
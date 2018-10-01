<?php
  require("config.php");

if (isset($_FILES['arquivo'])) {

  $dir = "../images/img/";
  $ext = strtolower(substr($_FILES['arquivo']['name'], -4));
  $novoNome = microtime().$ext;
  move_uploaded_file($_FILES['arquivo']['tmp_name'], $dir.$novoNome);

  $dir2 = "../images/img/";
  $exti = strtolower(substr($_FILES['arquivo2']['name'], -4));
  $novoNome2 = microtime().$exti;
  move_uploaded_file($_FILES['arquivo2']['tmp_name'], $dir2.$novoNome2);


$sql_code = "INSERT INTO cad_produto(
produto,
preco,
categoria,
arquivo,
arquivo2,
descricao,
quantidade
)
VALUES (
'".$_POST['produto']."',
'".$_POST['preco']."',
'".$_POST['categoria']."',
'".$novoNome."',
'".$novoNome2."',
'".$_POST['descricao']."',
'".$_POST['quantidade']."'
)";
$query = mysqli_query($conexao, $sql_code);
if ($query) {
  echo "<script>alert('Produto Cadastrado Com Sucesso');</script>";
    echo "<META http-equiv='refresh' content='1;URL=http://localhost/Loja/projeto-topper/admin/'> ";
}
else {
  echo "Não foi possivel inserir o registro - entre em contato com o webmaster <br><br>".mysqli_error();
}
}else{
  echo "Eror";
}



?>
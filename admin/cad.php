<?php
  require("config.php");



$sql_code = "INSERT INTO cad_produto(
produto,
preco,
categoria,
arquivo
)
VALUES (
'".$_POST['produto']."',
'".$_POST['preco']."',
'".$_POST['categoria']."',
'teste.jpg'
)";
$query = mysqli_query($conexao, $sql_code);
if ($query) {
  echo "<script>alert('usuário cadastrado com sucesso');</script>";
    echo "<META http-equiv='refresh' content='1;URL=http://localhost/Loja/projeto-topper/admin/'> ";
}
else {
  echo "Não foi possivel inserir o registro - entre em contato com o webmaster <br><br>".mysqli_error();
}

if (isset($_FILES['arquivo'])) {

  $dir = "../images/";
  $ext = strtolower(substr($_FILES['arquivo']['name'], -4));
  $novoNome = microtime().$ext;

  move_uploaded_file($_FILES['arquivo']['tmp_name'], $dir.$novoNome);

}

?>
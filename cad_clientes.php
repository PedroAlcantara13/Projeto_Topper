<?php
 require("admin/config.php");

if (isset($_FILES['arquivo'])) {

  $dir = "images/cli/";
  $ext = strtolower(substr($_FILES['arquivo']['name'], -4));
  $novoNome = microtime().$ext;
  move_uploaded_file($_FILES['arquivo']['tmp_name'], $dir.$novoNome);


$sql_cli = "INSERT INTO clientes(
nome,
email,
celular,
senha,
arquivo
)
VALUES (
'".$_POST['nome']."',
'".$_POST['email']."',
'".$_POST['celular']."',
'".$_POST['senha']."',
'".$novoNome."'
)";
$query = mysqli_query($conexao, $sql_cli);
if ($query) {
  echo "<script>alert('Cadastro Efetuado Com Sucesso');</script>";
    echo "<META http-equiv='refresh' content='1;URL=http://localhost/Loja/projeto-topper/'> ";
}
else {
  echo "Não foi possivel inserir o registro - entre em contato com o webmaster <br><br>".mysqli_error();
}
}else{
  echo "Error";
}



?>
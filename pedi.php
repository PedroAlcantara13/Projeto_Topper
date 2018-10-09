<?php	

 require("admin/config.php");
  require("cart.php");


foreach ($_SESSION['carrinho'] as $id => $qnt) {

$sql_car = "SELECT * FROM cad_produto WHERE id = '$id'";
$query_car = mysqli_query($conexao, $sql_car);
$prods = mysqli_fetch_assoc($query_car);

$sql_cli = "INSERT INTO pedidos(
nome,
valor,
info,
quanti
)
VALUES (
'".$nomecli."',
'".$prods['preco']."',
'".$prods['produto']."',
'".$qnt."'
)";

$query = mysqli_query($conexao, $sql_cli);
if ($query) {
  echo "<script>alert('Pedido Finalizado com Sucesso');</script>";
    echo "<META http-equiv='refresh' content='1;URL=http://localhost/Loja/projeto-topper/'> ";
}
else {
  echo "Não foi possivel inserir o registro - entre em contato com o webmaster <br><br>".mysqli_error();
}
}

?>
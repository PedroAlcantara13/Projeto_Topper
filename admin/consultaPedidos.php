  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Dashboard
        <small>Consulta de Pedidos</small>
      </h1>
    </section>

    <!-- Main content -->
<div class="content">
      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th>#</th>
            <th>Código do Pedido</th>
            <th>Cliente</th>
            <th>Valor Un.</th>
            <th>Quantidade</th>
            <th>Valor Fin.</th>
            <th>Informações</th>
          </tr>
        </thead>
        <tbody>
            <?php
      include "config.php";

      $sqll = "SELECT * FROM pedidos";
      $busca = mysqli_query($conexao, $sqll);
   if (mysqli_num_rows($busca)<0) {      
      echo "Nenhum registro encontrado.";
   }else{


      while ($dados = mysqli_fetch_array($busca)) {     
      $total = $dados['quanti'] * $dados['valor'];           
      echo "
                <tr>
            <td>#</td>
            <td>".$dados['id']."</td>
            <td>".$dados['nome']."</td>
            <td>R$".$dados['valor']."</td>
            <td>".$dados['quanti']."</td>
            <td>".$total."</td>
            <td>".$dados['info']."</td>
            </tr>
";
}
}
?>
        </tbody>
      </table>

    </div>
</div>
<!-- ./wrapper -->
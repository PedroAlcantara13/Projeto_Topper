  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Dashboard
        <small>Consulta de Usuários</small>
      </h1>
    </section>

    <!-- Main content -->
    <div class="content">
      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th>#</th>
            <th>Produto</th>
            <th>Quantidade</th>
            <th>Valor Un.</th>
            <th>Ações</th>
          </tr>
        </thead>
        <tbody>
            <?php
      include "config.php";

      $sqll = "SELECT * FROM cad_produto";
      $busca = mysqli_query($conexao, $sqll);
   if (mysqli_num_rows($busca)<0) {      
      echo "Nenhum registro encontrado.";
   }else{


      while ($dados = mysqli_fetch_array($busca)) {                 
      echo "
                <tr>
            <td>".$dados['id']."</td>
            <td>".$dados['produto']."</td>
            <td>".$dados['quantidade']."</td>
            <td>R$".$dados['preco']."</td>
            <td><i class='fa fa-refresh'></i> | <i class='fa fa-trash'></i></td><br>
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
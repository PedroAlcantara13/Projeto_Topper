  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Dashboard
        <small>Cadastro Categoria</small>
      </h1>
    </section>


    <div class="content">
      <div class="row">
        <div class="col-md-12">

 <div class="content">
      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Nº Celular</th>
            <th>Email</th>
          </tr>
        </thead>
        <tbody>
            <?php
      include "config.php";

      $sqll = "SELECT * FROM clientes";
      $busca = mysqli_query($conexao, $sqll);
   if (mysqli_num_rows($busca)<0) {      
      echo "Nenhum registro encontrado.";
   }else{


      while ($dados = mysqli_fetch_array($busca)) {                 
      echo "
                <tr>
            <td>".$dados['id']."</td>
            <td>".$dados['nome']."</td>
            <td>".$dados['celular']."</td>
            <td>".$dados['email']."</td>

";
}
}
?>
        </tbody>
      </table>

    </div>
</div>
<!-- ./wrapper -->
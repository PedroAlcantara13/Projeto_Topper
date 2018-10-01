  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Dashboard
        <small>Cadastro Produtos</small>
      </h1>
    </section>

    <!-- Main content -->
    <div align="center">
    <div class="content">
      <div class="row">
        <div class="col-md-12">
    <form class="form-horizontal" name="agenda" action="cad.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label>Nome do Produto:</label>
      <input type="text" class="form-control" style="width: 500px;background-color: #87CEED" name="produto"autofocus required>
    </div>
    <div class="form-group">
      <label>Preço:</label>
      <input style="width: 500px;background-color: #87CEED" type="text" id="preco" class="form-control" name="preco"required>
    </div>
    <div class="form-group">
      <label>Cor:</label><br>
      <select class="selection-2" name="cor"><br>
                  <option>Azul Claro</option>
                  <option>Azul</option>
                  <option>Laranja</option>
                  <option>Vermelho</option>
                  <option>Marron</option>
                  <option>Preto</option>
                  <option>Cinza</option>

                </select>
    </div>
    
    <div class="form-group ">
      <label>Categoria</label><br>
      <select class="selection-2" name="categoria"><br>
                  <option>Women</option>
                  <option>Men</option>
                  <option>Kids</option>
                  <option>Accesories</option>
                </select>
    </div>
    <div class="form-group">
      <label>Descrição:</label>
      <input style="width: 500px;background-color: #87CEED" type="text" id="descricao" class="form-control" name="descricao"required>
    </div>

    <div class="form-group">
      <label>Quantidade:</label>
      <input style="width: 500px;background-color: #87CEED" type="number" id="quantidade" class="form-control" name="quantidade"required>
    </div>

    <div class="form-group">
      <label>Foto</label>
      <input style="margin-left: 480px;" align="center" type="file" class="form-control" name="arquivo" multiple required>
    </div>
    <div class="form-group">
      <label>Foto</label>
      <input style="margin-left: 480px;" align="center" type="file" class="form-control" name="arquivo2" multiple required>
    </div>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="idConfirmar"></label>
  <div class="col-md-8">
    <input type="submit" value="Confirmar" class="btn btn-primary">
    <button id="idCancelar" name="idCancelar" class="btn btn-danger">Cancelar</button>
  </div>
</div>
</div>

</fieldset>
</form>
        </div>
      </div>

    </div>
</div>
<!-- ./wrapper -->


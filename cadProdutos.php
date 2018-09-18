  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Cadastro de produtos</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form role="form">
      <div class="box-body">
        <div class="form-group">
          <label for="inputDescript">Descrição</label>
          <input type="descript" class="form-control" id="inputDescript" placeholder="Digite o nome do produto">
        </div>
	<div class="form-group">
          <label for="inputCod">Código</label>
          <input type="cod" class="form-control" id="inputCod" placeholder="Digite o código do produto">
        </div>
	<label for="inputCod">Preço</label>
	<div class="input-group"> 
          <span class="input-group-addon">$</span>
          <input type="text" class="form-control">
        <span class="input-group-addon">.00</span>
      </div>
      <div class="box-footer">
        <button type="submit" class="btn btn-primary">Salvar</button>
      </div>
    </form>
  </div>
  <!-- /.box -->

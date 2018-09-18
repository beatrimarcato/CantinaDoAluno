
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Cadastro de funcionários</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputName">Nome</label>
                  <input type="name" class="form-control" id="inputName" placeholder="Digite o nome do funcionário">
                </div>
		<div class="form-group">
                  <label for="inputCPF">CPF</label>
                  <input type="cpf" class="form-control" id="inputCPF" placeholder="Digite o CPF do funcionário">
                </div>
                <!-- select -->
                <div class="form-group">
                  <label>Função</label>
                  <select class="form-control">
                    <option>Administrativo</option>
                    <option>Operador de caixa</option>
                  </select>
                </div>
		<div class="form-group">
                  <label for="inputPass">Senha</label>
                  <input type="password" class="form-control" id="inputPass" placeholder="Digite a senha">
                </div>
		<!-- phone mask -->
              <div class="form-group">
                <label>Telefone</label>
		 <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-phone"></i>
                  </div>
                  <input type="text" class="form-control" data-inputmask='"mask": "(99) 9999-9999"' data-mask>
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->
	      <div class="form-group">
                <label>E-mail</label>
		 <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa-mail-forward"></i>
                  </div>
                  <input type="text" class="form-control" data-inputmask='"mask": ""' data-mask>
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->


              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Salvar</button>
              </div>
            </form>
          </div>
          <!-- /.box -->        

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Cadastro de alunos</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputName">Nome</label>
                  <input type="name" class="form-control" id="inputName" placeholder="Digite o nome do aluno">
                </div>
		<div class="form-group">
                  <label for="inputRA">RA</label>
                  <input type="cpf" class="form-control" id="inputRA" placeholder="Digite o RA do aluno">
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

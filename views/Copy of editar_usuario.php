<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
	<div class="col-md-12">
		<h1 class="page-header">Atualizar Usuário</h1>
	</div>
	
	<div class="col-md-12">
		<form  action="<?= base_url() ?>usuario/salvar_atualizacao" method="post" required>
			<input type="hidden" id="idUsuario" name="idUsuario" value="<?= $usuario[0]->idUsuario;?>">
			<div class="form-group">
    			<label for="nome">Nome:</label>
    		<input type="text" class="form-control" id="nome" name="nome" placeholder="Informe seu nome" value="<?= $usuario[0]->nome; ?>"  required> 
 			 </div>
  
  <div class="row">
  	<div class="col-md-3">
  		<div class="form-group">
    		<label for="cpf">CPF:</label>
    		<input type="text" class="form-control" name="cpf" id="cpf" placeholder="Informe seu cpf" value="<?= $usuario[0]->cpf; ?>"  required> 
  </div>
  		
  	</div>
  	<div class="col-md-7">
  		<div class="form-group">
   			 <label for="endereco">Endereço:</label>
   			 <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Informe seu endereço" value="<?= $usuario[0]->endereco; ?>" required>
  </div>
  	</div>
  	<div class="col-md-2">
  		<label for="nivel">Nível</label>
 	 	<select id="nivel" class="form-control" name="nivel"  required>
 	 		<option value="0">---</option>
 	 		<option value="1" <?= $usuario[0]->nivel==1?'selected':'' ; ?> >Usuario</option>
 	 		<option value="2" <?= $usuario[0]->nivel==2?'selected':'' ; ?> >Administrador</option>
 	 		
 	 	</select>
  	</div>
  	
  </div>
  <div class="row">
  	<div class="col-md-6">
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="<?= $usuario[0]->email; ?> "required>
  </div>
  </div>
 
  	<div class="col-md-4">
  <div class="form-group">
    <label for="senha">Senha</label>
    <input type="button" class="btn btn-default btn-block" value="Atualizar Senha" data-toggle="modal" data-target="#myModal">


  </div>
 </div>
 	 <div class="col-md-2">
 	 	<label for="status">status</label>
 	 	<select id="status" class="form-control" name="status" required> 
 	 		<option value="0">---</option>
 	 		<option value="1" <?= $usuario[0]->status==1?'selected':'' ; ?>>Ativo</option>
 	 		<option value="2" <?= $usuario[0]->status==2?'selected':'' ; ?>>Inativo</option>
 	 		
 	 	</select>
 	 </div>
  </div>
</div>
		<div style="text-align: right">
  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal"> Enviar</button>
  <button type="reset" class="btn btn-default">Cancelar</button>
</div>



</form>
</div>
</div>
</div>





<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-didden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
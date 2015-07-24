<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
	<div class="col-md-12">
		<h1 class="page-header">Novo Usuário</h1>
	</div>
	
	<div class="col-md-12">
		<form  action="<?= base_url() ?>usuario/cadastrar" method="post" required>
			<div class="form-group">
    			<label for="nome">Nome:</label>
    		<input type="text" class="form-control" id="nome" name="nome" placeholder="Informe seu nome" required>
 			 </div>
  
  <div class="row">
  	<div class="col-md-3">
  		<div class="form-group">
    		<label for="cpf">CPF:</label>
    		<input type="text" class="form-control" name="cpf" id="cpf" placeholder="Informe seu cpf" required> 
  </div>
  		
  	</div>
  	<div class="col-md-7">
  		<div class="form-group">
   			 <label for="endereco">Endereço:</label>
   			 <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Informe seu endereço" required>
  </div>
  	</div>
  	<div class="col-md-2">
  		<label for="nivel">Nível</label>
 	 	<select id="nivel" class="form-control" name="nivel" required>
 	 		<option value="0">---</option>
 	 		<option value="1">Usuario</option>
 	 		<option value="2">Administrador</option>
 	 		
 	 	</select>
  	</div>
  	
  </div>
  <div class="row">
  	<div class="col-md-6">
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
  </div>
  </div>
 
  	<div class="col-md-4">
  <div class="form-group">
    <label for="senha">Senha</label>
    <input type="password" class="form-control" id="senha" name="senha" placeholder="Informe a Senha" required>
  </div>
 </div>
 	 <div class="col-md-2">
 	 	<label for="status">status</label>
 	 	<select id="status" class="form-control" name="status" required> 
 	 		<option value="0">---</option>
 	 		<option value="1">Ativo</option>
 	 		<option value="2">Inativo</option>
 	 		
 	 	</select>
 	 </div>
  </div>
</div>
		<div style="text-align: right">
  <button type="submit" class="btn btn-success">Enviar</button>
  <button type="reset" class="btn btn-default">Cancelar</button>
</div>

</form>
</div>
</div>
</div>

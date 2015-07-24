<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<div class="col-md-10">
<h1 class="page-header">
Usuários</h1>
</div>
<div class="col-md-2">
<a class="btn btn-primary btn-block" href="<?= base_url('usuario/cadastro')?>"> Novo Usuário</a>
    </div>
<div class="col-md-12">
<table class="table table-striped">
            <tbody>
<tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Nivel</th>
                <th>Status</th>
                  <th></th>
                <th></th>
            </tr>
            <?php foreach($usuarios as $usu) {?>
<tr>
                <td><?= $usu-> idUsuario; ?></td>
                <td><?= $usu->nome; ?></td>
              
                <td><?= $usu->email; ?></td>
                <td><?= $usu->nivel==1? 'Usuario':'Administrador'; ?></td>
                <td><?= $usu->status==1?'Ativo':'Inativo'; ?></td>
                
                <td><a class="btn btn-primary btn-group" href="<?= base_url('usuario/atualizar/'.$usu->idUsuario) ?>">Atualizar</a></td>             
                <td><a class="btn btn-danger btn-group" href="<?= base_url('usuario/excluir/'.$usu->idUsuario)?>" onclick="return confirm('Deseja realmente excluir o usuário?');">Remover</a></td>
            </tr>
            <?php }?>
</tbody></table>
</div>
</div>
</ div>
</ div>
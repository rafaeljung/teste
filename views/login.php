

    <div class="container">

      <form class="form-signin" method="post" action="<?= base_url() ?>dashboard/logar">
        <h2 class="form-signin-heading">Faça seu login</h2>
        <label for="inputEmail" class="sr-only">Seu Email...</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Seu Email..." name="email" autofocus>
        <label for="inputPassword" class="sr-only">Sua Senha...</label>
        <input type="password"  id="inputPassword" class="form-control" placeholder="Seua Senha..." name="senha" >
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Lembrar-me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Logar</button>
      </form>

    </div> 

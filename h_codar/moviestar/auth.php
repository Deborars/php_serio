<?php require('templates/header.php') ?>

<div id="main-container" class="container-fluid">
  <div class="col-md-12">
    <div class="row" id="auth-row">
      <div class="col-md-4" id="login-container">
        <h2>Entrar</h2>
        <form action="" method="post">
          <input type="hidden" value="login" name="type">
          <div class="form-group mt-2">
            <label for="email">E-mail:</label>
            <input type="email" class="form-control" placeholder="Digite seu e-mail" name="email" id="email">
          </div>
          <div class="form-group mt-2">
            <label for="password">Senha:</label>
            <input type="password" class="form-control" placeholder="Digite sua senha" name="password" id="password">
          </div>
          <input type="submit" class="btn card-btn mt-3" value="Entrar">
        </form>
      </div>
      <div class="col-md-4" id="register-container">
        <h2>Criar Conta</h2>
        <form action="<?= $BASE_URL ?>auth_process.php" method="post">
          <input type="hidden" value="register" name="type">
          <div class="form-group mt-2">
            <label for="email">E-mail:</label>
            <input type="email" class="form-control" placeholder="Digite seu e-mail" name="email" id="email">
          </div>
          <div class="form-group mt-2">
            <label for="name">Nome:</label>
            <input type="text" class="form-control" placeholder="Digite seu nome" name="name" id="name">
          </div>
          <div class="form-group mt-2">
            <label for="lastName">Sobrenome:</label>
            <input type="text" class="form-control" placeholder="Digite seu sobrenome" lastName="lastName"
              id="lastName">
          </div>
          <div class="form-group mt-2">
            <label for="password">Senha:</label>
            <input type="password" class="form-control" placeholder="Digite sua senha" name="password" id="password">
          </div>
          <div class="form-group mt-2">
            <label for="confirmPassword">Confirmação de senha:</label>
            <input type="confirmPassword" class="form-control" placeholder="Confirme sua senha" name="confirmPassword"
              id="confirmPassword">
          </div>
          <div class="form-group mt-3">
            <input type="submit" class=" btn card-btn" value="Registrar">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?php require('templates/footer.php') ?>
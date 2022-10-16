<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=CONF_SITE_NAME?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=url("assets/web/");?>css/register.css">
</head>

<div class="form">
    <h1>Cadastro de Usuários</h1><br>
<form action="<?=url("cadastro-usuario")?>" method="POST">
  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="email" id="form2Example1" class="form-control" name="register-email"/>
    <label class="form-label" for="form2Example1">Email</label>
  </div>

  <!-- Nome input -->
  <div class="form-outline mb-4">
    <input type="text" id="form2Example2" class="form-control" name="register-name"/>
    <label class="form-label" for="form2Example2">Nome</label>
  </div>

  <!-- Telefone input -->
    <div class="form-outline mb-4">
    <input type="text" id="form2Example1" class="form-control" name="register-phoneNumber"/>
    <label class="form-label">Telefone</label>
  </div>

  <!-- Senha input -->
  <div class="form-outline mb-4">
    <input type="password" id="form2Example2" class="form-control" name="register-password"/>
    <label class="form-label">Password</label>
  </div>

  <!-- Data de nascimento input -->
    <div class="form-outline mb-4">
    <input type="date" id="form2Example1" class="form-control" name="register-dtBorn"/>
    <label class="form-label">Data de nascimento</label>
  </div>

  <!-- Documento input -->
    <div class="form-outline mb-4">
    <input type="text" id="form2Example1" class="form-control" name="register-document"/>
    <label class="form-label">Documento</label>
  </div>

  <button type="submit" class="btn btn-primary btn-block mb-4">Cadastrar</button>
</form>
</div>
</html>
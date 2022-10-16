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
    <h1>Cadastro de Consultas</h1><br>
<form action="<?=url("cadastro-consulta")?>" method="POST">
  <!-- ID Dentista input -->
  <div class="form-outline mb-4">
    <input type="number" id="form2Example1" class="form-control" name="register-idDentist"/>
    <label class="form-label" for="form2Example1">ID Dentista</label>
  </div>

  <!-- ID Paciente input -->
  <div class="form-outline mb-4">
    <input type="number" id="form2Example2" class="form-control" name="register-idPatient"/>
    <label class="form-label" for="form2Example2">ID Paciente</label>
  </div>

  <!-- Data input -->
    <div class="form-outline mb-4">
    <input type="date" id="form2Example1" class="form-control" name="register-date"/>
    <label class="form-label">Data</label>
  </div>

  <!-- Hora input -->
  <div class="form-outline mb-4">
    <input type="time" id="form2Example2" class="form-control" name="register-hour"/>
    <label class="form-label">Horário</label>
  </div>

  <!-- Observações input -->
    <div class="form-outline mb-4">
    <textarea id="form2Example1" class="form-control" name="register-comments"></textarea>
    <label class="form-label">Observações</label>
  </div>

  <button type="submit" class="btn btn-primary btn-block mb-4">Cadastrar</button>
</form>
</div>
</html>
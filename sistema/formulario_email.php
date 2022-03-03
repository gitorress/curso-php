<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8">
  <title>Formulário</title>
  <link rel="stylesheet" href="/style.css">
</head>

<body>
  <div class="forms">
    <img src="/Sem Título-1.png" alt="" class="img">
    <form action="enviar_email.php" class="box">
      <h1 class="title">Formulário</h1>
      <label for="nome">Nome</label>
      <input type="text" id="nome" name="nome">

      <label for="senha">Senha</label>
      <input type="password" id="senha" name="senha">


      <label for="email">Email</label>
      <input type="email" id="email" name="email" required>

      <label for="cpf">CPF</label>
      <input type="text" id="cpf" name="cpf" placeholder="000.000.000-00" required>


      <button>enviar</button>

  </div>

  </form>
</body>

</html>
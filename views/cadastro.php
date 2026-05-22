<!DOCTYPE html>
<html>
<head>
<meta charset='UTF-8'>
<title>Cadastro</title>
<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' rel='stylesheet'>
</head>
<body class='bg-secondary'>
<div class='container mt-5'>
<div class='card p-4 mx-auto' style='max-width:500px'>
<h2>Cadastro</h2>
<input id='nome' class='form-control mb-2' placeholder='Nome'>
<input id='email' class='form-control mb-2' placeholder='Email'>
<input id='telefone' class='form-control mb-2' placeholder='Telefone'>
<input id='cpf' class='form-control mb-2' placeholder='CPF'>
<input id='senha' type='password' class='form-control mb-3' placeholder='Senha'>
<button onclick='cadastrar()' class='btn btn-success'>Cadastrar</button>
</div>
</div>
<script src='../assets/app.js'></script>
</body>
</html>
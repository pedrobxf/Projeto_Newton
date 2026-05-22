<!DOCTYPE html>
<html>
<head>
<meta charset='UTF-8'>
<title>Login</title>
<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' rel='stylesheet'>
</head>
<body class='bg-dark'>
<div class='container mt-5'>
<div class='card p-4 mx-auto' style='max-width:400px'>
<h2>Login</h2>
<input id='email' class='form-control mb-2' placeholder='Email'>
<input id='senha' type='password' class='form-control mb-3' placeholder='Senha'>
<button onclick='login()' class='btn btn-primary w-100'>Entrar</button>
<a href='cadastro.php'>Criar conta</a>
</div>
</div>
<script src='../assets/app.js'></script>
</body>
</html>
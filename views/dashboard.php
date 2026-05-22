<?php session_start(); if(!isset($_SESSION['usuario'])) header('Location: login.php'); ?>
<!DOCTYPE html>
<html>
<head>
<meta charset='UTF-8'>
<title>Dashboard</title>
<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' rel='stylesheet'>
</head>
<body>
<div class='container mt-4'>
<div class='d-flex justify-content-between'>
<h2>Sistema de Chamados</h2>
<a href='../controllers/logout.php' class='btn btn-danger'>Logout</a>
</div>

<div class='card p-3 mt-4'>
<h4>Abrir Chamado</h4>
<input id='titulo' class='form-control mb-2' placeholder='Título'>
<textarea id='descricao' class='form-control mb-2'></textarea>

<select id='departamento' class='form-control mb-2'>
<option>TI</option>
<option>RH</option>
<option>Financeiro</option>
</select>

<input id='responsavel' class='form-control mb-2' placeholder='Responsável'>

<select id='regiao' class='form-control mb-2'>
<option>Sudeste</option>
<option>Sul</option>
<option>Norte</option>
</select>

<button onclick='abrirChamado()' class='btn btn-primary'>Cadastrar</button>
</div>

<div class='mt-4'>
<h4>Meus Chamados</h4>
<div id='listaChamados'></div>
</div>
</div>

<script src='../assets/app.js'></script>
<script>listarChamados()</script>
</body>
</html>
<?php
session_start();
require_once '../config/database.php';
$db = (new Database())->conectar();

$data = json_decode(file_get_contents('php://input'), true);

if($_GET['acao']=='cadastro'){
$stmt = $db->prepare('INSERT INTO usuarios(nome,email,telefone,cpf,senha) VALUES(:nome,:email,:telefone,:cpf,:senha)');
$stmt->execute([
':nome'=>$data['nome'],
':email'=>$data['email'],
':telefone'=>$data['telefone'],
':cpf'=>$data['cpf'],
':senha'=>password_hash($data['senha'], PASSWORD_DEFAULT)
]);
echo json_encode(['status'=>'ok']);
}

if($_GET['acao']=='login'){
$stmt = $db->prepare('SELECT * FROM usuarios WHERE email=:email');
$stmt->execute([':email'=>$data['email']]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if($user && password_verify($data['senha'],$user['senha'])){
$_SESSION['usuario']=$user;
echo json_encode(['status'=>'ok']);
}else{
echo json_encode(['status'=>'erro']);
}
}
?>
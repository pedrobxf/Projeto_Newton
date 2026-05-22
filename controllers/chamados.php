<?php
session_start();
require_once '../config/database.php';
$db = (new Database())->conectar();

$user = $_SESSION['usuario'];

if($_SERVER['REQUEST_METHOD']=='POST'){
$data = json_decode(file_get_contents('php://input'), true);

$stmt = $db->prepare('INSERT INTO chamados(titulo,descricao,departamento,responsavel,regiao,usuario_id) VALUES(:titulo,:descricao,:departamento,:responsavel,:regiao,:usuario_id)');
$stmt->execute([
':titulo'=>$data['titulo'],
':descricao'=>$data['descricao'],
':departamento'=>$data['departamento'],
':responsavel'=>$data['responsavel'],
':regiao'=>$data['regiao'],
':usuario_id'=>$user['id']
]);

echo json_encode(['status'=>'ok']);
}

if($_SERVER['REQUEST_METHOD']=='GET'){
$stmt = $db->prepare('SELECT * FROM chamados WHERE usuario_id=:id ORDER BY id DESC');
$stmt->execute([':id'=>$user['id']]);
echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
}
?>
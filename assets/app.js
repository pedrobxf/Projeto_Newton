async function login(){
const email=document.getElementById('email').value;
const senha=document.getElementById('senha').value;

const req=await fetch('../controllers/auth.php?acao=login',{
method:'POST',
body:JSON.stringify({email,senha})
});

const res=await req.json();

if(res.status==='ok'){
window.location='dashboard.php';
}else{
alert('Login inválido');
}
}

async function cadastrar(){
const dados={
nome:nome.value,
email:email.value,
telefone:telefone.value,
cpf:cpf.value,
senha:senha.value
};

const req=await fetch('../controllers/auth.php?acao=cadastro',{
method:'POST',
body:JSON.stringify(dados)
});

const res=await req.json();

if(res.status==='ok'){
alert('Cadastro realizado');
window.location='login.php';
}
}

async function abrirChamado(){
const dados={
titulo:titulo.value,
descricao:descricao.value,
departamento:departamento.value,
responsavel:responsavel.value,
regiao:regiao.value
};

await fetch('../controllers/chamados.php',{
method:'POST',
body:JSON.stringify(dados)
});

alert('Chamado criado');
listarChamados();
}

async function listarChamados(){
const req=await fetch('../controllers/chamados.php');
const dados=await req.json();

let html='';

dados.forEach(c=>{
html += `<div class="card p-3 mb-2">
<h5>${c.titulo}</h5>
<p>${c.descricao}</p>
<span>Status: ${c.status}</span>
</div>`;
});

document.getElementById('listaChamados').innerHTML=html;
}
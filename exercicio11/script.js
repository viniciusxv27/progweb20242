var windowBox = document.getElementById("windowButton");
var btnCriarAluno = document.getElementById("btnCriarAluno");
var btnCriarProfessor = document.getElementById("btnCriarProfessor");
var box = document.getElementById("box");

var listaAlunos = [];
var listaProfessores = [];

function areaAluno() {
    var boxProfessores = document.getElementsByClassName("professoresCadastrados");
    for (var i = 0; i < boxProfessores.length; i++) {
        boxProfessores[i].style.display = "none";
    }

    var boxAlunos = document.getElementsByClassName("alunosCadastrados");
    for (var i = 0; i < boxAlunos.length; i++) {
        boxAlunos[i].style.display = "block";
    }

    windowBox.style.backgroundColor = "rgba(255, 171, 75, 0.479)";
    windowBox.style.border = "3px solid green";
    btnCriarAluno.style.display = "block";
    btnCriarProfessor.style.display = "none";
}

function areaProfessor() {
    var boxProfessores = document.getElementsByClassName("professoresCadastrados");
    for (var i = 0; i < boxProfessores.length; i++) {
        boxProfessores[i].style.display = "block";
    }

    var boxAlunos = document.getElementsByClassName("alunosCadastrados");
    for (var i = 0; i < boxAlunos.length; i++) {
        boxAlunos[i].style.display = "none";
    }

    windowBox.style.backgroundColor = "rgba(255, 87, 75, 0.671)";
    windowBox.style.border = "3px solid red";
    btnCriarAluno.style.display = "none";
    btnCriarProfessor.style.display = "block";
}

function criarAluno() {
    var nome = window.prompt("Digite o nome do aluno: ");
    if (nome == null || nome == "") {
        alert("Nome inválido!");
        return;
    } else {
        box.innerHTML += `<div class='alunosCadastrados'><p>ALUNO: ${nome}</p></div>`;
        listaAlunos.push(nome);
        localStorage.setItem('alunos', listaAlunos);
    }
}

function criarProfessor() {
    var nome = window.prompt("Digite o nome do professor: ");
    if (nome == null || nome == "") {
        alert("Nome inválido!");
        return;
    } else {
        box.innerHTML += `<div class='professoresCadastrados'><p>PROFESSOR: ${nome}</p></div>`;
        listaProfessores.push(nome);
        localStorage.setItem('professores', listaProfessores);
    }
}

function carregarUsuarios() {
    try {
        var alunos = localStorage.getItem('alunos').split(',');

        for (var i = 0; i < alunos.length; i++) {
            box.innerHTML += `<div class='alunosCadastrados'><p>ALUNO: ${alunos[i]}</p></div>`;
        }

        for (var i = 0; i < professores.length; i++) {
            box.innerHTML += `<div class='professoresCadastrados'><p>PROFESSOR: ${professores[i]}</p></div>`;
        }
        var professores = localStorage.getItem('professores').split(',');
    } catch (error) {
        console.log('Sem usuarios antigos');
    }
}

window.addEventListener('DOMContentLoaded', function () {
    carregarUsuarios();
    areaAluno();
});
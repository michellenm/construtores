<?php
declare(strict_types = 1);
require 'lib/Carbon.php';
require 'Turma.php';
require 'Aluno.php';
use Carbon\Carbon;
$turma = new Turma();
$turma->periodo = "Manhã";
$turma->serie = 5;
$turma->sigla = "B";
$turma->tipoDeEnsino = "Fundamental";
$aluno = new Aluno("","");

<?php
require_once "bibliotecadefuncoes.php";

//FUNÇÕES CONVERSORES
use function conversao\converterD;
use function conversao\converterE;
use function conversao\converterP;
use function conversao\converterL;
use function conversao\converterI;

//FUNÇÕES AREAS

use function geometria\areaQuadrado;
use function geometria\areaRetangulo;
use function geometria\areaTriangulo;
use function geometria\areaCirculo;
use function geometria\areaTrapezio;

//FUNÇÕES SAUDE

use function saude\calcularimc;
use function saude\valorIdealAgua;
use function saude\frequenciaCardiacaMaxima;
use function saude\converterLibrasParaQuilo;
use function saude\calcularCaloriasBasais;

//ECHOS CONVERSORES

echo converterD (1,1);
echo converterE (1,1);
echo converterP (1,1);
echo converterL (1,1);
echo converterI (1,1);

//ECHOS AREAS

echo areaQuadrado (1);
echo areaRetangulo (1,1);
echo areaTriangulo (1,1);
echo areaCirculo (1);
echo areaTrapezio (1,1,1);

//ECHOS AUDE

echo calcularimc (1,1);
echo valorIdealAgua (1);
echo frequenciaCardiacaMaxima (1);
echo converterLibrasParaQuilo (1);
echo calcularCaloriasBasais (1,1,1);
?>
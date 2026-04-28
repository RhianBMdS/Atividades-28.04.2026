<?php
require_once "bibliotecadefuncoes.php";
use function conversao\converterD;
use function conversao\converterE;
use function conversao\converterP;
use function conversao\converterL;
use function conversao\converterI;
use function geometria\areaQuadrado;
use function geometria\areaRetangulo;
use function geometria\areaTriangulo;
use function geometria\areaCirculo;
use function geometria\areaTrapezio;
echo converterD (1,1);
echo converterE (1,1);
echo converterP (1,1);
echo converterL (1,1);
echo converterI (1,1);
echo areaQuadrado (1);
echo areaRetangulo (1,1);
echo areaTriangulo (1,1);
echo areaCirculo (1);
echo areaTrapezio (1,1,1);
?>
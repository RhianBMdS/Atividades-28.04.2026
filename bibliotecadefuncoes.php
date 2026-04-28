<?php
//ATIVIDADE - 1
namespace dolarParaReal;
function converterD($valorD, $cotacaoR){
    return $valorD * $cotacaoR;}
    echo "O resultado da conversão de dólar para real é: ", converterD(2, 5);

namespace euroParaReal;
function converterE($valorE, $cotacaoR){
    return $valorE * $cotacaoR;}
    echo "\nO resultado da conversão de euro para real é: ", converterE(2, 5.85);

    namespace pesoParaReal;
function converterP($valorP, $cotacaoR){
    return $valorP * $cotacaoR;}
    echo "\nO resultado da conversão de peso para real é: ", converterP(2, 0.0035);

    namespace libraParaReal;
function converterL($valorL, $cotacaoR){
    return $valorL * $cotacaoR;}
    echo "\nO resultado da conversão de libra para real é: ", converterL(2, 6.74);

    namespace ieneParaReal;
function converterI($valorI, $cotacaoR){
    return $valorI * $cotacaoR;}
    echo "\nO resultado da conversão de iene para real é: ", converterI(2, 0.031);
?>
<?php 
$_SERVER('REQUEST_METHOD');

abstract class Robo{
    public $nome;
    public $modelo;
    public $energia;
    public $potencia;
    private $defesa;
}
 function __construct(){
    $this-> $nome = nome;
    $this-> $modelo = modelo;
    $this-> $energia = energia;
    $this-> $potencia = potencia;
    $this-> $defesa = defesa;
 }

 class Engenheiro {
    $this->energia   120;
    $this->potencia 15;
    $this->defesa 50;
 }

 class Explorador{
    $this->energia 100;
    $this->potencia 20;
    $this->defesa 50; 
 }

 class Defensor{
    $this->energia 150;
    $this->potencia 30;
    $this->defesa 80;
 }

function recarregar(){
    return $modelo && $energia && $potencia
}

 function exibirStatus(){
     $this-> $energia +- 10;
    $this-> $energia max(200);
 }

 function session_start(){
    $_SESSION 
 }
 
 
 

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="prova.css">
    <title>Robos</title>
</head>
<body>
    <function class="card1"
         method="$_POST">
        <title>ROBO EXPLORADOR</title>
        <h1>Função: Investigar e explorar planestas e descobrir novas verdades</h1>

        <span>ENERGIA: 100</span>
        <span>POTÊNCIA: 20</span>
        <span>DEFESA: 50</span>
        <span>BOTÕES DE RECARGA</span>
        <label for="ROBO_EXPLORADOR"></label>
        <form type="text" id="ROBO_EXPLORADOR" name="ROBO_EXPLORADOR" required></form>
        <button>INSPECIONAR</button>
    
    <function class="card2" method="$_POST">
        <title>ROBO ENGENHEIRO</title>
        <h1>Função: Reparar equipamentos durante a exploração</h1>

        <span>ENERGIA: 120</span>>
        <span>POTÊNCIA: 15</span>
        <span>DEFESA: 50</span>
        <span>BOTÕES DE RECARGA:</span>
        <label for="ROBO_ENGENHEIRO"></label>
        <form type="text" id="ROBO_ENGENHEIRO" name="ROBO_ENGENHEIRO" required></form>
        <button>INSPECIONAR</button>

    <function class="card3" method="$_POST">
        <title>ROBO DEFENSOR</title>
        <h1>Função: Proteger a estação de inimigos ou entidades desconhecidas</h1>

        <span>ENERGIA: 150</span>>
        <span>POTÊNCIA: 30</span>
        <span>DEFESA: 80</span>
        <span>BOTÕES DE RECARGA:</span>
        <label for="ROBO_DEFENSOR"></label>
        <form type="text" id="ROBO_DEFENSOR" name="ROBO_DEFENSOR" required></form>
        <button>INSPECIONAR</button>
    </function>
</body>
         <form method="$_GET"></form>
     <form  id="ROBO_DEFENSOR" name="ROBO_DEFENSOR" required></form>
      <form id="ROBO_ENGENHEIRO" name="ROBO_ENGENHEIRO" required></form>
      <form id="ROBO_EXPLORADOR" name="ROBO_EXPLORADOR" required></form>
    <body>
       
    </body>
</html>
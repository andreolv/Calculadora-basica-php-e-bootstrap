<!DOCTYPE html>

<?php
    include_once './functions/Calculadora.php';
    
    $resp = null;
    
    if(isset($_POST['calc'])){
        if(!empty($_POST['n1']) and !empty($_POST['n2']) and !empty($_POST['op'])){
            
            $n1 = $_POST['n1'];
            $n2 = $_POST['n2'];
            $op = $_POST['op'];
            
            switch ($op){
                case 1:
                    $resp = somar($n1,$n2);
                    break;
                case 2:
                    $resp = subtrair($n1,$n2);
                    break;
                case 3:
                    $resp = multiplicar($n1,$n2);
                    break;
                case 4:
                    $resp = dividir($n1,$n2);
                    break;
                case 5:
                    $resp = potencia($n1,$n2);
                    break;
                case 6:
                    $resp = modulo($n1,$n2);
                    break;
                default:
                    echo("Digite uma opção válida");
            }
        }
            
            
            
            
            
    }
    
?>


<html lang="pt-br">
  <head>
<meta charset="UTF-8">
        <meta lang="pt-br">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        <meta name="description" content="Página de Teste">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet" type="text/css">
        <!-- Jquery (necessário para os plugins JavaScript do Bootstrap -->
        <script type="text/javascript"src="js/jquery-3.3.1.min.js"></script>
        <!-- Inclue todos os plugins compilados (abaixo), ou inclua os 
        arquivos individuais conforme o necessário -->
        <script type="text/javascript"src="js/bootstrap.min.js" ></script>
  </head>
  <body>
    <form name="formCalc" action="index.php" method="POST">
        <fieldset>
            <legend>Calculadora</legend>
            
            <!--Input do primeiro número-->
            <p>
                <label for="idNum1">1º Número: </label>
                <input class="form-control" id="idNum1" name="n1" type="number" required value="<?php if(isset($n1)){echo $n1;}?>">
            </p>
            
            <!--Input do segundo número-->
            <p>
                <label for="idNum2">2º Número: </label>
                <input class="form-control" id="idNum2" name="n2" type="number" required value="<?php if(isset($n2)){echo $n2;} ?>">
            </p>
            
            <!-- Operação -->
            <div class="form-group">
                <label for="exampleFormControlSelect1">Operação</label>
                <select class="form-control" id="idOp" name="op">
                    <option value="#"></option>
                    <option value="1">Soma</option>
                    <option value="2">Subtração</option>
                    <option value="3">Multiplicação</option>
                    <option value="4">Divisão</option>
                    <option value="5">Potência</option>
                    <option value="6">Módulo</option>
                </select>
            </div>
            
            <!-- Botão de Calcular -->
            <p>
                <label for="idCalc">&nbsp</label>
                <button type="submit" id="idCalc" name="calc" value="Calcular" class="btn btn-primary mb-2">Calcular</button>
            </p>
            
            <br/>
            <!-- Resposta somente leitura -->
            <p>
                <label>Resposta</label>
                <input class="form-control" type="text" readonly id="idResp" name="resp" value="<?php if(isset($resp)) {echo $resp;} ?>">
            </p>
            
            <!-- Botão limpar -->
            <p>
                <input type="submit" value="Limpar" class="form-control">
            </p>
            
        </fieldset>     
    </form>

  </body>
</html>
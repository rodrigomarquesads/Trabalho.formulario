<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função</title>
</head>
<body>

    <h2>A)</h2>
    <?php
        function tabuada($number){
            for ($i = 0; $i<=10; $i++){
                $resultado = 2*$i;
                echo "<p>$number × $i = $resultado<p>";
            }
        }

        tabuada(2);
        
    ?>
    <br><br>
    <!--  -->

    <h2>B)</h2>
    <?php
    function inverter(){
        $x =["a", "m", "z"];
        for($cont = 2; $cont >=0; $cont--){
            echo $x[$cont];
        }  
    }
    inverter();
    ?>
    <br><br>
    <!--  -->
    
    <h2>C)</h2>
    <?php
        function maior(){
            $int = [1, 2, 6, 4, 5];
            $maior = 0;
            for($number = 0; $number <=4; $number++){
                if($maior < $int[$number]){
                    $maior = $int[$number];
                }
            }
            echo "O maior número é: $maior";
        }
        maior();
    ?>
    <br><br>

    <h2>D)</h2>
    <?php
        $cpf = "11156789";
        echo "String numerica preenchida: $cpf <br><br>";
        
        function preencherCpf($numeros){

            if(mb_strlen($numeros) > 11){
                echo "Informe numeros de ate 11 digitos.";
                
            }else{
                //determinar quantos digitos precisaremos acrescentar
                $digitosAMais = 11 -  mb_strlen($numeros);

                //transformar string em array, pois nao conseguimos contar em string
                $newCpf = str_split($numeros);

                //Acrescentar digitos novos
                for($i = 0; $i < $digitosAMais; $i++){
                    array_unshift($newCpf, "0");
                }

                //transformar array em string
                $newCpf = implode($newCpf);

                //Separar as partes do CPF para acrescentarmos caracteres
                $cpfParte1 = mb_substr($newCpf, 0,3);
                $cpfParte2 = mb_substr($newCpf,3,3);
                $cpfParte3 = mb_substr($newCpf,6,3);
                $cpfParte4 = mb_substr($newCpf,9,2);

                //Acrescentar os caracteres do CPF
                $newCpf = $cpfParte1.".".$cpfParte2.".".$cpfParte3."-".$cpfParte4;

                echo"CPF criado: $newCpf <br>";
            }
        }


        preencherCpf($cpf);
        
    ?>

    <h2>E)</h2>
    <?php
       function Celsius(){
            $F = [90, 77, 52, 12];
            $c = [];
            for ($a = 0; $a <= 3; $a++){
            $c[$a] = ($F[$a] - 32)/18;

            echo "<p>($F[$a] - 32)/18 =  $c[$a]</p>";
            }
       }

       Celsius();
    ?>

    <h2>F)</h2>
    <?php
        function buscaTexto($texto, $busca){
            foreach($texto as $t){
                if($t != $busca){
                    echo "$t &nbsp";
                } else {
                    echo "<span style=\"color:red;\">$t &nbsp</span>";
                }

            }

        }

        buscaTexto(array("olá", "mundo"), "olá");
    ?>

    <h2>G)</h2>

    <?php
        function int(){
            $vet = [1, 2, 3, 4, 5];
            $soma = 0;
            for($b = 0; $b <= 4; $b++){
                $soma = $soma + $vet[$b]; 
                
            }
            echo "<p>$soma</p>";
            
        }
        int();
    ?>
    
</body>
</html>
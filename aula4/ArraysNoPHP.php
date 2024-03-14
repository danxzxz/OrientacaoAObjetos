    <?php 
$vetor = array();
$num = 0;
    /*function primo($num){
        for ($i = 2; $i <= sqrt($num); $i++){
            if ($num % $i == 0) {
                return false;
            }
        }
        return $num >= 2;
    }

    do {
        echo "Digite um número: ";
        $input = readline();
        if ($input < '1') {
            break;
        }
        $num = ($input);
        echo primo($num) ? "$num é primo.\n" : "$num não é primo.\n";
     } while (true);*/




    
     // Função para verificar se um número é primo
     function isPrimo($numero) {
         if ($numero < 1) {
             return false;
         }
         for ($i = 2; $i <= sqrt($numero); $i++) {
             if ($numero % $i == 0) {
                 return false;
             }
         }
         return true;
     }
     
     // Loop para solicitar números até que seja fornecido um número menor que 2
     while (true) {
         echo "\nDigite um número (ou 0 para sair): ";
         $input = readline();
     
         // Verifica se o input é um número válido
       
     
         $numero = intval($input);
     
         // Verifica se o número é primo usando a função isPrimo
         if ($numero < 1) {
            foreach ($vetor as $a) {
                echo $a . ", ";
            }
            echo "\n";
             break;
         } elseif (isPrimo($numero)) {
             array_push($vetor, $numero);
         } 
     }
     
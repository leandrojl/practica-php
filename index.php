<html>
<head><title>Mi primer documento PHP</title></head>
<body>

</body>
</html>


<?php
include_once("funciones.php");
//define(valor_inicial, 1); //forma de declarar una constante

//fizz buzz, si es multiplo de 3 mandar fizz, si es multiplo de 5 mandar buzz, si es multiplo de los dos mandar fizz buzz
//ingreso un valor
//busco si es multiplo de 3
//busco si es multiplo de 5

//$l=1;
//echo 'is iset?'. isset($l);

//fizzBuzz(15);

//$fizzBuzz = new fizzBuzz();

//$fizzBuzz->ejecutarFizzBuzz(15);

class fizzBuzz{

    private $valorInicial = 1;

    public function __construct()
    {
    }

    public function __destruct(){

    }
    public function ejecutarFizzBuzz($valorIngresado){
        echo 'Estoy ejecutando fizzBuzz!!!'. "<br>";
        $fizzBuzzGame = new fizzBuzzRules();
        for($i=$this->valorInicial;$i<=$valorIngresado;$i++){
            if($fizzBuzzGame->applyFizzBuzzRule($i)){
                $fizzBuzzGame->getFizzBuzzRule();
            } elseif($fizzBuzzGame->applyFizzRule($i)){

                $fizzBuzzGame->getFizzRule() ;

            }elseif($fizzBuzzGame->applyBuzzRule($i)){
                $fizzBuzzGame->getBuzzRule() ;
            }else{
                $fizzBuzzGame->getNumber($i) ;
            }
        }

    }

}

//separar las tareas por objetos
class fizzBuzzRules{


    public function applyFizzBuzzRule($numero){
        return $numero % 3 == 0 && $numero % 5 == 0;
    }
    public function getFizzBuzzRule(){
        echo "Fizz Buzz";
    }
    public function applyFizzRule($numero){
        return $numero % 3 == 0;
    }
    public function getFizzRule(){
        echo 'Fizz';
    }

    public function applyBuzzRule($numero){
        return $numero % 5 == 0;
    }
    public function getBuzzRule(){
        echo 'Buzz';
    }

    public function getNumber($numero){
        echo $numero;
    }
}

echo "sapeee";
class fizzBuzzUtilizandoObjetos{


    private $rules;

    public function ejecutarFizzBuzzUtilizandoObjetos(){
        $rules=[new fizzBuzzRule(),
                new fizzRule(),
                new buzzRule(),
                new numberRule()];

        foreach($rules as $rule){

        }


    }


}

class fizzBuzzRule{
    public function applyFizzBuzzRule($numero){
        return $numero % 3 == 0 && $numero % 5 == 0;
    }
    public function getFizzBuzzRule(){
        echo "Fizz Buzz";
    }
}

class fizzRule{
    public function applyFizzRule($numero){
        return $numero % 3 == 0;
    }
    public function getFizzRule(){
        echo 'Fizz';
    }
}

class buzzRule{

    public function applyBuzzRule($numero){
        return $numero % 5 == 0;
    }
    public function getBuzzRule(){
        echo 'Buzz';
    }

}

class numberRule{

    public function applyNumberRule($numero){
        return $numero;
    }
    public function getNumberRule($numero){
        echo $numero;
    }

}


?>
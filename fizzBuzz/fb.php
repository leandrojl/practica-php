<?php

$fizzBuzz = new FizzBuzz();

$fizzBuzz->execute(15);


class FizzBuzz
{
    private $rules = [];

    public function __construct(){
        $this->rules = [
            new fizzBuzzRule(),
            new fizzRule(),
            new buzzRule(),
            new numberRule()
        ];
    }

    public function execute($numeroIngresado)
    {


        for ($i = 1; $i <= $numeroIngresado; $i++) {
            foreach ($this->rules as $rule) {
                if ($rule->applyRule($i)) {
                    $rule->getRule($i);
                    break;
                }

            }
            echo "<br>";
        }

    }


}


class FizzBuzzRule
{
    public function applyRule($numero)
    {
        return $numero % 3 == 0 && $numero % 5 == 0;
    }

    public function getRule()
    {
        echo "Fizz Buzz Rule";
    }
}

class FizzRule
{
    public function applyRule($numero)
    {
        return $numero % 3 == 0;
    }

    public function getRule()
    {
        echo 'Fizz Rule';
    }
}

class BuzzRule
{

    public function applyRule($numero)
    {
        return $numero % 5 == 0;
    }

    public function getRule()
    {
        echo 'Buzz Rule';
    }

}

class NumberRule
{

    public function applyRule($numero)
    {
        return $numero;
    }

    public function getRule($i)
    {
        echo $i;
    }
}



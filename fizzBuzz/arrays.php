<?php



$vector[] =[1,2,3,"sape"];

var_dump($vector);
//en vez de buscar en valor del array por el numero de indice se le puede asignar un string
$tabla["docente"] = ["nombre" => "Pablo", "sexo" => 'm', "edad" => 25, "recibe_correo" => true ];
$tabla["mascota"] = ["nombre" => "Facu", "sexo" => '-', "edad" => 34, "recibe_correo" => false ];
$tabla["directora"] = ["nombre" => "Yani", "sexo" => 'f', "edad" => 30, "recibe_correo" => true ];

foreach ($tabla as $fila) {
    echo $fila["nombre"] . ": " .
        $fila["sexo"] . " - " .
        $fila["edad"] . "<br>";
}

echo "La directora es " . $tabla["directora"]["nombre"];
?>
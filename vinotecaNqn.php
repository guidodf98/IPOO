<?php
main();


/**
 * Dado una estructura de arreglos asociativos, donde cada posición del arreglo se corresponde con una variedad de vino (malbec, cabernet Sauvignon, Merlot) y se almacena la siguiente información: variedad, cantidad de botellas, año de producción, precio por unidad:
 * Implementar una función que reciba un arreglo con las características  mencionadas y retorne  un arreglo que por variedad de vino guarde la  cantidad total de botellas y el precio promedio.
 * Implementar una función main() que cree un arreglo con las características mencionadas, invoque a la función implementada en 1 y visualice su resultado
 *  Subir a su cuenta GitHub la resolución del Trabajo Practico de Repaso.
 */
function main()
{
    $vinos = datosVinos();
    $vinosExtra = datosExtra($vinos);
    print_r($vinosExtra);
}

function datosVinos()
{
    $vinos = array(
        "Malbec" => array(
            "variedad" => ["Secos", "Abocados", "Semi-Secos", "Semi-Dulces", "Dulces"],
            "cantidadBotellas" => [38, 15, 32, 20, 12],
            "anoProducion" => [2005, 2002, 1992, 2008, 2019],
            "precioUnidad" => [147, 175, 165, 170, 142]
        ),
        "Cabernet Sauvignon" => array(
            "variedad" => ["Secos", "Abocados", "Semi-Secos", "Semi-Dulces", "Dulces"],
            "cantidadBotellas" => [10, 39, 46, 27, 36],
            "anoProducion" => [1998, 2005, 2006, 2010, 1994],
            "precioUnidad" => [112, 116, 87, 150, 83]
        ),
        "Merlot" => array(
            "variedad" => ["Secos", "Abocados", "Semi-Secos", "Semi-Dulces", "Dulces"],
            "cantidadBotellas" => [18, 15, 31, 50, 14],
            "anoProducion" => [1993, 1996, 2014, 2005, 2020],
            "precioUnidad" => [101, 156, 140, 173, 143]
        ),
    );
    return $vinos;
}

function datosExtra($vinos)
{
    $vinosExtra = array(
        "Malbec" => array("botellasTotal" => 0, "precioPromedio" => 0),
        "Cabernet Sauvignon" => array("botellasTotal" => 0, "precioPromedio" => 0),
        "Merlot" => array("botellasTotal" => 0, "precioPromedio" => 0)
    );

    foreach ($vinos as $uva)
    {
        $cont = 0;
        for ($i = 0; $i < count($uva["variedad"]); $i++)
        {
            $cont += $uva["cantidadBotellas"][$i];
        }
        $vinosExtra[$uva]["botellasTotal"] = $cont;
    }

    foreach ($vinos as $uva)
    {
        $cont = 0;
        for ($i = 0; $i < count($uva["variedad"]); $i++)
        {
            $cont += $uva["precioUnidad"][$i];
        }
        $vinosExtra[$uva]["precioPromedio"] = $cont / count($uva["variedad"]);
    }
    return $vinosExtra;
}

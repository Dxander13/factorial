<?php
// Función recursiva para calcular el coeficiente binomial C(n, k)
function binomialCoefficient($n, $k) {
    if ($k == 0 || $k == $n) {
        return 1;
    }
    return binomialCoefficient($n - 1, $k - 1) + binomialCoefficient($n - 1, $k);
}

// Función para expandir el binomio (a + b)^n
function expandBinomial($n) {
    $result = "";
    for ($k = 0; $k <= $n; $k++) {
        $coefficient = binomialCoefficient($n, $k);
        $aExponent = $n - $k;
        $bExponent = $k;

        // Construir el término del binomio
        $term = ($coefficient == 1 ? "" : $coefficient);
        if ($aExponent > 0) {
            $term .= "a";
            if ($aExponent > 1) {
                $term .= "^" . $aExponent;
            }
        }
        if ($bExponent > 0) {
            if ($aExponent > 0) {
                $term .= "b";
            } else {
                $term .= "b";
            }
            if ($bExponent > 1) {
                $term .= "^" . $bExponent;
            }
        }

        // Añadir el término al resultado
        $result .= ($k == 0 ? "" : " + ") . $term;
    }
    return $result;
}

// Solicitar la potencia al usuario
echo "Introduce la potencia a la que deseas elevar el binomio (a + b)^n: ";
$n = intval(trim(fgets(STDIN)));

// Generar la expansión del binomio
$expansion = expandBinomial($n);

// Mostrar el resultado
echo "(a + b)^$n = " . $expansion . PHP_EOL;
?>
<?php 
    $array = [3, 5, 67, 98, 3];

    $retorno = verificaArray($array, sizeof($array));
    if($retorno != -1) {
        $aux = (array)clone(object)$array;
        array_splice($array, $retorno, 1);
        $retorno = verificaArray($array, sizeof($array));
        if($retorno == -1) {
            echo 'True';
        } else {
            array_splice($aux, $retorno+2, 1);
            $retorno = verificaArray($aux, sizeof($aux));
            if($retorno == -1) {
                echo 'True';
            } else {
                echo 'False';
            }
        }
    } else {
        echo 'True';
    }

    function verificaArray($arr, $n)
    {
        if ($n == 0 || $n == 1) {
            return -1;
        }

        for($i=0; $i < $n-1; $i++) {
            if($arr[$i] >= $arr[$i+1]) {
                return $i;
            }
        }
        return -1;
    }
?>
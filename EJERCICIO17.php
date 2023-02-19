<?php
$opc=2;
$num1=4;
$num2=5;
        switch ($opc){
            case 1:
                echo"usted escogio la opcion para saber cuál numero es mayor:";
                if ($num1 == $num2)
                    {print "Los numeros son iguales";
                    }
                else
                    {
                        if ($num1 > $num2)
                            {
                                print"El primer numero ".$num1. " es mayor que el segundo ".$num2;
                            }
                        else
                            {
                                print "El primer numero ".$num1. " es mayor que el segundo ".$num2;
                            } 
                    }
                break;
            case 2:
                echo "Usted entro a la opcion para realizar operaciones aritmeticas:";
                print()
                break;
        }
?>
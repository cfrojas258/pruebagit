
<?php

$i=0;
$palabra="Tecnologo ADSO";
while ($i <= strlen($palabra) -1)
{
    echo"la palabra:\n".$palabra[$i.""]."\n con espacios entre las letras<br>";
    $i++;
}

while ($i <= strlen($palabra) -1)
{
    echo"[".substr($palabra,$i)."]<br>";
    $i++;
}
?>



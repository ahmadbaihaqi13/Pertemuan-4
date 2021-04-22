<h1>Daftar perkalian looping</h1>
<?php
 For ($a = 12; $a<25; $a++)

{
 For ($b = 15; $b<25; $b++)

    {
        $c=$a*$b;
        echo $a." x ".$b." = ".$c."<br>";
        $b++;
    }
    $a++;
}

?>
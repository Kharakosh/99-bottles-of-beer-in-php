<?php
    function deStommeOpdrachtVanBas()
    {
        for ($i = 99; $i > 0; $i--){
            if($i >= 1) {
                echo $i . "bottles of beer on the wall, " . $i . " bottles of beer.  Take one down and pass it around, " . $i-1 . "98 bottles of beer on the wall.";
            }
            else if($i == 1){
                echo "1 bottle of beer on the wall, 1 bottle of beer. Take one down and pass it around, no more bottles of beer on the wall.";
            }
            echo "No more bottles of beer on the wall, no more bottles of beer. Go to the store and buy some more, 99 bottles of beer on the wall.";
    }
}
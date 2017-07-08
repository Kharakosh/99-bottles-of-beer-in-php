<?php
        for ($i = 99; $i >= 0; $i--) {
            echo stringPicker($i);
    }

    function stringPicker($i){
        if ($i > 2) {
            return "<p> " . $i . " bottles of beer on the wall, " . $i . " bottles of beer." . "<br/>" ."Take one down and pass it around, " . ($i - 1) . " bottles of beer on the wall. <br/> ";
        }
        else if($i == 2){
            return "<p> " . $i . " bottles of beer on the wall, " . $i . " bottles of beer." . "<br/>" . "Take one down and pass it around, " . ($i - 1) . " bottle of beer on the wall. <br/> ";
        }
        else if($i == 1){
            return "<p> 1 bottle of beer on the wall, 1 bottle of beer. <br/>"."Take one down and pass it around, no more bottles of beer on the wall. <br/> ";
        }
        else{
            return "<p> No more bottles of beer on the wall, no more bottles of beer.<br/>"."Go to the store and buy some more, 99 bottles of beer on the wall. <br/> ";
        }
    }
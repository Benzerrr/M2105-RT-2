<?php
/**
 * Created by PhpStorm.
 * User: benjamin.duval
 * Date: 10/03/2016
 * Time: 17:00
 */


function createHTMLTable ($l,$c){
    echo "<table border='1'>";
    for ($i = 0; $i <$l; $i++) {
        echo "<tr>";
        for($j=0;$j<$c; $i++){
            echo "<td>{$i} - {$j}</td>";
        }
        echo "</td>";
    }
    echo "</table>";
}
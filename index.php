<?php 

function countDown(int $n): void {
    if($n == 0) echo $n;
    else {
        echo $n.",";
        echo countDown($n-1);
    }
}

countDown(3);
?>
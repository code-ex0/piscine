<?php for ($i=2;$i<100;$i++){$isPrime=1;
for($j=2;$j<=$i/2;$j++){
if ($i%$j ==0){$isPrime=0;break;}}
if ($isPrime==1){
echo "$i";
if ($i!==97){echo ", ";}}}?>
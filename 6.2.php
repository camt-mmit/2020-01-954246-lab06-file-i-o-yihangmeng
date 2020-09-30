<?php
$output = "";
echo"Input number : ";
$a=trim(fgets(STDIN));
for($i=1;$i<=12;$i++)
{
  for($k=2;$k<=$a;$k++)
  {
   $j=$i*$k;
   echo $j."\t ";
   $output=$output."".$j."\t";
  }
  echo"\n";
  $output=$output.""."\n";
}
file_put_contents("OutputResult.txt",$output);

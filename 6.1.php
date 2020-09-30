<?php
$text=file_get_contents("score.txt");
$line = explode("\r\n",$text);
$n=$line[0];
$sum=0;
$ave=0;
echo"number of data ".$line[0]."\n";
for($i=1;$i<=$n;$i++)
{
	echo "data ".$i." = ".$line[$i]."\n";
	$sum+=$line[$i];
}
$ave=$sum/$n;
echo"Average score = ".$ave;


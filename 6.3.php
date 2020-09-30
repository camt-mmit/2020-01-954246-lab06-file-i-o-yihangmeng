 <?php
$output = "";
while(true)
{
	$input=trim(fgets(STDIN));
	if($input=='e')
	{
		break;
	}
	$output=$output.$input."\n";
}
file_put_contents("OutputResult.txt",$output);


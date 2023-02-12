<?php

$i=0;
$types=array("bool","int","float","string", "null");
$input=array("TRUE",3,1.2,'"string"', "null");
$code ="<?php \n error_reporting(E_ALL);\n";
$invar='$x';
$code2="";
foreach ($types as $expect)
{
    foreach($types as $output)
    {
        $code .="function test$i($expect $invar):$output\n{return $invar;}\n";
        foreach ($input as $test)
        {
            $code2 .="try {\ntest$i($test);}\ncatch (Throwable){\necho 'Error: $expect to $output';}\n";
        }
        $i++;
    }
}
$myfile=fopen("test.php", "w") or die("Unable to open file!");
fwrite($myfile, $code);
fwrite($myfile, $code2);
fclose($myfile);

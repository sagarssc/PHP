<?php
$h=fopen("ssc.txt","w+");
fwrite($h,"abcdefghijklmnop");
rewind($h);
echo "s =".fgetc($h);
fseek($h,0);
echo "s= ".fgetc($h);
fseek($h,3,SEEK_SET);
echo "s= ".fgetc($h);
fseek($h,3,SEEK_CUR);
echo "s= ".fgetc($h);
fseek($h,-1,SEEK_END);
echo "s= ".fgetc($h);
$s='sagar <a> tag & ..';
$input = htmlentities($s);
echo $input;
?>
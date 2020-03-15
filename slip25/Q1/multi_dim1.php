<?php
$a=array(array(10,20,30),array(70,40,50),array(85,95,74));
$r=$_POST['tx1'];
$c=$_POST['tx2'];
$opt=$_POST['radio'];
if($opt=='op1')
{
   echo $a[$r][$c];
echo "<br>";
    for($i=0;$i<count($a);$i++)
  {
     for($j=0;$j<count($a[$i]);$j++)
    {
   echo $a[$i][$j]."&nbsp ";
      }
echo "<br>";
   }

}

if($opt=='op2')
{
   unset ($a[$r][$c]);
   echo "<br>";
   print_r($a);
}
?>

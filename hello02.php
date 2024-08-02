<?php
echo "Welcome to the world of dates <br>";
$d = date(" d S F Y");
echo "today date is $d <br>"
?>
<?php
echo "Welcome to associative arrays in php";
$arr = array('this','that','what');
echo $arr[1];
echo $arr[2];"<br>";

$multiDim = array(
    array(1,2,3,4),
    array(5,6,7,8),
    array(4,5,0,1)
);
//echo $multiDim[1][2];


for ($i=0; $i <count($multiDim); $i++){
    for( $j=0;$j < count($multiDim[$i]); $j++){

        echo $multiDim[$i] [$j];
        echo " ";

    } echo "<br>";
}
?>
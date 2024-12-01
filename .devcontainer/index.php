<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $i=0;
    while($i<=10){
        echo "$i<br>";
        $i++;
    }
$arr=[1,2,3,4,5,6];
foreach($arr as $arr){
    echo "$arr<br>";
}

//most duplicate number
$num=[1,2,3,3,4,5,1,1,1,2,3,3,4];
$largestNum=$num[1];
$secondlarge=$num[0];

foreach($num as $n){
if($n >$largestNum)
{
    $largestNum=$n;
    $secondlarge=$largestNum;

}
if($n>$secondlarge && $n<$largestNum){
    $secondlarge=$n;
}
}
echo "The second large number is: $secondlarge<br>";


    ?>
    
</body>
</html>
<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>PHP基礎編</title>
</head>

<body>
   <p>
   <?php
   function sortNums(array $array , bool $order): array{
    if($order === true){
        echo "昇順にソートします。<br>";
        sort($array);
    }else{
        echo "降順にソートします。<br>";
        rsort($array);
    }
    foreach($array as $num) {
        echo $num ."<br>";
    }
    return $array;
   }
   $nums=[15,4,18,23,10];

   sortNums($nums,TRUE);
   sortNums($nums,FALSE);
   ?>
   </p>
</body>
</html>
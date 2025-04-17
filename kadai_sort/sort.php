<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        $num = [15, 4, 18, 23, 10];

        function sort_2way($array, $order){
            if ($order === true){
                echo '昇順でソートします。<br>';
                sort($array);
                foreach($array as $num){
                    echo "{$num}<br>";
                }
            } else{
                echo '降順でソートします。<br>';
                rsort($array);
                foreach($array as $num){
                    echo "{$num}<br>";
                }
            }
        }

        sort_2way($num, true);
        sort_2way($num,false);
        ?>
    </p>
</body>

</html>
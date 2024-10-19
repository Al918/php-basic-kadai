<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>PHP基礎編</title>
</head>
<body>
    <p>
        <?php
         // 変数を定義する
        $nums = [15, 4, 18, 23, 10];

        function sort_2way($array, $order) {

            if ($order) {
                echo '昇順ソートにします。<br>';
                sort ($array);

            } else {
                echo '降順ソートにします。<br>';
                rsort ($array);
            }

            foreach ($array as $num) {
                echo $num . '<br>';
            }
        }

   

    sort_2way($nums, true);
    sort_2way($nums, false);
        ?>
    </p>
    

</body>
</html>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>php_kadai_007</title>
</head>
<body>
    <p>
        <?php
        // 連想配列に値を代入する
        $vegetable_data = ['name' => 'onion', 'price' => 200, 'weight' => 160];

        // 連想配列の値を出力する
        print_r($vegetable_data);

        ?>
    </p>
</body>
</html>
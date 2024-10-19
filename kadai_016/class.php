<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>PHP_kadai_016</title>
</head>
<body>
    <p>
        <?php
        // クラスを定義する
        class Food{
            // プロパティを定義
            private $name;
            private $price;

            // メッソドを定義する
            public function show_price() {
                echo $this->price . '<br>';
            }

            // コントラクタを定義する
            public function __construct(string $name, int $price) {
                $this->name = $name;
                $this->price = $price;
            }
        }

        class Animal{
            // プロパティを定義
            private $name;
            private $height;
            private $weight;

            // メソッドを定義する
            public function show_height() {
                echo $this->height . '<br>';
            }

            // コントラクタを定義する
            public function __construct(string $name, int $height, int $weight) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }
        }

        // インスタンス化する
        $potato = new Food('potato', 250);

        // 値の出力する
        print_r($potato);
        echo '<br>';
        $potato->show_price();
        
        // インスタンス化する
        $dog = new Animal('dog', 60, 5000);

        // 値の出力
        print_r($dog);
        echo '<br>';
        $dog->show_height();



        ?>
    </p>
</body>
</html>
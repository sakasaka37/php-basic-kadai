<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>PHP基礎編</title>
</head>

<body>
   <p>
        <?php
        Class Food{
            //プロパティを定義する
            private $name;
            private $price;

            //値を出力するメソッドを定義する
            public function show_price(){
                echo $this->price;
            }

            //コンストラクタを定義する
            public function __construct(string $name, int $price) {
                $this->name = $name;
                $this->price = $price;
            }
        }

        Class Animal{
            private $name;
            private $height;
            private $weight;

            public function show_height(){
                echo $this->height;
            }

            public function __construct(string $name, int $height, int $weight){
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }
        }

        //インスタンス化する
        $food = new Food('potato' , 250);
        $animal = new Animal('dog' , 60, 5000);
        //インスタンス出力する
        print_r($food);
        echo '<br>';
        print_r($animal);
        echo '<br>';
        //メソッドアクセス
        $food->show_price();
        echo '<br>';
        $animal->show_height();
        
        ?>
    </p>
</body>

</html>
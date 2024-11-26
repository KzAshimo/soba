<?php 
        class Product {
            public $name;
            public $price;

            public function __construct($name,$price){
                $this ->name = $name;
                $this ->price = $price;
            }
        }
        // 以下飲み物リスト---------------------------------
            $beer = [ //ビール---------------------------
                new Product("中ジョッキ",700),
                new Product("小ジョッキ",500)
            ];

            $shochu = new Product("雲海",850); //焼酎----

            $wine = new Product("ワイン",1500); //ワイン---

            $softDrink = [ //ソフトドリンク---------------
                new Product("ウーロン茶",300),
                new Product("オレンジジュース",300),
                new Product("三ツ矢サイダー",300)
            ];

            $local = [ //地酒----------------------------
                new Product("出羽燦々",3400),
                new Product("出羽の里",3300),
                new Product("大吟醸",1900),
                new Product("三法師",1500),
                new Product("桜花生吟醸",1400),
                new Product("純米吟醸",1200),
                new Product("一路",1500),
                new Product("雪漫々",1500),
                new Product("雄町",800),
                new Product("欄酒(大)",900),
                new Product("欄酒(小)",450)
            ];


?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>注文管理システム</title>
    <link href="../public/styles.css" rel="stylesheet">
</head>
<body class="font-sans bg-gray-50 text-gray-900 m-6">
    <header class="bg-blue-600 text-white py-4 shadow-md">
        <h1 class="text-3xl text-center md:text-4xl">OrganizerForm</h1>
    </header>
    <main class="max-w-full md:max-w-3xl mx-4 md:mx-auto mt-8">
        <!-- 現在の金額 -->
        <section class="mb-6">
            <div class="bg-white shadow rounded-lg p-4">
                <h2 class="text-xl md:text-2xl font-semibold mb-2">現在の金額</h2>
                <p class="text-lg md:text-xl font-bold text-blue-600">￥0</p>
            </div>
        </section>

        <?php 

            foreach($softDrink as $product){
                echo "<div class='flex items-center justify-between w-full'>";
                echo "<button data-price='{$product->price}' class='bg-blue-600 text-white px-3 py-2 rounded hover:bg-blue-700 transition'>{$product->name}</button>";
                echo "<p class='text-lg font-bold text-gray-700'>￥{$product->price}</p>";
                echo "</div>";            }
        ?>

        <!-- 飲み物セクション -->
        <section class="bg-white shadow rounded-lg p-4">
            <h2 class="text-xl md:text-2xl font-semibold border-b pb-2 mb-4">飲み物</h2>
            <!-- 商品カード -->
            <div class="space-y-4 md:grid md:grid-cols-2 gap-4">
                <!-- 商品 -->
                <div class="flex flex-col md:flex-row items-start bg-gray-100 p-4 rounded-lg shadow-sm hover:shadow-md transition">
                    <h3 class="text-lg md:text-xl font-bold bg-yellow-300 px-2 py-1 rounded mb-3 md:mb-0 md:mr-4 w-full text-center">ビール(KIRIN)</h3>
                    <?php 

foreach($beer as $product){
    echo "<div class='flex items-center justify-between w-full'>";
    echo "<button data-price='{$product->price}' class='bg-blue-600 text-white px-3 py-2 rounded hover:bg-blue-700 transition'>{$product->name}</button>";
    echo "<p class='text-lg font-bold text-gray-700'>￥{$product->price}</p>";
    echo "</div>";            }
?>

                    <div class="flex items-center justify-between w-full">
    <button class="bg-blue-600 text-white px-3 py-2 rounded hover:bg-blue-700 transition mb-3 md:mb-0 w-1/3 md:w-auto">
        中ジョッキ
    </button>
    <p class="text-lg font-bold text-gray-700">￥700</p>
</div>
                </div>
                <!-- 他の商品も同じ構造で追加可能 -->
            </div>
        </section>
    </main>
    <footer class="text-center py-4 mt-8 text-gray-500 text-sm">
        &copy; 2024 Organizer hanawa ashimo
    </footer>
</body>
</html>

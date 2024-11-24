<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>注文管理システム</title>
    <link href="../public/styles.css" rel="stylesheet">
</head>
<body class="font-sans bg-gray-50 text-gray-900">
    <header class="bg-blue-600 text-white py-4 shadow-md">
        <h1 class="text-4xl text-center">OrganizerForm</h1>
    </header>
    <main class="max-w-3xl mx-auto mt-8">
        <!-- 現在の金額 -->
        <section class="mb-6">
            <div class="bg-white shadow rounded-lg p-4">
                <h2 class="text-2xl font-semibold mb-2">現在の金額</h2>
                <p class="text-xl font-bold text-blue-600">￥0</p>
            </div>
        </section>
        
        <!-- 飲み物セクション -->
        <section class="bg-white shadow rounded-lg p-4">
            <h2 class="text-2xl font-semibold border-b pb-2 mb-4">飲み物</h2>
            <!-- 商品カード -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <!-- 商品 -->
                <div class="flex items-center bg-gray-100 p-4 rounded-lg shadow-sm hover:shadow-md transition">
                    <h3 class="text-xl font-bold bg-yellow-300 px-2 py-1 rounded mr-4">ビール(KIRIN)</h3>
                    <div class="flex items-center justify-between w-full">
                        <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
                            中ジョッキ
                        </button>
                        <p class="text-lg font-bold text-gray-700">￥700</p>
                    </div>
                </div>
                <!-- 他の商品も同じ構造で追加可能 -->
            </div>
        </section>
    </main>
    <footer class="text-center py-4 mt-8 text-gray-500">
        &copy; 2024 Organizer hanawa ashimo
    </footer>
</body>
</html>

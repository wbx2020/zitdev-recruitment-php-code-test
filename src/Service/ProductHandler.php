<?php

namespace App\Service;

class ProductHandler
{
    public $products = [
        [
            'id' => 1,
            'name' => 'Coca-cola',
            'type' => 'Drinks',
            'price' => 10,
            'create_at' => '2021-04-20 10:00:00',
        ],
        [
            'id' => 2,
            'name' => 'Persi',
            'type' => 'Drinks',
            'price' => 5,
            'create_at' => '2021-04-21 09:00:00',
        ],
        [
            'id' => 3,
            'name' => 'Ham Sandwich',
            'type' => 'Sandwich',
            'price' => 45,
            'create_at' => '2021-04-20 19:00:00',
        ],
        [
            'id' => 4,
            'name' => 'Cup cake',
            'type' => 'Dessert',
            'price' => 35,
            'create_at' => '2021-04-18 08:45:00',
        ],
        [
            'id' => 5,
            'name' => 'New York Cheese Cake',
            'type' => 'Dessert',
            'price' => 40,
            'create_at' => '2021-04-19 14:38:00',
        ],
        [
            'id' => 6,
            'name' => 'Lemon Tea',
            'type' => 'Drinks',
            'price' => 8,
            'create_at' => '2021-04-04 19:23:00',
        ],
    ];

    /**
     * 1. 在 \App\Service\ProductHandler 類 (class)，並編寫一個函数（function) ，用來計算商品總金額。
     * @return int|string
     */
    public function getTotalPrice()
    {
        $totalPrice = 0;
        foreach ($this->products as $product) {
            $price = $product['price'] ?: 0;
            $totalPrice = bcadd($totalPrice, $price, 2);
        }
        return $totalPrice;
    }

    /**
     * 2. 在 \App\Service\ProductHandler 類，編寫一個函數，把商品以金額排序（由大至小），並篩選商品類種是 “dessert” 的商品。
     * @param string $type
     * @return array
     */
    public function priceSort($type = 'Dessert')
    {
        $filterProduct = [];
        foreach ($this->products as $product) {
            if ($product["type"] == $type) {
                $filterProduct[] = $product;
            }
        }
        $priceArray = array_column($filterProduct, "price", "id");
        arsort($priceArray);

        $resultArray = [];
        foreach ($priceArray as $productId => $price) {
            foreach ($this->products as $product) {
                if ($productId == $product["id"]) {
                    $resultArray[] = $product;
                    break;
                }
            }
        }
        return $resultArray;

    }

    /**
     * 3. 在 \App\Service\ProductHandler 類，編寫一個函數，把創建日期轉換為 unix timestamp
     * @param array $products
     * @return array|array[]
     */
    public function convertToTimestamp($products = [])
    {
        $products = $products ?: $this->products;
        foreach ($products as &$product) {
            $product["create_at"] = strtotime($product["create_at"]);
        }
        return $products;
    }
}
<?php
header("Content-Type: application/json");

$products = [
    // Accessories
    [
        "id" => 1,
        "name" => "Silk Hair Bow",
        "category" => "Accessories",
        "image_url" => "./images/silkbow.jpg",
        "varieties" => [
            ["id" => 101, "name" => "Satin", "price" => 800],
            ["id" => 102, "name" => "Velvet", "price" => 1200],
            ["id" => 103, "name" => "Embroidered", "price" => 1500]
        ]
    ],
    [
        "id" => 2,
        "name" => "Pearl-Embroidered Gloves",
        "category" => "Accessories",
        "image_url" => "./images/gloves.jpg",
        "varieties" => [
            ["id" => 201, "name" => "Lace", "price" => 1500],
            ["id" => 202, "name" => "Silk", "price" => 2000],
            ["id" => 203, "name" => "Pearl Embellished", "price" => 2500]
        ]
    ],
    // Jewelry
    [
        "id" => 3,
        "name" => "Pearl Choker",
        "category" => "Jewelry",
        "image_url" => "./images/pearlchoker.jpg",
        "varieties" => [
            ["id" => 301, "name" => "Gold-Plated", "price" => 3500],
            ["id" => 302, "name" => "Pearl", "price" => 4200],
            ["id" => 303, "name" => "Crystal", "price" => 5000]
        ]
    ],
    [
        "id" => 4,
        "name" => "Tiara",
        "category" => "Jewelry",
        "image_url" => "./images/tiara.jpg",
        "varieties" => [
            ["id" => 401, "name" => "Silver", "price" => 3000],
            ["id" => 402, "name" => "Rose Gold", "price" => 3800],
            ["id" => 403, "name" => "Swarovski Crystal", "price" => 5000]
        ]
    ],
    // Dresses
    [
        "id" => 5,
        "name" => "Regency Ball Gown",
        "category" => "Dresses",
        "image_url" => "./images/dress1.jpg",
        "varieties" => [
            ["id" => 501, "name" => "Satin", "price" => 2800],
            ["id" => 502, "name" => "Silk", "price" => 3500],
            ["id" => 503, "name" => "Embroidered Lace", "price" => 4500]
        ]
    ],
    [
        "id" => 6,
        "name" => "Empire Waist Maxi Dress",
        "category" => "Dresses",
        "image_url" => "./images/dress2.jpg",
        "varieties" => [
            ["id" => 601, "name" => "Chiffon", "price" => 2000],
            ["id" => 602, "name" => "Silk", "price" => 3000],
            ["id" => 603, "name" => "Beaded", "price" => 4000]
        ]
    ],
    // Tops
    [
        "id" => 7,
        "name" => "Victorian Lace Blouse",
        "category" => "Tops",
        "image_url" => "./images/top1.jpg",
        "varieties" => [
            ["id" => 701, "name" => "Cotton", "price" => 1200],
            ["id" => 702, "name" => "Lace", "price" => 1800],
            ["id" => 703, "name" => "Corset", "price" => 2500]
        ]
    ],
    // Skirts
    [
        "id" => 8,
        "name" => "Floral Skirt",
        "category" => "Skirts",
        "image_url" => "./images/organzaskirt.jpg",
        "varieties" => [
            ["id" => 801, "name" => "Tulle", "price" => 2200],
            ["id" => 802, "name" => "Organza", "price" => 2800],
            ["id" => 803, "name" => "Silk", "price" => 3500]
        ]
    ],
    // Bags
    [
        "id" => 9,
        "name" => "Embroidered Beaded Handbag",
        "category" => "Bags",
        "image_url" => "./images/bag1.jpg",
        "varieties" => [
            ["id" => 901, "name" => "Faux Leather", "price" => 1800],
            ["id" => 902, "name" => "Velvet", "price" => 2500],
            ["id" => 903, "name" => "Beaded", "price" => 3200]
        ]
    ],
    [
        "id" => 10,
        "name" => "Pearl Mini Purse",
        "category" => "Bags",
        "image_url" => "./images/bag2.jpg",
        "varieties" => [
            ["id" => 1001, "name" => "Velvet", "price" => 2800],
            ["id" => 1002, "name" => "Pearl Beaded", "price" => 3800],
            ["id" => 1003, "name" => "Swarovski Crystal", "price" => 5000]
        ]
    ]
];

$category = isset($_GET['category']) ? trim($_GET['category']) : '';

if (!empty($category)) {
    $filteredProducts = array_filter($products, function ($product) use ($category) {
        return strtolower($product['category']) === strtolower($category);
    });

    // Re-index array after filtering
    $filteredProducts = array_values($filteredProducts);
    
    echo json_encode($filteredProducts);
} else {
    // If no category is provided, return all products
    echo json_encode($products);
}
?>
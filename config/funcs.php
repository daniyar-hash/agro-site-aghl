<?php

$db = Db::getConnection();


$file = __DIR__ . '/prices.csv';

$handle = fopen($file, 'r');

// пропускаем заголовок
fgetcsv($handle);

$stmt = $db->prepare("
    UPDATE products 
    SET price = :price 
    WHERE name LIKE = :name
");


while (($row = fgetcsv($handle, 1000, ',')) !== false) {
    [$name, $price] = $row;

    $stmt->execute([
        ':name'   => $name,
        ':price'=> $price
    ]);
}

fclose($handle);

echo 'Готово';

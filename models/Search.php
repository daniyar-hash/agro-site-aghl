<?php

class Search
{
    public static function find(string $word)

    {


    $db = Db::getConnection();


    if ($word != '') {

    $stmt = $db->prepare("SELECT 
    p.name AS result_name, 
    'товар' AS result_type,
    p.slug AS slug,
    p.id AS id,
    p.category_id AS category_id,
    p.subcategory_id AS sub_category_id,
    c.name AS category_name,
    c.slug AS category_slug,   
    sc.name AS sub_category_name,
    sc.slug AS sub_category_slug
FROM product p 
LEFT JOIN category c ON p.category_id = c.id
LEFT JOIN sub_category sc ON p.subcategory_id = sc.id
WHERE p.name LIKE :search 

UNION ALL

SELECT 
    category.name AS result_name, 
    'Категория' AS result_type,
    category.slug AS slug,
    category.id AS id,
    NULL, NULL,NULL,NULL,NULL,NULL

FROM category 
WHERE category.name LIKE :search

UNION ALL

SELECT 
    sub_category.name AS result_name, 
    'Субкатегория' AS result_type,
    sub_category.slug AS slug,
    sub_category.id AS id,
    sub_category.category_id AS category_id,
    sub_category.id AS sub_category_id,
    c.name AS category_name,
    c.slug AS category_slug,
    sub_category.name AS sub_category_name,
    sub_category.slug AS sub_category_slug
FROM sub_category 
LEFT JOIN category c ON sub_category.category_id = c.id
WHERE sub_category.name LIKE :search

LIMIT 20;;
    ");


        $stmt->execute(['search' => "%{$word}%"]);


       
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $results;

       
   
        }



    }
}

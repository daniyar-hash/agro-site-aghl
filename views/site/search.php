    <?php


    require_once 'C:\OSPanel\domains\agro-site-aghl\config\paths.php';

    require_once  'C:\OSPanel\domains\agro-site-aghl\components\Autoload.php';


    $db = Db::getConnection();


    // // Задаем кодировку
    // $db->exec("set names utf8");

    //  $db = Db::getConnection();
    // Получаем запрос
    $word = isset($_GET['word']) ? trim($_GET['word']) : '';


    // echo "this is data=".$q;

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

   
        

        if ($results) {
            foreach ($results as $row) {


            $category_link = ($row['category_slug'] ?? '') ? $row['category_slug'].'/' : '';
            $subcategory_link = ($row['sub_category_slug'] ?? '') ? $row['sub_category_slug'].'/' : '';
                
            $row_name = $row['slug'] ?? '';
            $row_name = $row_name === rtrim($subcategory_link, '/') ? '' : $row_name;
                   
                 echo  '<li class="search__results-item"><a href="/'.
                 $category_link . $subcategory_link.
                  $row_name . ' " class="search__results-link" >'. htmlspecialchars($row['result_name']) .' <span>'.
                   htmlspecialchars($row['result_type']).'</span></a></li>';
          

    
            }
        } else {
            echo "<div>Ничего не найдено</div>";
        }
    }

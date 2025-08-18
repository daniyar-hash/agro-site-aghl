    <?php


    // include_once 'C:\OSPanel\domains\agro-site-aghl\components\Db.php';  
    // index.php
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
        $stmt = $db->prepare("SELECT p.name AS result_name, 'товар' AS result_type FROM product p

    WHERE p.name LIKE :search

    UNION
    SELECT 
        category.name AS result_name,
        'Категория' AS result_type
    FROM category
    WHERE category.name LIKE :search

    UNION

    SELECT 
        sub_category.name AS result_name,
        'Субкатегория' AS result_type
    FROM sub_category
    WHERE sub_category.name LIKE :search
    LIMIT 20;
    ");


        $stmt->execute(['search' => "%{$word}%"]);
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if ($results) {
            foreach ($results as $row) {

            if($row['result_type'] ==='товар'){
                    $row['result_type']='';
            }
                    
                echo  '<li class="search__results-item"><a href="#" class="search__results-link" >'. htmlspecialchars($row['result_name']) . 
            
       
                
                '</a><span>'. htmlspecialchars($row['result_type']).'</span></li>';

    
            }
        } else {
            echo "<div>Ничего не найдено</div>";
        }
    }

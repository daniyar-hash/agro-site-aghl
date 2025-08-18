<?php
// class SearchController {
//     public function actionIndex() {
//         // Убедитесь, что перед этим ничего не выводилось
//         header('Content-Type: application/json; charset=utf-8');

//     //   echo 'ddddddddddddddd';
        
//         try {
//             // Проверка метода запроса (опционально)
//             if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
//                 throw new Exception('Only GET requests are allowed');
//             }

//             $db = Db::getConnection();
//             $q = $_GET['q'] ?? '';
            
//             if (strlen($q) < 2) {
//                 echo json_encode([]);
//                 exit;
//             }

//             $sql = "SELECT 
//                 p.name AS product_name,
//                 p.slug AS product_slug,
//                 p.price,
//                 category.name AS category_name,
//                 sub_category.name AS sub_category_name
//             FROM product p
//             INNER JOIN category ON p.category_id = category.id
//             INNER JOIN sub_category ON p.subcategory_id = sub_category.id
//             WHERE 
//                 p.name LIKE :search
//                 OR category.name LIKE :search
//                 OR sub_category.name LIKE :search
//             ORDER BY p.id DESC
//             LIMIT 20";

//             $stmt = $db->prepare($sql);
//             $stmt->execute(['search' => "%{$q}%"]);
            
//             $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
//             echo json_encode($results, JSON_UNESCAPED_UNICODE);
//             exit;
//         } catch (Exception $e) {
//             http_response_code(500);
//             echo json_encode([
//                 'error' => $e->getMessage(),
//                 'trace' => $e->getTraceAsString() // Только для разработки
//             ]);
//             exit;
//         }
//     }
// }
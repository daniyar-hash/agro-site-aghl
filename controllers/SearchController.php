<?php




class SearchController
{
    public function actionAjax()
    {

        header('Content-Type: text/html; charset=UTF-8');

        // file_put_contents(
        //     __DIR__ . '/log.txt',
        //         $_SERVER['REQUEST_URI'] . PHP_EOL,   
        //         FILE_APPEND
        //     );


        $word = trim($_GET['word'] ?? '');
        $results = [];
   
   

        if ($word !== '') {
            $results = Search::find($word);
        }


        // var_dump($results);

   
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
} 
        else {
            echo "<div>Ничего не найдено</div>";
        }







        // foreach ($results as $row) {
        //     echo '<li class="search__results-item">
        //             <a href="/' .
        //                 ($row['category_slug'] ?? '') . '/' .
        //                 ($row['sub_category_slug'] ?? '') . '/' .
        //                 ($row['slug'] ?? '') . '">
        //                 ' . htmlspecialchars($row['result_name']) . '
        //                 <span>' . htmlspecialchars($row['result_type']) . '</span>
        //             </a>
        //           </li>';
        // }

        return true;
    }
}

<?php

/**
 * Контроллер CartController
 */
class CategoryPageController
{

    /**
     * Action для главной страницы
     */
    public function actionIndex($slug, $page=1)
    {
     
        // Список категорий для левого меню
    
        $categoryBySlug = Category::getCategoryBySlug($slug);

        $categoryId = $categoryBySlug['id'];

        $categoryWithSubCategories = Category::getCategoryWithSubCategories(); // Список категорий для левого меню
        $subcategiesByCategory = Category::getSubCategoriesByCategory($slug);

               // Список товаров в категории
        $categoryProducts = Product::getProductsListByCategory($categoryId, $page);



 
        // Общее количетсво товаров (необходимо для постраничной навигации)
        $total = Product::getTotalProductsInCategory($categoryId);

        $pagination = new Pagination($total, $page, Product::SHOW_BY_DEFAULT, 'page=');


    
           
         // Подключаем вид
        require_once(ROOT . '/views/category-page/index.php');
        return true;
    }



 public function actionSubCategory($slug,  $page=1)
    {

          
        $subCategoryBySlug = Category::getSubCategoryBySlug($slug);//action title

        $categoryFromSubCategory = Category::getCategoryFromSubCategory($slug);  //get category and subcategory for breadcrumbs;
        $categoryWithSubCategories = Category::getCategoryWithSubCategories();  //for left menu
        
        


        $subCategoryId = $subCategoryBySlug['id'];
        $categoryProducts = Product::getProductsListBySubCategory($subCategoryId, $page);


        // echo '<pre>';
        // echo print_r($categoryProducts);
        // echo '</pre>';

       // Общее количетсво товаров (необходимо для постраничной навигации)
        $total = Product::getTotalProductsInSubCategory($subCategoryId);

        $pagination = new Pagination($total, $page, Product::SHOW_BY_DEFAULT, 'page=');
  

        // Подключаем вид
        require_once(ROOT . '/views/category-page/subcategory.php');
        return true;
    }

    
}

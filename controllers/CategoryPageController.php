<?php

/**
 * Контроллер CartController
 */
class CategoryPageController
{

    /**
     * Action для главной страницы
     */
    public function actionIndex($slug)
    {
     
        // Список категорий для левого меню
        $categories = Category::getCategoriesList();

        $categoryBySlug = Category::getCategoryBySlug($slug);
        $categoryWithSubCategories = Category::getCategoryWithSubCategories();        // Список категорий для левого меню
           
         // Подключаем вид
        require_once(ROOT . '/views/category-page/index.php');
        return true;
    }



 public function actionSubCategory($slug)
    {
        // Список категорий для левого меню
        //$categories = Category::getCategoriesList();

        // Список последних товаров
        //$latestProducts = Product::getLatestProducts(6);

        // Список товаров для слайдера
     //   $sliderProducts = Product::getRecommendedProducts();
       // Список категорий для левого меню

//    var_dump($slug);
    

        
        $subCategoryBySlug = Category::getSubCategoryBySlug($slug);//action title


        $categoryFromSubCategory = Category::getCategoryFromSubCategory($slug);  //get category and subcategory for breadcrumbs;


        $categoryWithSubCategories = Category::getCategoryWithSubCategories();  //for left menu

       
        // echo'<pre>';
        // echo print_r($categoryWithSubCategories);
        // echo '</pre>';

        // Подключаем вид
        require_once(ROOT . '/views/category-page/subcategory.php');
        return true;
    }

    
}

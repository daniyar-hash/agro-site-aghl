<?php

/**
 * Контроллер CartController
 */
class CategoryPageController
{

    /**
     * Action для главной страницы
     */
    public function actionIndex()
    {
        // Список категорий для левого меню
        $categories = Category::getCategoriesList();
        $subCategories = Category::getSubCategoriesList();


        foreach ($subCategories as $subCategory){
         $categoryId =  $subCategory['category_id'];
         $category  = Category::getCategoryById($categoryId);
            echo '<pre>';
            print_r($category);
            echo  '</pre>';


        }



        // Список последних товаров
      //  $latestProducts = Product::getLatestProducts(6);

        // Список товаров для слайдера
      //  $sliderProducts = Product::getRecommendedProducts();

        // Подключаем вид
        require_once(ROOT . '/views/category-page/index.php');
        return true;
    }



        public function actionSubCategory()
    {
        // Список категорий для левого меню
        //$categories = Category::getCategoriesList();

        // Список последних товаров
        $latestProducts = Product::getLatestProducts(6);

        // Список товаров для слайдера
        $sliderProducts = Product::getRecommendedProducts();

        // Подключаем вид
        require_once(ROOT . '/views/category-page/subcategory.php');
        return true;
    }

    
}

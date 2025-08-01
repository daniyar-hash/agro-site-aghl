<?php

/**
 * Контроллер ProductController
 * Товар
 */
class ProductController
{

    /**
     * Action для страницы просмотра товара
     * @param string $productId <p>id товара</p>
     */
    public function actionView($slug)
    {
        // Список категорий для левого меню
        // $categories = Category::getCategoriesList();

        // // Получаем инфомрацию о товаре
         $product = Product::getProductBySlug($slug);

         $productId = $product['id'];
         $categoryId = $product['category_id'];
         $subCategoryId = $product['subcategory_id'];
        
         $categoryProduct = Category::getCategoryById($categoryId);
         $subCategoryProduct = Category::getSubCategoryById($subCategoryId);

      

        // echo '<pre>';
        // print_r($product['id']);
        // echo  '</pre>';

       $productTable = Product::getProductTableById($productId);








        // Подключаем вид
        require_once(ROOT . '/views/product/view.php');
        return true;
    }

}

<?php

/**
 * Класс Category - модель для работы с категориями товаров
 */
class Category
{



        /**
     * Возвращает массив категорий для списка на сайте
     * @return array <p>Массив с категориями</p>
     */
    public static function getCategoryWithSubCategories()
    
    {
        $db = Db::getConnection();

        $sql = " SELECT 
                    category.id AS category_id,
                    category.name AS category_name,
                    category.slug AS category_slug,
                    sub_category.slug AS sub_category_slug,
                    sub_category.id AS sub_id,
                    sub_category.name AS sub_name
                FROM category
                INNER JOIN sub_category ON sub_category.category_id = category.id
                ORDER BY category.id
                ";

                $result = $db->query($sql);
                $result->setFetchMode(PDO::FETCH_ASSOC);
                $data = $result->fetchAll();

                // Если хочешь сгруппировать категории с вложенными подкатегориями:
                $categories = [];

     


                foreach ($data as $row) {
                    $catId = $row['category_id'];

                    if (!isset($categories[$catId])) {
                        $categories[$catId] = [
                            'id' => $catId,
                            'category_link' =>$row['category_slug'],
                            'name' => $row['category_name'],
                            'subcategories' => [],
                        ];
                    }

                    if ($row['sub_id']) {
                        $categories[$catId]['subcategories'][] = $row['sub_category_slug'];
                        $categories[$catId]['subcategories'][] = $row['sub_name'];


            
                    }
                }

              return array_values($categories);
 




    }

    /**
     * Возвращает массив категорий для списка на сайте
     * @return array <p>Массив с категориями</p>
     */
    public static function getCategoriesList()
    
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Запрос к БД
        $result = $db->query('SELECT id, name FROM category WHERE status = "1" ORDER BY sort_order, name ASC');
       
        // Получение и возврат результатов
        $i = 0;
        $categoryList = array();
        while ($row = $result->fetch()) {
            $categoryList[$i]['id'] = $row['id'];
            $categoryList[$i]['name'] = $row['name'];
            $i++;
        }
        return $categoryList; 
    }

    
    /**
     * Возвращает массив категорий для списка на сайте
     * @return array <p>Массив с категориями</p>
     */
    public static function getSubCategoryBySlug($slug)
    
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Запрос к БД
        $sql = "SELECT id, name FROM sub_category WHERE slug =:slug";
        $result =$db->prepare($sql);
        
        $result->bindParam(':slug', $slug, PDO::PARAM_STR);

          $result->setFetchMode(PDO::FETCH_ASSOC);
          $result->execute();
          $row  = $result->fetch();
    

            if(!$row){
                    echo "Error, does not category";
                }
            
            // Возвращаем данные
            return $row;
    }

   /**
     * Возвращает массив категорий для списка на сайте
     * @return array <p>Массив с категориями</p>
     */
    public static function getCategoryFromSubCategory($slug)
    
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Запрос к БД
        $sql = "SELECT category.name AS category_name, category.slug AS category_slug, sub_category.slug AS sub_category_slug, sub_category.name AS sub_name FROM sub_category INNER JOIN category ON sub_category.category_id = category.id
         WHERE sub_category.slug = :slug; ";
        $result =$db->prepare($sql);
        
        $result->bindParam(':slug', $slug, PDO::PARAM_STR);

          $result->setFetchMode(PDO::FETCH_ASSOC);
          $result->execute();
          $row  = $result->fetch();
    

            if(!$row){
                    echo "Error, does not category";
                }
            
            // Возвращаем данные
            return $row;
    }


    /**
     * Возвращает массив категорий для списка в админпанели <br/>
     * (при этом в результат попадают и включенные и выключенные категории)
     * @return array <p>Массив категорий</p>
     */
    public static function getCategoriesListAdmin()
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Запрос к БД
        $result = $db->query('SELECT id, name, sort_order, status FROM category ORDER BY sort_order ASC');

        // Получение и возврат результатов
        $categoryList = array();
        $i = 0;
        while ($row = $result->fetch()) {
            $categoryList[$i]['id'] = $row['id'];
            $categoryList[$i]['name'] = $row['name'];
            $categoryList[$i]['sort_order'] = $row['sort_order'];
            $categoryList[$i]['status'] = $row['status'];
            $i++;
        }
        return $categoryList;
    }

    /**
     * Удаляет категорию с заданным id
     * @param integer $id
     * @return boolean <p>Результат выполнения метода</p>
     */
    public static function deleteCategoryById($id)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'DELETE FROM category WHERE id = :id';

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }

    /**
     * Редактирование категории с заданным id
     * @param integer $id <p>id категории</p>
     * @param string $name <p>Название</p>
     * @param integer $sortOrder <p>Порядковый номер</p>
     * @param integer $status <p>Статус <i>(включено "1", выключено "0")</i></p>
     * @return boolean <p>Результат выполнения метода</p>
     */
    public static function updateCategoryById($id, $name, $sortOrder, $status)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = "UPDATE category
            SET 
                name = :name, 
                sort_order = :sort_order, 
                status = :status
            WHERE id = :id";

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':sort_order', $sortOrder, PDO::PARAM_INT);
        $result->bindParam(':status', $status, PDO::PARAM_INT);
        return $result->execute();
    }



        /**
     * Возвращает категорию с указанным id
     * @param string $id <p>id категории</p>
     * @return array <p>Массив с информацией о категории</p>
     */
    public static function getCategoryBySlug($slug)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'SELECT * FROM category WHERE slug = :slug';

        // Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':slug', $slug, PDO::PARAM_STR);

        // Указываем, что хотим получить данные в виде массива
        $result->setFetchMode(PDO::FETCH_ASSOC);
        // Выполняем запрос
        $result->execute();
        $row =  $result->fetch();
        if(!$row){
            echo "Error, does not category";
        }
          
        // Возвращаем данные
        return $row;
    }

    /**
     * Возвращает категорию с указанным id
     * @param integer $id <p>id категории</p>
     * @return array <p>Массив с информацией о категории</p>
     */
    public static function getCategoryById($id)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'SELECT * FROM category WHERE id = :id';

        // Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);

        // Указываем, что хотим получить данные в виде массива
        $result->setFetchMode(PDO::FETCH_ASSOC);

        // Выполняем запрос
        $result->execute();

        // Возвращаем данные
        return $result->fetch();
    }


        /**
     * Возвращает категорию с указанным id
     * @param integer $id <p>id категории</p>
     * @return array <p>Массив с информацией о категории</p>
     */
    public static function getSubCategoryById($id)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'SELECT * FROM sub_category WHERE id = :id';

        // Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);

        // Указываем, что хотим получить данные в виде массива
        $result->setFetchMode(PDO::FETCH_ASSOC);

        // Выполняем запрос
        $result->execute();

        // Возвращаем данные
        return $result->fetch();
    }


    /**
     * Возвращает текстое пояснение статуса для категории :<br/>
     * <i>0 - Скрыта, 1 - Отображается</i>
     * @param integer $status <p>Статус</p>
     * @return string <p>Текстовое пояснение</p>
     */
    public static function getStatusText($status)
    {
        switch ($status) {
            case '1':
                return 'Отображается';
                break;
            case '0':
                return 'Скрыта';
                break;
        }
    }

    /**
     * Добавляет новую категорию
     * @param string $name <p>Название</p>
     * @param integer $sortOrder <p>Порядковый номер</p>
     * @param integer $status <p>Статус <i>(включено "1", выключено "0")</i></p>
     * @return boolean <p>Результат добавления записи в таблицу</p>
     */
    public static function createCategory($name, $sortOrder, $status)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'INSERT INTO category (name, sort_order, status) '
                . 'VALUES (:name, :sort_order, :status)';

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':sort_order', $sortOrder, PDO::PARAM_INT);
        $result->bindParam(':status', $status, PDO::PARAM_INT);
        return $result->execute();
    }

}

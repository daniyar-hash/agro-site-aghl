<?php
$title = "Субкатегория: {$categoryFromSubCategory['sub_name']}";

include ROOT . '/views/layouts/header.php'; ?>
   <main class="content">
         <div class="breadcrumbs container">
             <div class="breadcrumbs__inner">
                <ul class="breadcrumbs__list">
                    <li class="breadcrumbs__item ">
                        <a href="/" class="breadcrumbs__link">Главная&nbsp/&nbsp</a>
                    </li>
                    <li class="breadcrumbs__item">
                        <a href="/<?= htmlspecialchars($categoryFromSubCategory['category_slug']) ?>" class="breadcrumbs__link">
                            <?= htmlspecialchars($categoryFromSubCategory['category_name']) ?>
                   &nbsp/&nbsp
                        </a>
                    </li>
                    <li class="breadcrumbs__item is-current">
                        <a class="breadcrumbs__link"><?= htmlspecialchars($categoryFromSubCategory['sub_name']) ?></a>
                    </li>
                </ul>
            </div>

        </div>
        <section class="section category-page">
                 <h1 class="visually-hidden"><?= $subCategoryBySlug['name'] ?></h1>

            <div class="category-page__inner container">
                  <div class="category-page__wrapper">


                <div class="category-page__body">
                    <div class="block-left">
                        <div class="categories-aside">
                            <ul class="categories-aside__menu">

                            <?php foreach ($categoryWithSubCategories as $category): ?>
                                <li class="categories-aside__item">
                            
                                    <a href="#" class="categories-aside__link"><?= htmlspecialchars($category['name'])  ?>
                                        <svg class="categories-aside__icon" width="10" height="7" viewBox="0 0 10 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.88712 0.854682L9.0178 0.0446038L5.03665 4.32819L1.0509 0.0403268L0.18245 0.849471L5.03818 6.0701L9.88712 0.854682Z" fill="#606060"></path>
                                        </svg>
                                    </a>
                                    <div class="categories-aside__dropdown">

                                    <?php if(!empty($category['subcategories'])):  ?>
                                        <ul class="categories-aside__submenu">

                                        <?php 

                                        $subs = $category['subcategories'];
                                        for($i = 0; $i < count($subs); $i+=2):

                                            $link = $subs[$i];
                                            $subname = $subs[$i+1];
                                        
                                        ?>
                                            <li class="categories-aside__subItem">
                                                <a href="/<?= htmlspecialchars($category['category_link']) ?>/<?= htmlspecialchars($link) ?>" class="categories-aside__sublink"><?= htmlspecialchars($subname) ?></a>
                                            </li>
                                            <?php endfor; ?>
                                        </ul>

                                        <?php endif; ?>
                                    </div>
                                </li>
                      
                                <?php endforeach; ?>
                            </ul>
                       
                        </div>
                    </div>
                
                    <div class="category-products">
                        <header class="category-products__header">

                        
                                <?php
                                    function pluralForm($n, $forms) {
                                        $n = abs($n) % 100;
                                        $n1 = $n % 10;

                                        if ($n > 10 && $n < 20) return $forms[2];
                                        if ($n1 > 1 && $n1 < 5) return $forms[1];
                                        if ($n1 == 1) return $forms[0];
                                        return $forms[2];
                                    }

                                    $word = pluralForm($total, ['товар', 'товара', 'товаров']);
                                ?>
           
                           <h2 class="category-products__header-title"><?= htmlspecialchars($subCategoryBySlug['name']) ?></h2>
                            <span class="category-products__total"><?= $total .' '.$word ?></span>

                        </header>
                        <ul class="category-products__list grid grid--4">
                            <?php foreach($subCategoryProducts as $product):  ?>
                            <li class="category-products__item">
                                <a href="/<?= htmlspecialchars($product['category_slug']) ?>/<?= htmlspecialchars($product['subcategory_slug']) ?>/<?= htmlspecialchars($product['product_slug']) ?>" class="category-products__link">
                                    <div class="category-products__image-wrapper">
                                        <img src="<?php echo Product::getImage($product['id']) ?>" width="155" height="165" alt="Product" loading="lazy" >
                                    </div>  
                                </a>
                           <strong class="products-category <?=  $product['subcategory_slug']; ?>"><?=  $product['subcategory_name'];  ?></strong>
                                 
                                <h2 class="category-products__title">
                                    <a href="/<?= htmlspecialchars($product['category_slug']) ?>/<?= htmlspecialchars($product['subcategory_slug']) ?>/<?= htmlspecialchars($product['product_slug']) ?>">
                                    <?= htmlspecialchars($product['name']) ?></a>
                                </h2>
                                <p class="category-products__price"><?= htmlspecialchars($product['price']) ?>тг. / 1л</p>
                                <a href="/<?= htmlspecialchars($product['category_slug']) ?>/<?= htmlspecialchars($product['subcategory_slug']) ?>/<?= htmlspecialchars($product['product_slug']) ?>" class="button category-products__button">Подробнее</a>
                                
                            </li>
                            <?php endforeach;  ?>
                        </ul>
                        <div class="pagination">

                             <?php echo $pagination->get(); ?>
                      
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>








<?php include ROOT . '/views/layouts/footer.php'; ?>




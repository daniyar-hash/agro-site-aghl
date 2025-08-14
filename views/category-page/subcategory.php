<?php include ROOT . '/views/layouts/header.php'; ?>
   <main class="content">
         <div class="breadcrumbs container">
            <div class="breadcrumbs__inner">
                <ul class="breadcrumbs__list">
                    <li class="breadcrumbs__item ">
                        <a href="/agro-site-main-page" class="breadcrumbs__link">Главная
                            <span class="visually-hidden">Стрелка навигации</span>
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8 4L12 10L8 16" stroke="#1D1D1D" stroke-width="4"/>
                            </svg>
                        </a>
                    </li>
                    <li class="breadcrumbs__item">
                        <a href="/<?= htmlspecialchars($categoryFromSubCategory['category_slug']) ?>" class="breadcrumbs__link">
                            <?= htmlspecialchars($categoryFromSubCategory['category_name']) ?>
                        <span class="visually-hidden">Стрелка навигации</span>
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 4L12 10L8 16" stroke="#1D1D1D" stroke-width="4"/>
                        </svg>
                        </a>
                    </li>
                    <li class="breadcrumbs__item is-current">
                        <a class="breadcrumbs__link"><?= htmlspecialchars($categoryFromSubCategory['sub_name']) ?></a>
                    </li>
                </ul>
            </div>
        </div>
        <section class="section category-page">
            <div class="category-page__inner container">
                <div class="category-page__title-and-count-wrapper">


                    <?php
                        function pluralForm($n, $forms) {
                            $n = abs($n) % 100; // 22%100  =  22
                            $n1 = $n % 10;  //22%10  = 2 

                            $total1 = 9;

                            if ($n > 10 && $n < 20) return $forms[2];
                            if ($n1 > 1 && $n1 < 5) return $forms[1];
                            if ($n1 == 1) return $forms[0];
                            return $forms[2];
                        }

                        $word = pluralForm($total, ['товар', 'товара', 'товаров']);
                    ?>
                    <h1 class="category-page__title h2"><?= htmlspecialchars($subCategoryBySlug['name']) ?></h1>
                    <span class="category-page__total-products h3"><?= $total .' '.$word ?></span>
                </div>
       
                <div class="category-page__body">
                  
                <div class="block-left">
                        <div class="categories-aside">
                            <ul class="categories-aside__menu">

                            <?php foreach ($categoryWithSubCategories as $category): ?>
                                <li class="categories-aside__item">
                            
                                    <a href="#" class="categories-aside__link"><?= htmlspecialchars($category['name'])  ?>
                                    <svg class="categories-aside__icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16 8L10 12L4 8" stroke="white" stroke-width="4"/>
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
                        <header class="sort-products subcategory-sort">
                       
                            <div class="category-products__sort-view">
                                <span class="category-products__sort-text">Вид:</span>
                                <button class="category-products_sort-button list"  aria-label="Вид каталога: плитка" type="button">
                                    <svg width="24" height="26" viewBox="0 0 24 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="24" height="6" fill="#1D1D1D"/>
                                    <rect y="10" width="24" height="6" fill="#1D1D1D"/>
                                    <rect y="20" width="24" height="6" fill="#1D1D1D"/>
                                    </svg>
                                </button>
                                <button class="category-products_sort-button bar " aria-label="Вид каталога: список" type="button">
                                    <svg width="24" height="26" viewBox="0 0 24 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="6" height="6" fill="white"/>
                                    <rect y="10" width="6" height="6" fill="white"/>
                                    <rect y="20" width="6" height="6" fill="white"/>
                                    <rect x="9" width="6" height="6" fill="white"/>
                                    <rect x="9" y="10" width="6" height="6" fill="white"/>
                                    <rect x="9" y="20" width="6" height="6" fill="white"/>
                                    <rect x="18" width="6" height="6" fill="white"/>
                                    <rect x="18" y="10" width="6" height="6" fill="white"/>
                                    <rect x="18" y="20" width="6" height="6" fill="white"/>
                                    </svg>
                                </button>
                            </div>
                        </header>
                       <ul class="category-products__list grid grid--3">
                            <?php foreach($categoryProducts as $product):  ?>
                            <li class="category-products__item">
                                <a href="/<?= htmlspecialchars($product['category_slug']) ?>/<?= htmlspecialchars($product['subcategory_slug']) ?>/<?= htmlspecialchars($product['product_slug']) ?>" class="category-products__link">
                                    <div class="category-products__image-wrapper">
                                        <img src="<?php echo Product::getImage($product['id']) ?>" width="260" height="260" alt="Product" loading="lazy" >
                                    </div>                                   
                                    <h2 class="category-products__title h4"><?= htmlspecialchars($product['name']) ?></h2>
                                    <p class="category-products__price"><?= htmlspecialchars($product['price']) ?>тнг.</p>
                                    <a href="<?= htmlspecialchars($product['subcategory_slug']) ?>/<?= htmlspecialchars($product['product_slug']) ?>" class="button category-products__button">Подробнее</a>
                                </a>
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


<?php echo "subcategory-page";?>
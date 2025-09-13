<?php include ROOT . '/views/layouts/main-header.php'; ?>
<?php include ROOT . '/views/site/search.php'; ?>


   <main class="content ">
        <section class="banner section">
            <div class="banner__inner ">
                <h1 class="visually-hidden">Агрохимикаты</h1>
                <div class="banner__body container">
                    <input type="radio" id="btn1" name="pagination__input"  value="number-1" checked>
                    <input type="radio" id="btn2" name="pagination__input"  value="number-2">
                    <input type="radio" id="btn3" name="pagination__input"  value="number-3">
                    <input type="radio" id="btn4" name="pagination__input"  value="number-4">


                    <ul class="banner__list slider">
                        <li class="banner__list-item banner--1 slider active">
                       
                                <h2 class="slider__title visually-hidden">First banner</h2>
                      
                        </li>
                        <li class="banner__list-item banner--2 slider">
                            
                            <h2 class="slider__title visually-hidden">Second banner</h2>
                            
                        </li>
                        <li class="banner__list-item banner--3 slider">
                             <h2 class="slider__title visually-hidden">Third banner</h2>
                        </li>
                        <li class="banner__list-item banner--4 slider">
                            <h2 class="slider__title visually-hidden">Foufth banner</h2>
                        </li>
                    </ul>



                     <div class="features">
                        <ul class="features__list">
                            <li class="features__item"><span class="features__number">14</span><span class="features__title">лет <br>на рынке</span></li>
                            <li class="features__item"><span  class="features__number">9</span><span class="features__title"><br>городов</span></li>
                            <li class="features__item"><span  class="features__number">50</span><span class="features__title">и более <br>позиций</span></li>

                        </ul>
                     </div>
                    <div class="banner__pagination pagination">
                        <ul class="pagination__list">
                            <li class="pagination__item ">
                                <label for="btn1"   class="pagination__label active" tabindex="0"
                                   onkeydown="if(event.key === 'Enter' || event.key === ' ') this.click()">
                                    <span class="pagination__icon visually-hidden">Кнопка сдайдер-1</span>
                                </label>
                            </li>
                            <li class="pagination__item ">
                               <label for="btn2"   class="pagination__label" tabindex="0"
                                   onkeydown="if(event.key === 'Enter' || event.key === ' ') this.click()">
                                    <span class="pagination__icon visually-hidden">Кнопка сдайдер-2</span>
                                </label>
                            </li>
                            <li class="pagination__item ">
                                <label for="btn3"   class="pagination__label" tabindex="0"
                                   onkeydown="if(event.key === 'Enter' || event.key === ' ') this.click()">
                                    <span class="pagination__icon visually-hidden">Кнопка сдайдер-3</span>
                                </label>
                            </li>
                            <li class="pagination__item ">
                               <label for="btn4"   class="pagination__label" tabindex="0"
                                   onkeydown="if(event.key === 'Enter' || event.key === ' ') this.click()">
                                    <span class="pagination__icon visually-hidden">Кнопка сдайдер-4</span>
                                </label>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class=" section products-season">
            <div class="section__inner container">
                 <header class="section__header">
                    <h2 class="section__title products-season__title h1">
                        Сезонные товары
                    </h2>
                 </header>
                 <div class="section__body background--green ">
                    <ul class="products-season__list grid grid--6">
                      <?php foreach($seasonProducts as $product) :  ?>
                        <li class="products-season__item" tabindex="0">
                            <a href="/<?= $product['category_slug'] ?>/<?= $product['sub_category_slug'] ?>/<?= $product['slug'] ?>"class="products-season__link" tabindex="0">
                            <img src="/template/category-page/img/category-products/1.jpg" alt="Product-season" class="products-season__image" width="172" height="165" loading="lazy">
                            </a>
                            <div class="products-season__info">
                                <strong class="products-season__subcategory <?=  $product['sub_category_slug']; ?>"><?=  $product['sub_category_name'];  ?></strong>
                                <h3 class="products-season__name"><?=  $product['name'];  ?></h3>
                                <small class="products-season__desc">Для борьбы с широким спектром злаковых и двудольных сорняков.</small>
                                <div class="products-season__wrapp-card">
                                    <span class="products-season__weight">1 кг.</span>
                                    <a href="https://wa.me/+77055774243?text=Здравствуйте%2C+у+меня+есть+вопрос"  class="products-season__send">
                                        <svg width="15" height="15" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.19938 1.0102L0.642456 6.56116L1.3098 7.22779L6.86673 1.67683L6.19938 1.0102Z" fill="#606060"/>
                                        <path d="M6.99146 5.71067L6.15622 5.68121L6.30663 1.57077L2.19179 1.72102L2.16229 0.886682L7.17373 0.7052L6.99146 5.71067Z" fill="#606060"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </li>
                      <?php  endforeach;  ?>
                    </ul>
                 </div>
            </div>
        </section>
        <section class="section section--category">
            <div class="section__inner container">
                 <header class="section__header">
                    <h2 class="section__title products__title h1">
                      Категории товаров
                    </h2>
                 </header>
                 <div class="section__body category">
                    <ul class="category__list">
                      <?php  foreach($categoryWithSubCategories as $item):  ?> 

                        <li class="category__item">
                            <div href="/" class="category__info">
                                <h3 class="category__info-title">
                                    <a href="/<?= $item['category_link']; ?>" class="category__info-title-link"><?= $item['name']; ?></a>
                                    <a href="" class="category__info-icon">
                                        <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14 0C6.26827 0 0 6.26827 0 14C0 21.7317 6.26827 28 14 28C21.7317 28 28 21.7317 28 14C28 6.26827 21.7317 0 14 0ZM15.0285 18.9501L14.2026 18.0639L17.8398 14.6836H7.64781V13.3154H17.8377L14.2026 9.93611L15.0285 9.04985L20.3522 14L15.0285 18.9491V18.9501Z" fill="white"/>
                                        </svg>
                                    </a>
                                </h3>
                                <ul class="category__info-list">

                                   <?php  for($i=0; $i<count($item['subcategories']); $i++):
                                    
                                    $arr = $item['subcategories']; 
                                    $subCategoryLink = $arr[$i++];
                                    $subCategoryName = $arr[$i];
                                   
                                    ?>

                                    <li class="category__info-item">
                                        <a href="<?= $item['category_link']; ?>/<?= $subCategoryLink; ?>" class="category__info-link"><?= $subCategoryName; ?></a>
                                    
                                    </li>
                        
                                    <?php  endfor; ?>

                                </ul>

                            </div>
                        </li>

                        <?php  endforeach; ?>
             
                    </ul>
                 </div>
            </div>
        </section>
    
        <section class="section">
            <div class="section__inner container">
                <header class="section__header section--about-us">
                    <h2 class="section__title visually-hidden">Преимущества</h2>
                </header>
                <div class="section__body about-us">
                        <div class="about-us__column">
                            <h3 class="about-us__column-title">Компания Агро-Хим-Лидер <br>
                                основана в 2011 г. Занимается <br>
                                продажами средств защиты <br>
                                растений и удобрений. 
                             </h3>
                            <div class="about-us__column-desc">
                                “Мы помогаем фермерам повышать
                                урожайность и продуктивность
                                сельскохозяйственных культур.” 
                            </div>
                        </div>
                        <div class="about-us__column">
                            <h3 class="about-us__column-title">
                                Приоритеты <br>
                                при работе с клиентом:
                             </h3>
                            <div class="about-us__column-desc">
                                <ul class="about-us__column-list">
                                    <li>Предоставление качественной продукции.</li>
                                    <li>Экспертность при выборе решения. </li>
                                    <li>И финансовая доступность.</li>
                                </ul>
                               
                            </div>
                        </div>
                </div>
            </div>
        </section>
        <section class="section">
            <div class="section__inner container">
                <header class="section__header">
                    <h2 class="section__title">Отзывы</h2>
                </header>
                <div class="section__body">
                    <div class="reviews">
                        <ul class="reviews__list">
                            <li class="reviews__item">
                                <div class="reviews__item-header">
                                    <div class="reviews__avatar">
                                        <img src="../../template/main-page/img/reviews/avatar.jpg" alt="avatar" class="reviews__avatar-image" width="70" height="70">
                                    </div>
                                    <h3 class="reviews__person">Имя Фамилия</h3>
                                </div>
                                <div class="reviews__body">
                           
                                    <div class="reviews__description">
                                        <p>"Работаем с ТОО «АгроХим Лидер» 
                                        уже второй год, и результаты поражают! Их средства защиты растений действительно эффективны. Урожайность выросла, а расходы снизились благодаря качественным 
                                        и доступным продуктам."
                                        </p>
                                    </div>
                                    <time datetime="2020-02-12">12 февраля 2025 года</time>
                                </div>
                            </li>
                            <li class="reviews__item">
                                <div class="reviews__item-header">
                                    <div class="reviews__avatar">
                                        <img src="../../template/main-page/img/reviews/avatar.jpg" alt="avatar" class="reviews__avatar-image" width="70" height="70">
                                    </div>
                                    <h3 class="reviews__person">Имя Фамилия</h3>
                                </div>
                                <div class="reviews__body">
                           
                                    <div class="reviews__description">
                                        <p>"Работаем с ТОО «АгроХим Лидер» 
                                        уже второй год, и результаты поражают! Их средства защиты растений действительно эффективны. Урожайность выросла, а расходы снизились благодаря качественным 
                                        и доступным продуктам."
                                        </p>
                                    </div>
                                    <time datetime="2020-02-12">12 февраля 2025 года</time>
                                </div>
                            </li>
                            <li class="reviews__item">
                                <div class="reviews__item-header">
                                    <div class="reviews__avatar">
                                        <img src="../../template/main-page/img/reviews/avatar.jpg" alt="avatar" class="reviews__avatar-image" width="70" height="70">
                                    </div>
                                    <h3 class="reviews__person">Имя Фамилия</h3>
                                </div>
                                <div class="reviews__body">
                           
                                    <div class="reviews__description">
                                        <p>"Работаем с ТОО «АгроХим Лидер» 
                                        уже второй год, и результаты поражают! Их средства защиты растений действительно эффективны. Урожайность выросла, а расходы снизились благодаря качественным 
                                        и доступным продуктам."
                                        </p>
                                    </div>
                                    <time datetime="2020-02-12">12 февраля 2025 года</time>
                                </div>
                            </li>
                            <li class="reviews__item">
                                <div class="reviews__item-header">
                                    <div class="reviews__avatar">
                                        <img src="../../template/main-page/img/reviews/avatar.jpg" alt="avatar" class="reviews__avatar-image" width="70" height="70">
                                    </div>
                                    <h3 class="reviews__person">Имя Фамилия</h3>
                                </div>
                                <div class="reviews__body">
                           
                                    <div class="reviews__description">
                                        <p>"Работаем с ТОО «АгроХим Лидер» 
                                        уже второй год, и результаты поражают! Их средства защиты растений действительно эффективны. Урожайность выросла, а расходы снизились благодаря качественным 
                                        и доступным продуктам."
                                        </p>
                                    </div>
                                    <time datetime="2020-02-12">12 февраля 2025 года</time>
                                </div>
                            </li>
                            <li class="reviews__item">
                                <div class="reviews__item-header">
                                    <div class="reviews__avatar">
                                        <img src="../../template/main-page/img/reviews/avatar.jpg" alt="avatar" class="reviews__avatar-image" width="70" height="70">
                                    </div>
                                    <h3 class="reviews__person">Имя Фамилия</h3>
                                </div>
                                <div class="reviews__body">
                           
                                    <div class="reviews__description">
                                        <p>"Работаем с ТОО «АгроХим Лидер» 
                                        уже второй год, и результаты поражают! Их средства защиты растений действительно эффективны. Урожайность выросла, а расходы снизились благодаря качественным 
                                        и доступным продуктам."
                                        </p>
                                    </div>
                                    <time datetime="2020-02-12">12 февраля 2025 года</time>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </section>
   
    </main>

<?php include ROOT . '/views/layouts/main-footer.php'; ?>
<?php include ROOT . '/views/layouts/header.php'; ?>

   <main class="content ">
        <section class="banner section">
            <div class="banner__inner ">
                <h1 class="visually-hidden">Агрохимикаты</h1>
                <div class="banner__body">
                    <input type="radio" id="btn1" name="pagination__input"  value="number-1" checked>
                    <input type="radio" id="btn2" name="pagination__input"  value="number-2">
                    <input type="radio" id="btn3" name="pagination__input"  value="number-3">
                    <input type="radio" id="btn4" name="pagination__input"  value="number-4">


                    <ul class="banner__list slider">
                        <li class="banner__list-item banner--1 slider active">
                            <div class="container">
                                <h2 class="slider__title visually-hidden">First banner</h2>
                                <a class="slider__button button button-medium" href="/agro-site-catalog-page" >ПЕРЕЙТИ В КАТАЛОГ</a>
                            </div>
                        </li>
                        <li class="banner__list-item banner--2 slider">
                            <div class="container">
                                <h2 class="slider__title visually-hidden">Second banner</h2>
                                <a class="slider__button button button-medium" href="/agro-site-catalog-page" >ПЕРЕЙТИ В КАТАЛОГ</a>
                            </div>
                        </li>
                        <li class="banner__list-item banner--3 slider">
                            <div class="container">
                                <h2 class="slider__title visually-hidden">Third banner</h2>
                                <a class="slider__button button button-medium" href="/agro-site-catalog-page" >ПЕРЕЙТИ В КАТАЛОГ</a>
                            </div>
                        </li>
                         <li class="banner__list-item banner--4 slider">
                            <div class="container">
                                <h2 class="slider__title visually-hidden">Foufth banner</h2>
                                <a class="slider__button button button-medium" href="/agro-site-catalog-page" >ПЕРЕЙТИ В КАТАЛОГ</a>
                            </div>
                        </li>
                    </ul>

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
        <section class=" section products">
            <div class="section__inner container">
                 <header class="section__header">
                    <h2 class="section__title products__title">
                        Сезонные товары
                    </h2>
                    <div class="section__description products__description ">
                        <p>
                       
                        </p>
                    </div>
                 </header>
                 <div class="section__body">
                    <ul class="products__images-list grid grid--6">
                        <li class="products__images-item" tabindex="0">
                            <a href="#"class="products__images-link" tabindex="0">
                                <img src="../../template/main-page/img/products/1.jpg" alt="Products for auto" class="products__images-image" width="250" height="290" loading="lazy">
                                <div class="products__images-hover">
                                    <h3 class="products__images-title h4">Аккумуляторы</h3>
                                    <button class="products__images-button button button-medium">Заказать онлайн</button>
                                    <button class="products__images-button button button-medium open-modal-video">Отзыв о товаре</button>
                                </div>    
                            </a>
                        </li>
                        <li class="products__images-item">
                            <a href="#" class="products__images-link">
                                <img src="../../template/main-page/img/products/2.jpg" alt="Products for auto" class="products__images-image" width="250" height="290" loading="lazy">
                                <div class="products__images-hover">
                                    <h3 class="products__images-title h4">Автомасла</h3>
                                    <button class="button products__images-button button-medium">Заказать онлайн</button>
                                </div>  
                            </a>
                        </li>
                        <li class="products__images-item">
                            <a href="#" class="products__images-link">
                                <img src="../../template/main-page/img/products/3.jpg" alt="Products for auto" class="products__images-image" width="250" height="290" loading="lazy">
                                 <div class="products__images-hover">
                                    <h3 class="products__images-title h4">Автокосметика</h3>
                                    <button class="button products__images-button button-medium">Заказать онлайн</button>
                                </div> 
                            </a>
                        </li>
                        <li class="products__images-item">
                            <a href="#" class="products__images-link">
                                <img src="../../template/main-page/img/products/4.jpg" alt="Products for auto" class="products__images-image" width="250" height="290" loading="lazy">
                                 <div class="products__images-hover">
                                    <h3 class="products__images-title h4">Автоаксессуары</h3>
                                    <button class="button products__images-button button-medium">Заказать онлайн</button>
                                </div> 
                            </a>
                        </li>
                        <li class="products__images-item">
                            <a href="#" class="products__images-link">
                                <img src="../../template/main-page/img/products/5.jpg" alt="Products for auto" class="products__images-image" width="250" height="290" loading="lazy">
                                 <div class="products__images-hover">
                                    <h3 class="products__images-title h4">Автохимия</h3>
                                    <button class="button products__images-button button-medium">Заказать онлайн</button>
                                </div> 
                            </a>
                        </li>
                        <li class="products__images-item">
                            <a href="#" class="products__images-link">
                                <img src="../../template/main-page/img/products/6.jpg" alt="Products for auto" class="products__images-image" width="250" height="290" loading="lazy">
                                <div class="products__images-hover">
                                    <h3 class="products__images-title h4">Расходники</h3>
                                    <button class="button products__images-button button-medium">Заказать онлайн</button>
                                </div> 
                            </a>
                        </li>
                      
                    </ul>
                 </div>
            </div>
        </section>
        <section class=" section">
            <div class="section__inner container">
                 <header class="section__header">
                    <h2 class="section__title products__title">
                      Категории товаров
                    </h2>
                 </header>
                 <div class="section__body categories">
                    <ul class="categories__list">
                        <li class="categories__item">
                            <div href="/" class="category">
                                <h3 class="category__title"><a href="/agro-site-category-page/" class="category__title-link">Пестициды</a></h3>
                                <ul class="category__list">
                                    <li class="category__item">
                                        <a href="/" class="category__link">Фунгициды</a>
                                    
                                    </li>
                                     <li class="category__item">
                                        <a href="/" class="category__link">Инсектициды</a>
                                    
                                    </li>
                                     <li class="category__item">
                                        <a href="/" class="category__link">Акарициды</a>
                                    
                                    </li>

                                </ul>

                            </div>
                        </li>
                        <li class="categories__item">
                            <div href="/" class="category">
                                <h3 class="category__title">
                                    <a href="/" class="category__title-link">Удобрения</a>
                                </h3>
                                <ul class="category__list">
                                    <li class="category__item">
                                        <a href="/" class="category__link">Регуляторы роста</a>
                                    
                                    </li>
                                     <li class="category__item">
                                        <a href="/" class="category__link">Стимуляторы роста</a>
                                    
                                    </li>
                       
                                </ul>

                            </div>
                            
                        </li>
                        <li class="categories__item">
                            <div href="/" class="category">
                                <h3 class="category__title"><a href="/" class="category__title-link" >Семена</a></h3>
                                <ul class="category__list">
                                    <li class="category__item">
                                        <a href="/" class="category__link">текст</a>
                                    
                                    </li>
                                     <li class="category__item">
                                        <a href="/" class="category__link">текст</a>
                                    
                                    </li>
                                     <li class="category__item">
                                        <a href="/" class="category__link">текст</a>
                                    
                                    </li>

                                </ul>

                            </div>
                        </li>
                    </ul>
                 </div>
            </div>
        </section>
    
        <section class="section">
            <div class="section__inner container">
                <header class="section__header">
                    <h2 class="section__title">О компании</h2>
                </header>
                <div class="section__body">
                    <div class="about-us">
                        <div class="about-us__image-wrapper">
                                <svg class="mask preserve-fill width="200" height="200" viewBox="0 0 360 347"
                                fill="none" xmlns="http://www.w3.org/2000/svg"
                                >
                                <!-- ClipPath внутри <defs> -->
                                <defs>
                                <clipPath id="about-us">
                                    <path d="M358 2V254.317L267.256 345H2V92.6816L92.7441 2H358Z" />
                                </clipPath>
                                </defs>
                                <image
                                    href="../../template/main-page/img/about-us/about-us.png" 
                                    width="360" 
                                    height="347"
                                    clip-path="url(#about-us)" 
                                    preserveAspectRatio="xMidYMid slice"
                                    
                                />
                                <!-- Контур (красная рамка) -->
                                <path d="M358 2V254.317L267.256 345H2V92.6816L92.7441 2H358Z"
                                    stroke="#C53720"
                                    stroke-width="4"
                                    fill="none" />
                            </svg>
                         </div>
                        <div class="about-us__info">
                            <p class="about-us__paragraph">Машина плохо заводится? Аккумулятор вас подводит? Не проблема! Вам в 
                            «PRO Auto»! Мы подберём хороший, надёжный, а главное недорогой аккумулятор именно для вашего авто! С 1997 года сеть магазинов «PRO Auto» занимается продажей автомобильных аккумуляторов, масел, расходных материалов, химией 
                            и аксессуаров.</p>
                            <a href="/" class="button about-us__button button-medium">Узнать больше</a>
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
                                <div class="reviews__avatar">
                                    <img src="../../template/main-page/img/reviews/avatar.jpg" alt="avatar" class="reviews__avatar-image" width="150" height="150">
                                </div>
                                <div class="reviews__body">
                                    <h3 class="reviews__person">Имя Фамилия</h3>
                                    <div class="reviews__description">
                                        <p>"Работаем с ТОО «АгроХим Лидер» уже второй год, и
                                             результаты поражают! Их средства защиты растений действительно эффективны. 
                                             Урожайность выросла, а расходы снизились благодаря качественным и доступным продуктам."</p>
                                    </div>
                                    <time datetime="2020-02-12">12 февраля 2025 года</time>
                                </div>
                            </li>
                            <li class="reviews__item">
                                <div class="reviews__avatar">
                                    <img src="../../template/main-page/img/reviews/avatar.jpg" alt="avatar" class="reviews__avatar-image" width="150" height="150">
                                </div>
                                <div class="reviews__body">
                                    <h3 class="reviews__person">Имя Фамилия</h3>
                                    <div class="reviews__description">
                                        <p>"Работаем с ТОО «АгроХим Лидер» уже второй год, и
                                             результаты поражают! Их средства защиты растений действительно эффективны. 
                                             Урожайность выросла, а расходы снизились благодаря качественным и доступным продуктам."</p>
                                    </div>
                                    <time datetime="2020-02-12">12 февраля 2025 года</time>
                                </div>
                            </li>
                            <li class="reviews__item">
                                <div class="reviews__avatar">
                                    <img src="../../template/main-page/img/reviews/avatar.jpg" alt="avatar" class="reviews__avatar-image" width="150" height="150">
                                </div>
                                <div class="reviews__body">
                                    <h3 class="reviews__person">Имя Фамилия</h3>
                                    <div class="reviews__description">
                                        <p>"Работаем с ТОО «АгроХим Лидер» уже второй год, и
                                             результаты поражают! Их средства защиты растений действительно эффективны. 
                                             Урожайность выросла, а расходы снизились благодаря качественным и доступным продуктам."</p>
                                    </div>
                                    <time datetime="2020-02-12">12 февраля 2025 года</time>
                                </div>
                            </li>
                            <li class="reviews__item">
                                <div class="reviews__avatar">
                                    <img src="../../template/main-page/img/reviews/avatar.jpg" alt="avatar" class="reviews__avatar-image" width="150" height="150">
                                </div>
                                <div class="reviews__body">
                                    <h3 class="reviews__person">Имя Фамилия</h3>
                                    <div class="reviews__description">
                                        <p>"Работаем с ТОО «АгроХим Лидер» уже второй год, и
                                             результаты поражают! Их средства защиты растений действительно эффективны. 
                                             Урожайность выросла, а расходы снизились благодаря качественным и доступным продуктам."</p>
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

<?php include ROOT . '/views/layouts/footer.php'; ?>
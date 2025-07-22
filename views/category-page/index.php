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
                        <a href="/agro-site-catalog-page"  class="breadcrumbs__link">Каталог
                            <span class="visually-hidden">Стрелка навигации</span>
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8 4L12 10L8 16" stroke="#1D1D1D" stroke-width="4"/>
                            </svg>
                        </a>
                    </li>
                        <li class="breadcrumbs__item is-current">
                        <a class="breadcrumbs__link">Пестициды</a>
                    </li>
                </ul>
            </div>
        </div>
        <section class="section category-page">
            <div class="category-page__inner container">
                <h1 class="category-page__title h2">Пестициды</h1>
                <div class="category-page__body">
                    <div class="block-left">
                        <div class="categories-aside">
                            <ul class="categories-aside__menu">
                                <li class="categories-aside__item">
                                    <a href="#" class="categories-aside__link">Пестициды
                                    <svg class="categories-aside__icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16 8L10 12L4 8" stroke="white" stroke-width="4"/>
                                    </svg>
                                    </a>
                                    <div class="categories-aside__dropdown">
                                        <ul class="categories-aside__submenu">
                                            <li class="categories-aside__subItem">
                                                <a href="/agro-product-page" class="categories-aside__sublink">Фунгициды</a>
                                            </li>
                                            <li class="categories-aside__subItem">
                                                <a href="#" class="categories-aside__sublink">Гербициды</a>
                                            </li>
                                            <li class="categories-aside__subItem">
                                                <a href="#" class="categories-aside__sublink">Акарициды</a>
                                            </li>
                                            <li class="categories-aside__subItem">
                                                <a href="#" class="categories-aside__sublink">Инсектициды</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="categories-aside__item">
                                    <a href="#" class="categories-aside__link">Удобрения
                                        <svg class="categories-aside__icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16 8L10 12L4 8" stroke="white" stroke-width="4"/>
                                        </svg>
                                    </a>                                
                                    <div class="categories-aside__dropdown">
                                    <ul class="categories-aside__submenu">
                                        <li class="categories-aside__subItem">
                                            <a href="/agro-product-page" class="categories-aside__sublink">Стимуляторы роста</a>
                                        </li>
                                        <li class="categories-aside__subItem">
                                            <a href="#" class="categories-aside__sublink">Регуляторы роста</a>
                                        </li>
                                    </ul>
                                    </div>
                                </li>
                                <li class="categories-aside__item">
                                    <a href="#" class="categories-aside__link">Прочее
                                    <svg class="categories-aside__icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16 8L10 12L4 8" stroke="white" stroke-width="4"/>
                                    </svg>
                                    </a>
                                    <div class="categories-aside__dropdown">
                                        <ul class="categories-aside__submenu">
                                            <li class="categories-aside__subItem">
                                                <a href="/agro-product-page" class="categories-aside__sublink">Текст</a>
                                            </li>
                                            <li class="categories-aside__subItem">
                                                <a href="#" class="categories-aside__sublink">Текст</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                
                    <div class="category-products">
                        <header class="sort-products">
                            <ul class="sort-products__list">
                                <li class="sort-products__item">
                                    <a href="" class="sort-products__link">
                                        <span class="sort-products__title h4">Гербициды</span>
                                    </a>
                                </li>
                                <li class="sort-products__item">
                                    <a href="" class="sort-products__link">
                                        <span class="sort-products__title h4">Акарициды</span>
                                    </a>
                                </li>
                                <li class="sort-products__item">
                                    <a href="" class="sort-products__link">
                                        <span class="sort-products__title h4">Фунгициды</span>
                                    </a>
                                </li>
                                <li class="sort-products__item">
                                    <a href="" class="sort-products__link">
                                        <span class="sort-products__title h4">Инсектициды</span>
                                    </a>
                                </li>
                                <li class="sort-products__item">
                                    <a href="" class="sort-products__link">
                                        <span class="sort-products__title h4">Протравители</span>
                                    </a>
                                </li>
                            </ul>
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
                            <li class="category-products__item">
                                <a href="#" class="category-products__link">
                                    <div class="category-products__image-wrapper">
                                        <img src="../../template/category-page/img/category-products/1.jpg" width="260" height="260" alt="Product" loading="lazy" >
                                    </div>                                   
                                    <h2 class="category-products__title h4">Product-1</h2>
                                    <p class="category-products__price">1200 тнг.</p>
                                    <a href="/agro-product-page" class="button category-products__button">Подробнее</a>
                                </a>
                            </li>
                              <li class="category-products__item">
                                <a href="#" class="category-products__link">
                                    <div class="category-products__image-wrapper">
                                        <img src="../../template/category-page/img/category-products/1.jpg" width="260" height="260" alt="Product" loading="lazy" >
                                    </div> 
                                    <h2 class="category-products__title h4">Product-1</h2>
                                    <p class="category-products__price">1200 тнг.</p>
                                    <a href="/agro-product-page" class="button category-products__button">Подробнее</a>
                                </a>
                            </li>
                              <li class="category-products__item">
                                <a href="#" class="category-products__link">
                                    <div class="category-products__image-wrapper">
                                        <img src="../../template/category-page/img/category-products/1.jpg" width="260" height="260" alt="Product" loading="lazy" >
                                    </div> 
                                    <h2 class="category-products__title h4">Product-1</h2>
                                    <p class="category-products__price">1200 тнг.</p>
                                    <a href="/agro-product-page" class="button category-products__button">Подробнее</a>
                                </a>
                            </li>
                              <li class="category-products__item">
                                <a href="#" class="category-products__link">
                                    <div class="category-products__image-wrapper">
                                        <img src="../../template/category-page/img/category-products/1.jpg" width="260" height="260" alt="Product" loading="lazy" >
                                    </div> 
                                    <h2 class="category-products__title h4">Product-1</h2>
                                    <p class="category-products__price">1200 тнг.</p>
                                    <a href="/agro-product-page" class="button category-products__button">Подробнее</a>
                                </a>
                            </li>
                              <li class="category-products__item">
                                <a href="#" class="category-products__link">
                                    <div class="category-products__image-wrapper">
                                        <img src="../../template/category-page/img/category-products/1.jpg" width="260" height="260" alt="Product" loading="lazy" >
                                    </div> 
                                    <h2 class="category-products__title h4">Product-1</h2>
                                    <p class="category-products__price">1200 тнг.</p>
                                    <a href="/agro-product-page" class="button category-products__button">Подробнее</a>
                                </a>
                            </li>
                              <li class="category-products__item">
                                <a href="#" class="category-products__link">
                                    <div class="category-products__image-wrapper">
                                        <img src="../../template/category-page/img/category-products/1.jpg" width="260" height="260" alt="Product" loading="lazy" >
                                    </div> 
                                    <h2 class="category-products__title h4">Product-1</h2>
                                    <p class="category-products__price">1200 тнг.</p>
                                    <a href="/agro-product-page" class="button category-products__button">Подробнее</a>
                                </a>
                            </li>
                        </ul>
                        <div class="pagination">
                            <div class="pagination__inner">
                                <button class="pagination__button btn-back">
                                    <span class="visually-hidden">Preview page</span>     
                                    <svg  viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15 18L9 12L15 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                                <ul class="pagination__list">
                                    <li class="pagination__item is-current">
                                        <a href="" class="pagination__link ">1</a>
                                    </li>
                                    <li class="pagination__item ">
                                        <a href="#" class="pagination__link">2</a>
                                    </li>
                                    <li class="pagination__item ">
                                        <a href="#" class="pagination__link">3</a>
                                    </li>
                                </ul>
                                <button class="pagination__button btn-next">
                                    <span class="visually-hidden">Next page</span>     
                                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 18L15 12L9 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>








<?php include ROOT . '/views/layouts/footer.php'; ?>
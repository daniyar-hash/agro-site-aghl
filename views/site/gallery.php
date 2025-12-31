<?php

$title = 'Галерея';

include ROOT . '/views/layouts/header.php'; ?>
   <main class="content">
         <div class="breadcrumbs container">
             <div class="breadcrumbs__inner">
                <ul class="breadcrumbs__list">
                    <li class="breadcrumbs__item ">
                        <a href="/" class="breadcrumbs__link">Главная&nbsp/&nbsp</a>
                    </li>
                    <li class="breadcrumbs__item is-current">
                        <a class="breadcrumbs__link">Галерея</a>
                    </li>
                </ul>
            </div>

        </div>
        <section class="company container">
            <div class="company__inner ">
                <div class="company-info">
                    <h1 class="company-info__title title--page">Галерея</h1>
                    <div class="company-info__gallery grid grid--4">
                        <img src="/template/about/img/1.webp" alt="About Company photo" width="127" height="150" loading="lazy">
                        <img src="/template/about/img/2.webp" alt="About Company photo" width="127" height="150" loading="lazy">
                        <img src="/template/about/img/3.webp" alt="About Company photo" width="127" height="150" loading="lazy">
                        <img src="/template/about/img/4.webp" alt="About Company photo" width="127" height="150" loading="lazy">
                        <img src="/template/about/img/5.webp" alt="About Company photo" width="127" height="150" loading="lazy">
                        <img src="/template/about/img/6.webp" alt="About Company photo" width="127" height="150" loading="lazy">
                        <img src="/template/about/img/7.webp" alt="About Company photo" width="127" height="150" loading="lazy">
                        <img src="/template/about/img/8.webp" alt="About Company photo" width="127" height="150" loading="lazy">
                    </div>
                </div>
                <div class="company-menu">
                    <h2 class="company-menu__title h4">Меню</h2>
                    <ul class="company-menu__list">
                        <li>Выставка AgriTek / FarmTek, г. Астана.</li>
                        <li>Выставка AgriTek / FarmTek, г. Астана.</li>
                        <li>Выставка AgriTek / FarmTek, г. Астана.</li>
                    </ul>
                </div>

            </div>
    
        </section>
    </main>


<?php include ROOT . '/views/layouts/footer.php'; ?>
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
                    <li class="breadcrumbs__item">
                        <a href="#" class="breadcrumbs__link">Пестициды
                        <span class="visually-hidden">Стрелка навигации</span>
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 4L12 10L8 16" stroke="#1D1D1D" stroke-width="4"/>
                        </svg>
                        </a>
                    </li>
                    <li class="breadcrumbs__item is-current">
                        <a class="breadcrumbs__link">Бенагро</a>
                    </li>
                </ul>
            </div>
        </div>
        <section class="section product-page">
            <div class="product-page__inner container">
                <h1 class="product-page__title visually-hidden">Бенагро</h1>
                <div class="product-page__body product">
                    <div class="product__image-wrapper">
                        <img class="product__image" id="product-image" src="../../template/product/img/product/1.png" alt="product photo" loading="lazy" width="500" height="500">
                    </div>
                    <div class="product__info">
                        <h2 class="product__info-title h3">Бенагро</h2>
                        <p class="product__info-price">1200 тнг.</p>
                        <p class="product__info-manufacturer">Производитель:<strong>Syngenta</strong></p>
                        <a href="#" class="product__info-button button">Заказать</a>
                    </div>
                </div>
                <div class="product-page__decription description">
                    <h2 class="descrition__title h3">Описание</h2>
                    <div class="decription__property">
                        <ul class="description__property-list">
                            <li class="description__property-item">
                                <span class="decription__property-text"><strong>Действующее вещество, концентрация (г/л):</strong></span>
                                <span class="decription__property-text"> Бентазон – 480 г/л.</span>
                            </li>
                            <li class="description__property-item">
                                <span class="decription__property-text"><strong> Препаративная форма:</strong></span>
                                <span class="decription__property-text"> Водный раствор.</span>
                            </li>
                        </ul>
                    </div>
                    <div class="description__detail">
                        <p>
                            Гербицид для защиты сельскохозяйственных культур от одно
                            летних двудольных сорняков. Обладает выраженным контакт
                            ным действием и поглощается преимущественно зелеными 
                            частями растений.
                            Действующее вещество прерывает реакцию фотосинтеза. 
                            Отмирание сорняков проявляется через 3-5 суток.
                        </p>
                    </div>
                    <div class="description__table-wrapper">
                        <table>
                            <caption>Регламенты применения</caption>
                            <thead>
                                <tr>
                                <th>Культура, обрабатываемый объект</th>
                                <th>Норма расхода <br> л/га</th> 
                                <th>Вредный объект</th>
                                <th>Способ, время обработки, ограничения</th>
                                <th>Срок последней обработки, в днях до сбора урожая (максимальная кратность обработки)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr><td>Зерновые злаковые с подсевом люцерны</td>
                                    <td>2,0</td>
                                    <td>Однолетние двудольные, в том числе устойчивые к 2,4 Д и 2М–4Х</td>
                                    <td>Опрыскивание посевов в фазе 1–2 настоящих листьев люцерны (в фазе кущения зерновых). Расход рабочей жидкости 200–300 л/га</td>
                                    <td>-1</td>
                                </tr>
                                <tr>
                                    <td>Кукуруза</td>
                                    <td>2,0–4,0</td>
                                    <td>Однолетние двудольные, в том числе устойчивые к 2,4 Д и 2М–4Х</td>
                                    <td>Опрыскивание посевов в фазе 3–5 настоящих листьев. Расход рабочей жидкости 200–300 л/га</td>
                                    <td>-1</td>
                                </tr>
                                   <tr>
                                    <td>Лен</td>
                                    <td>2,0–4,0</td>
                                    <td>Однолетние двудольные, в том числе устойчивые к 2,4 Д и 2М–4Х</td>
                                    <td>Опрыскивание посевов в фазе «ёлочки» при высоте культуры 3–10 см. Расход рабочей жидкости 200–300 л/га</td>
                                    <td>-1</td>
                                </tr>
                                   <tr>
                                    <td>Рис</td>
                                    <td>2,0</td>
                                    <td>Клубнекамыш, усак, ситняк, монокория, виды ротала, частуха</td>
                                    <td>Опрыскивание посевов в фазе 3–4 листьев – кущение культуры. Расход рабочей жидкости 200–300 л/га</td>
                                    <td>-1</td>
                                </tr>
                                <tr>
                                    <td>Соя</td>
                                    <td>1,5–3,0</td>
                                    <td>Однолетние двудольные, в том числе дурнишник </td>
                                    <td>Опрыскивание посевов в фазе 1–3 настоящих листьев культуры. Расход рабочей жидкости 200–300 л/га </td>
                                    <td>-1</td>
                                </tr>
                                <tr>
                                    <td>Люцерна 1-го года вегетации (семенные посевы)</td>
                                    <td>2,0</td>
                                    <td>Однолетние двудольные</td>
                                    <td>Опрыскивание посевов в фазе 1–2 настоящих листьев культуры. Расход рабочей жидкости 200–300 л/га</td>
                                    <td>-1</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php include ROOT . '/views/layouts/footer.php'; ?>

<?php echo "product page";


?>


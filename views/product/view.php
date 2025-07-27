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
                        <a href="/agro-site-catalog-page"  class="breadcrumbs__link"><?= $categoryProduct['name'] ?>
                            <span class="visually-hidden">Стрелка навигации</span>
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8 4L12 10L8 16" stroke="#1D1D1D" stroke-width="4"/>
                            </svg>
                        </a>
                    </li>
                    <li class="breadcrumbs__item">
                        <a href="#" class="breadcrumbs__link"><?= $subCategoryProduct['name'] ?>
                        <span class="visually-hidden">Стрелка навигации</span>
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 4L12 10L8 16" stroke="#1D1D1D" stroke-width="4"/>
                        </svg>
                        </a>
                    </li>
                    <li class="breadcrumbs__item is-current">
                        <a class="breadcrumbs__link"><?= $product['name'] ?></a>
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
                        <h2 class="product__info-title h3"><?= $product['name'] ?></h2>
                        <p class="product__info-price"><?= $product['price'] ?> тнг.</p>
                        <p class="product__info-manufacturer">Производитель:<strong><?= $product['brand'] ?></strong></p>
                        <a href="#" class="product__info-button button">Заказать</a>
                    </div>
                </div>
                <div class="product-page__decription description">
                    <h2 class="descrition__title h3">Описание</h2>
                    <div class="decription__property">
                        <ul class="description__property-list">
                            <li class="description__property-item">
                                <span class="decription__property-text"><strong>Действующее вещество, концентрация (г/л):</strong></span>
                                <span class="decription__property-text"><?= $product['concentration'] ?></span>
                            </li>
                            <li class="description__property-item">
                                <span class="decription__property-text"><strong> Препаративная форма:</strong></span>
                                <span class="decription__property-text"><?= $product['dosage_form'] ?></span>
                            </li>
                        </ul>
                    </div>
                    <div class="description__detail">
                        <p><?= $product['description']?></p>
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
                            <?php foreach ($productTable as $productRow): ?>
                                <tr><td><?= $productRow['agricultural_crop'] ?></td>
                                    <td><?= $productRow['сonsumption_rate'] ?></td>
                                    <td><?= $productRow['harmful_object'] ?></td>
                                    <td><?= $productRow['limitations'] ?></td>
                                    <td><?= $productRow['treatment_period'] ?></td>
                                </tr>
                                <?php endforeach; ?>
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


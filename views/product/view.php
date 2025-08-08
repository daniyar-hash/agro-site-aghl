<?php include ROOT . '/views/layouts/header.php'; ?>

    <main class="content">
        <div class="breadcrumbs container">
            <div class="breadcrumbs__inner">
                <ul class="breadcrumbs__list">
                    <li class="breadcrumbs__item ">
                        <a href="/" class="breadcrumbs__link">Главная
                            <span class="visually-hidden">Стрелка навигации</span>
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8 4L12 10L8 16" stroke="#1D1D1D" stroke-width="4"/>
                            </svg>
                        </a>
                    </li>
                     <li class="breadcrumbs__item">
                        <a href="/<?= htmlspecialchars($categoryProduct['slug']) ?>"  class="breadcrumbs__link"><?= $categoryProduct['name'] ?>
                            <span class="visually-hidden">Стрелка навигации</span>
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8 4L12 10L8 16" stroke="#1D1D1D" stroke-width="4"/>
                            </svg>
                        </a>
                    </li>
                    <li class="breadcrumbs__item">
                        <a href="/<?= htmlspecialchars($categoryProduct['slug']) ?>/<?= htmlspecialchars($subCategoryProduct['slug']) ?>" class="breadcrumbs__link"><?= $subCategoryProduct['name'] ?>
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
                        <img class="product__image" id="product-image" src="<?php echo Product::getImage($product['id']) ?>" alt="product photo" loading="lazy" width="500" height="500">
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
                   

                        <table  cellpadding="5" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Культура, обрабатываемый объект</th>
                                    <th>Норма расхода г/кг</th>
                                    <th>Вредный объект</th>
                                    <th>Способ, время обработки, ограничения</th>
                                    <th>Срок последней обработки, в днях до сбора урожая</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php foreach ($productTable as $group): ?>
                                    <?php
                                    $db = Db::getConnection();
                                    $itemsStmt = $db->prepare("SELECT * FROM product_table_items WHERE group_id = ?");
                                    $itemsStmt->execute([$group['id']]);
                                    $items = $itemsStmt->fetchAll(PDO::FETCH_ASSOC);
                             
                                        
                                   // if (!$items) continue; // если нет элементов — пропустить 

                                    $rowspan = count($items);

                                //    var_dump($group['agricultural_crop']); 
                                    ?>
                                    <tr>
                                        <?php if($rowspan):  ?>
                                            <td rowspan="<?= $rowspan ?>"><?= htmlspecialchars($group['agricultural_crop']) ?> 
                                         <?php  else:  ?>
                                         <td><?= htmlspecialchars($group['agricultural_crop']) ?></td>
                                         <?php endif;  ?>

                                        <?php if($items):?>
                                        <td><?= htmlspecialchars($items[0]['consumption_rate']) ?></td>
                                        <td><?= htmlspecialchars($items[0]['harmful_object']) ?></td>
                                        <?php else:  ?>

                                        <td><?= htmlspecialchars($group['сonsumption_rate']) ?></td>
                                        <td><?= htmlspecialchars($group['harmful_object']) ?></td>

                                        <?php  endif;  ?>

                                        
                                        <?php if($rowspan):  ?>
                                            <td rowspan="<?= $rowspan ?>"><?= htmlspecialchars($group['limitations']) ?></td>
                                         <?php  else:  ?>
                                         <td><?= htmlspecialchars($group['limitations']) ?></td>
                                        <?php  endif; ?>

                                       <?php if($rowspan):  ?>
                                            <td rowspan="<?= $rowspan ?>"><?= htmlspecialchars($group['treatment_period']) ?></td>
                                         <?php  else:  ?>
                                            
                                        <td><?= htmlspecialchars($group['treatment_period']) ?></td>

                                        <?php  endif; ?>
                                    </tr>


                                    <?php if($rowspan):  ?>
                                    <?php for ($i = 1; $i < $rowspan; $i++): ?>
                                        <tr>
                                            <td><?= htmlspecialchars($items[$i]['consumption_rate']) ?></td>
                                            <td><?= htmlspecialchars($items[$i]['harmful_object']) ?></td>
                                        </tr>
                                    <?php endfor; ?>

                                    <?php  endif;  ?>
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


<?php require_once ROOT . '/views/layouts/header.php'; ?>
<?php include_once ROOT . '/views/product/singular.php'; ?>

    <main class="content">
        <div class="breadcrumbs container">
            <div class="breadcrumbs__inner">
                <ul class="breadcrumbs__list">
                    <li class="breadcrumbs__item ">
                        <a href="/" class="breadcrumbs__link">Главная&nbsp/&nbsp</a>
                    </li>
                     <li class="breadcrumbs__item">
                        <a href="/<?= htmlspecialchars($categoryProduct['slug']) ?>"  class="breadcrumbs__link">
                            <?= $categoryProduct['name'] ?>&nbsp/&nbsp
                           
                        </a>
                    </li>
                    <li class="breadcrumbs__item">
                        <a href="/<?= htmlspecialchars($categoryProduct['slug']) ?>/<?= htmlspecialchars($subCategoryProduct['slug']) ?>" class="breadcrumbs__link"><?= $subCategoryProduct['name'] ?>&nbsp/&nbsp
                      
                        </a>
                    </li>
                    <li class="breadcrumbs__item is-current">
                        <a class="breadcrumbs__link"><?= $product['name'] ?></a>
                    </li>
                </ul>
            </div>
        </div>
        <section class="section product-page">
            <h2 class="product__property-subtitle h3 visually-hidden">Описание товара</h2>
            <div class="product-page__inner container">
            <div class="product-page__images-wrapper">
                <div class="product-page__bg">
                    <img class="product-page__image"  id="product-image" 
                    src="<?php echo Product::getImage($product['id']); ?>"
                        alt="product photo" loading="lazy" width="240" height="257">
                    <div class="product-page__images-small-wrapper">
                        <?php  $arrImg = ['-1', '-2'];
                                                
                            $firstEl = array_shift($arrImg);
                            $secondEl = array_shift($arrImg);
                        
                        ?>
                        <img class="product-page__image" id="product-image"
                            src="<?php echo Product::getImageSmall($product['id'], $firstEl); ?>"
                            alt="product photo"  width="115" height="115"  loading="lazy">

                            <img class="product-page__image" id="product-image"
                            src="<?php echo Product::getImageSmall($product['id'], $secondEl); ?>"
                            alt="product photo"  width="115" height="115"  loading="lazy">


                        
                    </div>
                </div>
            </div>
            <div class="product-page__body product">
                    <div class="product__property">
                        <strong class="products-category <?=  $subCategoryProduct['slug']; ?>"><?=  $singulars[$subCategoryProduct['name']] ?? $subCategoryProduct['name'];  ?></strong>
                        <h2 class="product__property-title"><?= $product['name'] ?></h2>
                        <p class="product__property-price"><?= $product['price'] ?> тнг.</p>
                        <div class="product-about">
                            <ul class=" product-about__list">
                                <li class=" product-about__item">

                                    <?php  if(!empty($product['concentration'])): ?>
                                        <span class="product-about__text"><strong>Действующее вещество, концентрация (г/л):</strong></span>
                                        <span class="product-about__text"><?= $product['concentration'] ?></span>

                                    <?php endif; ?>
                                </li>
                                <li class=" product-about__item">
                                    <?php  if(!empty($product['concentration'])): ?>
                                        <span class="product-about__text"><strong> Препаративная форма:<br></strong></span>
                                        <span class="product-about__text"><?= $product['dosage_form'] ?></span>
                                    <?php endif; ?>
                        
                                </li>
                            </ul>
                        </div>
                        <div class="product__property-volume volume">
                            <ul class="volume__list">

                          
                 
                            <?php  if(!empty($product_volume[0]['volume_ml'])):  ?>  
                                <li class="volume__item">100 мл.</li>
                            <?php endif; ?>
                             <?php  if(!empty($product_volume[0]['volume_litre'])):  ?>
                                <li class="volume__item">1 л.</li>
                            <?php endif; ?>
                             <?php  if(!empty($product_volume[0]['volume_5litre'])):  ?>
                                <li class="volume__item">5 л.</li>
                            <?php endif; ?>
                 
                            </ul>
                        </div>
                      
                        <a  href="https://wa.me/+77055774243?text=Здравствуйте%2C+у+меня+есть+вопрос" class="product__property-button">Заказать</a>
                    </div>
                    <div class="product__description">
                        <div class="product__left-side">
                            <details class="accordion accordion--description">
                                <summary class="accordion__header">
                                    <h3 class="accordion__title desc">Показать описание</h3>
                                    <span class="accordion__icon">
                                        <svg width="10" height="7" viewBox="0 0 10 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.88712 0.854682L9.0178 0.0446038L5.03665 4.32819L1.0509 0.0403268L0.18245 0.849471L5.03818 6.0701L9.88712 0.854682Z" fill="#606060"/>
                                        </svg>

                                    </span>
                                </summary>
                                <div class="description__detail" style="white-space: pre-line;">
                                  <p><b>Описание:</b><?= $product['description']?></p>
                                </div>
                            </details>
                            <div class="description">
                                <details class="accordion">
                                    <summary class="accordion__header">
                                        <h3 class="accordion__title">Регламенты применения в С/Х</h3>
                                        <span class="accordion__icon">
                                            <svg width="10" height="7" viewBox="0 0 10 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.88712 0.854682L9.0178 0.0446038L5.03665 4.32819L1.0509 0.0403268L0.18245 0.849471L5.03818 6.0701L9.88712 0.854682Z" fill="#606060"/>
                                            </svg>

                                        </span>
                                    </summary>
                                        <div class="description__table-wrapper">
                                            <table  cellpadding="5" cellspacing="0">
                                                <caption>Регламенты применения:</caption>
                                                <thead>
                                                    <tr>
                                                        <th>Культура, обрабатываемый объект</th>
                                                        <th class="th-result_impact">Результат воздействия</th>
                                                        <th>Норма расхода на 1га <br>л/га,  г/кг, кг/га</th>
                                                        <th class="th-consumption_solution">Расход рабочего раствора</th>
                                                        <th class="th-application_features">Способо, время обработки, особенности применения</th>
                                                        <th class="th-harmful_object">Вредный объект</th>
                                                        <th class="th-limitations">Способ, время обработки, ограничения</th>
                                                        <th class="th-waiting_period">Сроки ожидание</th>
                                                        <th class="th-treatment_period">Срок последней обработки, в днях до сбора урожая (максимальная кратность обработки)</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <?php foreach ($productTable as $group): ?>
                                                        <?php
                                                        $db = Db::getConnection();
                                                        $itemsStmt = $db->prepare("SELECT * FROM product_table_items WHERE group_id = ?");
                                                        $itemsStmt->execute([$group['id']]);
                                                        $items = $itemsStmt->fetchAll(PDO::FETCH_ASSOC);
                                                
                                                        

                                                        $rowspan = count($items);
                                                    

                                                    
                                                        ?>
                                                        <tr>
                                                        
                                                            
                                                            <td rowspan= "<?= $rowspan ? $rowspan : '' ?>" ><?= htmlspecialchars($group['agricultural_crop']) ?></td>
                                                            
                                                            <?php if(!empty($items[0]['result_impact'])): ?>
                                                                <td class="td-result_impact" ><?= htmlspecialchars($items[0]['result_impact']) ?></td>
                                                                <?php  else :  ?>
                                                                <td class="td-result_impact" rowspan= "<?= $rowspan ? $rowspan : '' ?>" ><?= htmlspecialchars($group['result_impact']) ?></td>

                                                            <?php endif; ?>


                                                                                                
                                                            <?php if(!empty($items[0]['сonsumption_rate'])): ?>
                                                                <td><?= htmlspecialchars($items[0]['сonsumption_rate']) ?></td>
                                                                <?php  else :  ?>
                                                                <td rowspan= "<?= $rowspan ? $rowspan : '' ?>" ><?= htmlspecialchars($group['сonsumption_rate']) ?></td>

                                                            <?php endif; ?>

                                                            
                                                            <?php if(!empty($items[0]['consumption_solution'])): ?>
                                                                <td class="td-consumption_solution"><?= htmlspecialchars($items[0]['consumption_solution']) ?></td>
                                                                <?php  else :  ?>
                                                                <td class="td-consumption_solution" rowspan= "<?= $rowspan ? $rowspan : '' ?>" ><?= htmlspecialchars($group['consumption_solution']) ?></td>

                                                            <?php endif; ?>

                                                            <?php if(!empty($items[0]['application_features'])): ?>
                                                                <td class="td-application_features"><?= htmlspecialchars($items[0]['application_features']) ?></td>
                                                                <?php  else :  ?>
                                                                <td class="td-application_features" rowspan= "<?= $rowspan ? $rowspan : '' ?>" ><?= htmlspecialchars($group['application_features']) ?></td>

                                                            <?php endif; ?>

                                                            
                                                            <?php if(!empty($items[0]['harmful_object'])): ?>
                                                                <td class="td-harmful_object" ><?= htmlspecialchars($items[0]['harmful_object']) ?></td>
                                                                <?php  else :  ?>
                                                                <td class="td-harmful_object" rowspan= "<?= $rowspan ? $rowspan : '' ?>" ><?= htmlspecialchars($group['harmful_object']) ?></td>

                                                            <?php endif; ?>


                                                            <?php if(!empty($items[0]['limitations'])): ?>
                                                                <td class="td-limitations"><?= htmlspecialchars($items[0]['limitations']) ?></td>
                                                                <?php  else :  ?>
                                                        
                                                            <td style="white-space: pre-line; min-width:215px;" class="td-limitations" rowspan= "<?= $rowspan ? $rowspan : '' ?>" ><?= htmlspecialchars($group['limitations']) ?></td>

                                                            <?php endif; ?>



                                                                <?php if(!empty($items[0]['waiting_period'])): ?>
                                                                <td class="td-waiting_period"><?= htmlspecialchars($items[0]['waiting_period']) ?></td>
                                                                <?php  else :  ?>
                                                        
                                                            <td style="white-space: pre-line;" class="td-waiting_period" rowspan= "<?= $rowspan ? $rowspan : '' ?>" ><?= htmlspecialchars($group['waiting_period']) ?></td>

                                                            <?php endif; ?>



                                                            <td class="td-treatment_period" rowspan= "<?= $rowspan ? $rowspan : '' ?>" ><?= htmlspecialchars($group['treatment_period']) ?></td>

                                                        </tr>

                                                        <?php if($rowspan):  ?>
                                                        <?php for ($i = 1; $i < $rowspan; $i++): ?>
                                                            <tr>

                                                                <?php if (!empty($items[$i]['сonsumption_rate'])): ?>
                                                                    <td><?= htmlspecialchars($items[$i]['сonsumption_rate']) ?></td>
                                                                <?php endif; ?>

                                                                <?php if (!empty($items[$i]['consumption_solution'])): ?>
                                                                    <td><?= htmlspecialchars($items[$i]['consumption_solution']) ?></td>
                                                                <?php endif; ?>


                                                                <?php if (!empty($items[$i]['application_features'])): ?>
                                                                    <td><?= htmlspecialchars($items[$i]['application_features']) ?></td>
                                                                <?php endif; ?>
                                                                
                                                                
                                                                <?php if (!empty($items[$i]['harmful_object'])): ?>
                                                                    <td><?= htmlspecialchars($items[$i]['harmful_object']) ?></td>
                                                                <?php endif; ?>


                                                                <?php if (!empty($items[$i]['limitations'])): ?>
                                                                    <td><?= htmlspecialchars($items[$i]['limitations']) ?></td>
                                                                <?php endif; ?>
                                                            
                                                            </tr>
                                                        <?php endfor; ?>

                                                        <?php  endif;  ?>
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                </details>
                            </div>
                            <div class="product__description-wrapper">

                            <?php 
                            
                            $arrImgCult = ['-1', '-2'];
                            $firstEl = array_shift($arrImgCult);
                            $secondEl = array_shift($arrImgCult);


                            ?>
                                <img src="<?php echo Product::getImageСulture($product['id'], $firstEl); ?>"  width="200" height="150" alt="С/х Культура">
                                <img src="<?php echo Product::getImageСulture($product['id'], $secondEl); ?>"  width="200" height="150" alt="С/х Культура">
                            </div>
                        </div>
                        <div class="product__right-side">
                            <div class="description__download">
                                <a href="/upload/documents/Agro_Catalog_Ru_Prev_1802.pdf" class="description__download-link catalog" target="_blank">Скачать каталог 
                                    <span class="description__download-icon">
                                        <svg width="8" height="9" viewBox="0 0 8 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.38729 7.83239L4.39087 1.1604L3.58961 1.16083L3.58603 7.83282L4.38729 7.83239Z" fill="#606060"/>
                                        <path d="M1.08816 5.48474L1.60754 5.00075L3.98614 7.56004L6.36749 4.99819L6.88635 5.48163L3.98523 8.60077L1.08816 5.48474Z" fill="#606060"/>
                                        </svg>
                                    </span>
                                </a>
                                <a href="<?= Product::getСertificate($product['id']); ?>" class="description__download-link document" target="_blank">Скачать регистрационное удостоверение
                                    <span class="description__download-icon">
                                        <svg width="8" height="9" viewBox="0 0 8 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.38729 7.83239L4.39087 1.1604L3.58961 1.16083L3.58603 7.83282L4.38729 7.83239Z" fill="#606060"/>
                                        <path d="M1.08816 5.48474L1.60754 5.00075L3.98614 7.56004L6.36749 4.99819L6.88635 5.48163L3.98523 8.60077L1.08816 5.48474Z" fill="#606060"/>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php include ROOT . '/views/layouts/footer.php'; ?>




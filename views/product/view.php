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

                                <?php  if(!empty($product['concentration'])): ?>
                                    <span class="decription__property-text"><strong>Действующее вещество, концентрация (г/л):</strong></span>
                                    <span class="decription__property-text"><?= $product['concentration'] ?></span>

                                <?php endif; ?>
                            </li>
                            <li class="description__property-item">
                                <?php  if(!empty($product['concentration'])): ?>
                                    <span class="decription__property-text"><strong> Препаративная форма:</strong></span>
                                    <span class="decription__property-text"><?= $product['dosage_form'] ?></span>
                                <?php endif; ?>
                      
                            </li>
                        </ul>
                    </div>
                    <div class="description__detail" style="white-space: pre-line;">
                        <p><?= $product['description']?></p>
                    </div>
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
                             
                                        
                                   // if (!$items) continue; // если нет элементов — пропустить 

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
                </div>
            </div>
        </section>
    </main>

<?php include ROOT . '/views/layouts/footer.php'; ?>

<?php echo "product page";


?>


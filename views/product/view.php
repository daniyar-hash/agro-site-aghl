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
                        <img class="product__image" id="product-image" src="<?php echo Product::getImage($product['id']) ?>" alt="product photo" loading="lazy" width="400" height="400">
                    </div>

                    <div class="product__info">
                        <h2 class="product__info-title h3"><?= $product['name'] ?></h2>
                        <p class="product__info-price"><?= $product['price'] ?> тнг.</p>
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
                        <h2 class="descrition__title h3 visually-hidden">Описание</h2>

                           <details class="accordion accordion--description">
                                <summary class="accordion__header">
                                    <h3 class="accordion__title desc">Показать описание</h3>
                                    <span class="accordion__icon"></span>
                                </summary>
                                
                                <div class="description__detail" style="white-space: pre-line;">
                                <p><?= $product['description']?></p>
                                </div>

                            </details>







                        <div class="description__download">
                           
                        <a href="/upload/documents/Agro_Catalog_Ru_Prev_1802.pdf" class="description__download-link catalog" target="_blank">Скачать Каталог 
                            <span class="description__download-icon">
                                <svg  viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.5535 16.5061C12.4114 16.6615 12.2106 16.75 12 16.75C11.7894 16.75 11.5886 16.6615 11.4465 16.5061L7.44648 12.1311C7.16698 11.8254 7.18822 11.351 7.49392 11.0715C7.79963 10.792 8.27402 10.8132 8.55352 11.1189L11.25 14.0682V3C11.25 2.58579 11.5858 2.25 12 2.25C12.4142 2.25 12.75 2.58579 12.75 3V14.0682L15.4465 11.1189C15.726 10.8132 16.2004 10.792 16.5061 11.0715C16.8118 11.351 16.833 11.8254 16.5535 12.1311L12.5535 16.5061Z" fill="#1C274C"/>
                                <path d="M3.75 15C3.75 14.5858 3.41422 14.25 3 14.25C2.58579 14.25 2.25 14.5858 2.25 15V15.0549C2.24998 16.4225 2.24996 17.5248 2.36652 18.3918C2.48754 19.2919 2.74643 20.0497 3.34835 20.6516C3.95027 21.2536 4.70814 21.5125 5.60825 21.6335C6.47522 21.75 7.57754 21.75 8.94513 21.75H15.0549C16.4225 21.75 17.5248 21.75 18.3918 21.6335C19.2919 21.5125 20.0497 21.2536 20.6517 20.6516C21.2536 20.0497 21.5125 19.2919 21.6335 18.3918C21.75 17.5248 21.75 16.4225 21.75 15.0549V15C21.75 14.5858 21.4142 14.25 21 14.25C20.5858 14.25 20.25 14.5858 20.25 15C20.25 16.4354 20.2484 17.4365 20.1469 18.1919C20.0482 18.9257 19.8678 19.3142 19.591 19.591C19.3142 19.8678 18.9257 20.0482 18.1919 20.1469C17.4365 20.2484 16.4354 20.25 15 20.25H9C7.56459 20.25 6.56347 20.2484 5.80812 20.1469C5.07435 20.0482 4.68577 19.8678 4.40901 19.591C4.13225 19.3142 3.9518 18.9257 3.85315 18.1919C3.75159 17.4365 3.75 16.4354 3.75 15Z" fill="#1C274C"/>
                                </svg>
                            </span>
                        </a>
                        <a href="/upload/documents/Agro_Catalog_Ru_Prev_1802.pdf" class="description__download-link document" target="_blank">Скачать Регистрационное Удостоверение
                            <span class="description__download-icon">
                                <svg  viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.5535 16.5061C12.4114 16.6615 12.2106 16.75 12 16.75C11.7894 16.75 11.5886 16.6615 11.4465 16.5061L7.44648 12.1311C7.16698 11.8254 7.18822 11.351 7.49392 11.0715C7.79963 10.792 8.27402 10.8132 8.55352 11.1189L11.25 14.0682V3C11.25 2.58579 11.5858 2.25 12 2.25C12.4142 2.25 12.75 2.58579 12.75 3V14.0682L15.4465 11.1189C15.726 10.8132 16.2004 10.792 16.5061 11.0715C16.8118 11.351 16.833 11.8254 16.5535 12.1311L12.5535 16.5061Z" fill="#1C274C"/>
                                <path d="M3.75 15C3.75 14.5858 3.41422 14.25 3 14.25C2.58579 14.25 2.25 14.5858 2.25 15V15.0549C2.24998 16.4225 2.24996 17.5248 2.36652 18.3918C2.48754 19.2919 2.74643 20.0497 3.34835 20.6516C3.95027 21.2536 4.70814 21.5125 5.60825 21.6335C6.47522 21.75 7.57754 21.75 8.94513 21.75H15.0549C16.4225 21.75 17.5248 21.75 18.3918 21.6335C19.2919 21.5125 20.0497 21.2536 20.6517 20.6516C21.2536 20.0497 21.5125 19.2919 21.6335 18.3918C21.75 17.5248 21.75 16.4225 21.75 15.0549V15C21.75 14.5858 21.4142 14.25 21 14.25C20.5858 14.25 20.25 14.5858 20.25 15C20.25 16.4354 20.2484 17.4365 20.1469 18.1919C20.0482 18.9257 19.8678 19.3142 19.591 19.591C19.3142 19.8678 18.9257 20.0482 18.1919 20.1469C17.4365 20.2484 16.4354 20.25 15 20.25H9C7.56459 20.25 6.56347 20.2484 5.80812 20.1469C5.07435 20.0482 4.68577 19.8678 4.40901 19.591C4.13225 19.3142 3.9518 18.9257 3.85315 18.1919C3.75159 17.4365 3.75 16.4354 3.75 15Z" fill="#1C274C"/>
                                </svg>
                            </span>



                        </a>
 
                    </div>
                            
                        <a href="#" class="product__info-button button">Заказать</a>
                    </div>

                </div>

   
                
                    <div class="product-page__decription description accordion__desc">


                    <details class="accordion">
                    <summary class="accordion__header">
                        <h3 class="accordion__title">Показать таблицу</h3>
                        <span class="accordion__icon"></span>
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
                    </div>
                
            </details>


            </div>
        </section>
    </main>

<?php include ROOT . '/views/layouts/footer.php'; ?>




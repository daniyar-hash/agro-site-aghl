<?php 

$title = 'Контакты';

include ROOT . '/views/layouts/header.php';



?>
   <main class="content">
         <div class="breadcrumbs container">
             <div class="breadcrumbs__inner">
                <ul class="breadcrumbs__list">
                    <li class="breadcrumbs__item ">
                        <a href="/" class="breadcrumbs__link">Главная&nbsp/&nbsp</a>
                    </li>
                    <li class="breadcrumbs__item is-current">
                        <a class="breadcrumbs__link">Контакты</a>
                    </li>
                </ul>
            </div>
        </div>
        <section class="contact container">
            <h1 class="contact-info__title title--page">Контактная <br> Информация:</h1>
            <div class="contact__inner ">
                <div class="contact-info">
                    <ul class="contact__list">
                        <li><b>Офис компании ТОО «Агро-Хим-Лидер»</b></li>
                        <li><b>Адрес: </b>Республика Казахстан, Жетысуская область, <br>
                            город Талдыкорган, улица Абылайхана, д. 271а, кв. 21а.</li>
                        <li><b>Тел:</b> 8 (7282) 41-36-35.</li>
                    </ul>
                    <div class="contact__soc1o">
                        <img src="/template/contact/img/gr_code.svg" alt="QR-code" width="70" height="70" loading="lazy">
                        <p class="contact__soc1o-desc">
                            Посетите наш Instagram: @aghl_kz
                        </p>
                    </div>
                </div>
                <div class="contact__employees employees">
                    <h2 class="employees__title h4">Менеджеры по продажам:</h2>
                    <ul class="employees__list">
                       <li><b>Астана:</b><br>
                            Альжанов Азильхан: +7 747 278-00-12.
                        </li>
                         <li><b>Алматы:</b><br>
                            Исенбаев Улан: + 7 705 970-71-81, +7 775 327-11-33. <br>
                            Петухов Олег: +7 701 770-48-09.
                        </li>
                         <li><b>Талдыкорган:</b><br>
                            Толепберген Айдос: +7 771 190-78-74.
                        </li>
                         <li><b>Шымкент:</b><br>
                            Кокомбаев Кутман: +7 705 558-13-15. <br>
                            Сахмедов Нурлан: +7 702 667-44-93. <br>
                            Жасулан Пердебай: +7 775 632-32-95 <br>
                        </li>
                         <li><b>Кызылорда:</b><br>
                            Толеп Мади: +7 707 704-74-76.
                        </li>
                         <li><b>Мерке:</b><br>
                            Иван Потлов: +7 775 421-36-38.
                        </li>
                        <li>
                            <b>Бухгалтер</b> Ибрахим Тургунбаев: +7 771 554-67-68. <br>
                            <b>Офис:</b> + 7 (7282) 413-635. 
                        </li>
                  
                    </ul>
                </div>

            </div>
    
        </section>
    </main>


<?php include ROOT . '/views/layouts/footer.php'; ?>
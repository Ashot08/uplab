<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package uplab
 */

get_header();
?>
<main id="primary" class="site-main">
    <div class="nav-toggle">
        <div class="nav-toggle-bar"></div>
    </div>
    <div class="common_header-wrapper box">
        <header id="masthead" class="site-header">
            <div class="common_header">
                <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'course-digital',
                'menu_id' => 'primary-menu',
                'menu_class' => 'common_top-menu',
                )
                );
                ?>
            </div>
        </header><!-- #masthead -->
        <nav class="nav">
            <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'course-digital',
            'menu_id' => 'primary-menu',
            'menu_class' => 'header__top-menu',
            )
            );
            ?>
        </nav>
        <div class="common_top-logo"><img alt="logo" src="/wp-content/themes/uplab/img/logo2.png"/></div>
    </div>
    <section class="pt70">
        <img class="full-width-image" src="/wp-content/uploads/2021/09/main_free_course-1.png">
    </section>
    <section class="sec">
        <div class="box">
            <div class="info-block">
                <div class="info-block__big-title">
                    БЕСПЛАТНЫЙ<br>
                    <div class="pl40">
                        ЭКСПРЕСС-КУРС
                    </div>
                    <div>«DIGITAL-МАРКЕТИНГ:</div>
                    ПАКЕТ ЗНАНИЙ
                    <div class="pl40">
                        ДЛЯ ВЗРЫВНОГО <br>
                        ЭФФЕКТА»
                    </div>
                </div>
                <div>
                    <div class="info-block__outlined-title info-block__outlined-title__main">
                        ПРОГРАММА ТРЕХДНЕВНОГО ЭКСПРЕСС-КУРСА
                    </div>
                    <ul class="list">
                        <li>
                            Первый день: вы создадите идеальную площадку для трафика – лендинг,
                            который будет приносить заявки 24/7
                        </li>
                        <li>
                            Второй день: вы создадите и запустите воронку продаж, изучите и
                            настроите 5 основных онлайн-каналов по генерации лидов
                        </li>
                        <li>
                            Третий день: вы научитесь пользоваться инструментами web-аналитики,
                            оптимизируете каналы продаж, разберетесь в показателях эффективности
                            рекламных кампаний
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="sec sec_light">
        <div class="box">
            <div class="info-block gap40 uppercase mb40">
                <div>
                    <div class="info-block__title info-block__title_black">Первый день: готовим идеальную площадку для трафика</div>
                    <div class="info-block__outlined-title">
                        СОЗДАЕМ ВЫСОКОКОНВЕРСИОННЫЙ лендинг,
                        который будет приносить ЛИДЫ 24/7
                    </div>
                    <div class="info-block__text info-block__text_black">
                        Виды высококонверсионных лендингов:
                        квиз, микролендинг, лендинг-сообщество
                    </div>
                    <div class="info-block__text info-block__text_black">
                        Создаем продающий лендинг за 1 день:
                        макеты, структура, топовые инструменты
                    </div>
                    <div class="info-block__text info-block__text_black">
                        Продающий контент для лендинга: позиционирование,
                        УТП, акция, message, call to action
                    </div>
                    <div class="info-block__text info-block__text_black">
                        Визуал для лендинга: топовые инструменты для
                        создания изображений, инфоргафики, баннеров
                    </div>
                </div>
            </div>
            <div>
                <video class="lesson__video" src="/wp-content/uploads/2021/08/pexels-alena-darmel-7659845.mp4" controls></video>
            </div>
        </div>
    </section>
    <section class="sec sec_dark">
        <div class="box">
            <div class="info-block gap40 uppercase mb40">
                <div></div>
                <div>
                    <div class="info-block__title">Второй день: настраиваем воронку продаж через
                        пять основных онлайн-каналов
                    </div>
                    <div class="info-block__outlined-title info-block__outlined-title_black-back">
                        НАСТРАИВАЕМ ВЫСОКОКОНВЕРСИОННУЮ ВОРОНКУ ПРОДАЖ
                        И ПЯТЬ КЛЮЧЕВЫХ КАНАЛОВ ОНЛАЙН-ПРОДАЖ
                    </div>
                    <div class="info-block__text">
                        Воронка продаж и ее особенности
                    </div>
                    <div class="info-block__text">
                        Гайд по ключевым настройкам социальных сетей
                    </div>
                    <div class="info-block__text">
                        Запуск email-маркетинга
                    </div>
                    <div class="info-block__text">
                        Запуск контекстной рекламы Yandex Direct, Google Adwords
                    </div>
                    <div class="info-block__text">
                        Яндекс Кью, Яндекс Дзен как каналы
                        генерации целевого трафика
                    </div>
                    <div class="info-block__text">
                        Запуск личного YouTube канала
                    </div>
                </div>
            </div>
            <div>
                <video class="lesson__video" src="/wp-content/uploads/2021/08/pexels-alena-darmel-7659845.mp4" controls></video>
            </div>
        </div>
    </section>
    <section class="sec sec_light">
        <div class="box">
            <div class="info-block gap40 uppercase mb40">
                <div>
                    <div class="info-block__title info-block__title_black">Третий день: подключаем инструменты аналитики,
                        оптимизируем каналы продаж
                    </div>
                    <div class="info-block__outlined-title">
                        ПОДКЛЮЧАЕМ ИНСТРУМЕНТЫ АНАЛИТИКИ,
                        АНАЛИЗИРУЕМ ТРАФИК, ОПТИМИЗИРУЕМ РЕКЛАМНЫЕ КАМПАНИИ
                    </div>
                    <div class="info-block__text info-block__text_black">
                        Подключаем, настраиваем Яндекс Метрику
                    </div>
                    <div class="info-block__text info-block__text_black">
                        Подключаем, настраиваем Google Analytics
                    </div>
                    <div class="info-block__text info-block__text_black">
                        Новинки в инструментах, секретные настройки
                    </div>
                    <div class="info-block__text info-block__text_black">
                        Анализируем трафик, оптимизируем каналы, выбираем эффективные
                    </div>
                </div>
            </div>
            <div>
                <video class="lesson__video" src="/wp-content/uploads/2021/08/pexels-alena-darmel-7659845.mp4" controls></video>
            </div>
        </div>
    </section>
    <section class="sec">
        <div class="box">
            <div class="info-block gap40">
                <div>
                    <div class="info-block__big-title">
                        ХОТИТЕ СТАТЬ<br>
                        <div class="pl40">
                            высокооплачиваемым
                        </div>
                        ЭКСПЕРТОМ в
                        <div class="pl40">
                            комплексном<br>
                            ПРОДВИЖЕНИИ?
                        </div>
                    </div>
                </div>
                <div>
                    <div class="info-block__outlined-title">ПРАКТИЧЕСКИЙ ОФЛАЙН-КУРС ПО DIGITAL-МАРКЕТИНГУ
                    </div>
                    <div class="info-block__text">
                        <ul class="list">
                            <li><strong>НА КУРСЕ ВЫ НАУЧИТЕСЬ:</strong></li>
                            <li>
                                ✓ РАЗБИРАТЬСЯ В ОСНОВНЫХ ПОНЯТИЯХ, КАСАЮЩИХСЯ DIGITAL-МАРКЕТИНГА;<br>
                                ✓ РАЗБИРАТЬСЯ В АКТУАЛЬНЫХ ИНСТРУМЕНТАХ DIGITAL-МАРКЕТИНГА;<br>
                                ✓ СОСТАВЛЯТЬ ПОРТРЕТ ЦЕЛЕВОЙ АУДИТОРИИ;<br>
                                ✓ РАЗБИРАТЬСЯ В ПОЗИЦИОНИРОВАНИИ И УНИКАЛЬНОМ ТОРГОВОМ ПРЕДЛОЖЕНИИ;<br>
                                ✓ РАЗБИРАТЬСЯ В БРЕНДИНГЕ;<br>
                                ✓ СОЗДАВАТЬ ПРОДУКТОВУЮ МАТРИЦУ;<br>
                                ✓ РАЗБИРАТЬСЯ В ВИДАХ САЙТОВ, ОСНОВАХ НАПИСАНИЯ КОДА, ОСНОВАХ ЮЗАБИЛИТИ;<br>
                                ✓ АНАЛИЗИРОВАТЬ И ПОВЫШАТЬ КОНВЕРСИЮ САЙТА;<br>
                                ✓ НАСТРАИВАТЬ И АНАЛИЗИРОВАТЬ ЛЮБУЮ РЕКЛАМУ В ИНТЕРНЕТЕ;<br>
                                ✓ СОЗДАВАТЬ ВОРОНКИ ПРОДАЖ И МЕДИАПЛАН;<br>
                                ✓ АНАЛИЗИРОВАТЬ СВОИ И ЧУЖИЕ ТОЧКИ КОНТАКТА В ИНТЕРНЕТЕ;<br>
                                ✓ ПИСАТЬ ПРОДАЮЩИЕ ТЕКСТЫ;<br>
                                ✓ ПРОДВИГАТЬ ЛИЧНЫЕ БРЕНДЫ, ТОВАРЫ, УСЛУГИ В СОЦИАЛЬНЫХ СЕТЯХ;<br>
                                ✓ ИСПОЛЬЗОВАТЬ СОЦИАЛЬНЫЕ СЕТИ ДЛЯ ПОВЫШЕНИЯ ЛОЯЛЬНОСТИ КЛИЕНТОВ И ПРОДАЖ;<br>
                                ✓ ВЫСТАВЛЯТЬ И КОНТРОЛИРОВАТЬ KPI ПО DIGITAL-МАРКЕТИНГУ;<br>
                                ✓ РАЗБИРАТЬСЯ В АНАЛИТИКЕ И МНОГОЕ ДРУГОЕ!<br>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="common__buttons-wrapper text-center">
                <button class="common__button">Записаться на курс</button>
                <button class="common__button">Подробнее о курсе</button>
            </div>
        </div>
    </section>
    <section class="sec">
        <div class="box">
            <div class="info-block gap40">
                <div>
                    <div class="info-block__big-title">
                        КТО<br>
                        <div class="pl40">
                            СПИКЕР
                        </div>
                    </div>
                    <img src="/wp-content/themes/uplab/img/bg-min.png" alt="image">
                </div>
                <div>
                    <div class="info-block__title">АНАСТАСИЯ КАРАКАЗОВА</div>
                    <div class="info-block__outlined-title">DIGITAL МАРКЕТОЛОГ С 2016 ГОДА, СПЕЦИАЛИСТ ПО КОМПЛЕКСНОМУ ПРОДВИЖЕНИЮ
                    </div>
                    <div class="info-block__text">
                        <ul class="list">
                            <li>ЭКСПЕРТНОСТЬ ТРЕНЕРА:</li>
                            <li>
                                ✓ КОММУНИКАЦИОННЫЕ СТРАТЕГИИ ПРОДВИЖЕНИЯ ТОВАРОВ/УСЛУГ/ЛИЧНОГО БРЕНДА:
                                ФОРМИРОВАНИЕ И РЕАЛИЗАЦИЯ КОММУНИКАЦИОННОЙ СТРАТЕГИИ (ОТСТРАИВАНИЕ БРЕНДА, АНАЛИЗ КОНКУРЕНТОВ, РАБОТА СО СТИЛЕМ, СЕГМЕНТИРОВАНИЕ ЦЕЛЕВОЙ АУДИТОРИИ,  ФОРМИРОВАНИЕ MESSAGE, ПОСТАНОВКА ЦЕЛЕЙ И ЗАДАЧ, ОПРЕДЕЛЕНИЕ ИНСТРУМЕНТОВ);
                            </li>
                            <li>
                                ✓ ИНСТРУМЕНТЫ DIGITAL - МАРКЕТИНГА:<br>
                                1. САЙТ (ЭФФЕКТИВНАЯ ПЛОЩАДКА ДЛЯ КОММУНИКАЦИИ: SEO: ОПТИМИЗАЦИЯ САЙТОВ, СЕМАНТИКА, КЛАСТЕРИЗАЦИЯ, USER EXPERIENCE DESIGN, USER INTERFACE DESIGN);<br>
                                2. СОЦИАЛЬНЫЙ МАРКЕТИНГ - SMM (ТРАФИК, ВИЗУАЛИЗАЦИЯ, РЕКЛАМНЫЕ КАМПАНИИ: РЕМАРКЕТИНГ, РЕТАРГЕТИНГ, НАРАЩИВАНИЕ АУДИТОРИЙ, ПОВЫШЕНИЕ ВОВЛЕЧЕННОСТИ,  АНАЛИТИКА);<br>
                                3. КОНТЕКСТНАЯ РЕКЛАМА (YANDEX, GOOGLE: ВСЕ ФОРМАТЫ РАЗМЕЩЕНИЯ, ОПТИМИЗАЦИЯ КАМПАНИЙ, АНАЛИТИКА);<br>
                                4. EMAIL-МАРКЕТИНГ (ВОРОНКИ ПРОДАЖ, СЕГМЕНТАЦИЯ АУДИТОРИЙ, ОСОБЕННОСТИ ИНСТРУМЕНТОВ);<br>
                                5. КОНТЕНТ-МАРКЕТИНГ (ПРОФЕССИОНАЛЬНЫЙ КОПИРАЙТИНГ, ПРОДАЮЩИЕ ТЕКСТЫ);<br>
                                6. ТРАФИКООБРАЗУЮЩИЕ ИНСТРУМЕНТЫ (ИНЫЕ ТРЕНДОВЫЕ ИНСТРУМЕНТЫ DIGITAL-МАРКЕТИНГА).
                            </li>
                            <li>
                                ✓ ОБУЧАЮЩАЯ ДЕЯТЕЛЬНОСТЬ:<br>
                                ОБУЧЕНИЕ СОБСТВЕННИКОВ МАЛОГО И СРЕДНЕГО БИЗНЕСА, DIGITAL-МАРКЕТИНГУ; ПОВЫШЕНИЕ КВАЛИФИКАЦИИ СПЕЦИАЛИСТОВ-МАРКЕТОЛОГОВ (ИНСТРУМЕНТЫ, ТЕХНИКИ,  ТРЕНДЫ).
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="common__buttons-wrapper text-center mb40">
                <button class="common__button">Записаться на курс</button>
                <button class="common__button">Подробнее о курсе</button>
            </div>
        </div>
    </section>
    <footer>
        <section class="sec">
            <div class="common-footer box">
                <div>
                    <img alt="logo" src="/wp-content/themes/uplab/img/logo2.png">
                </div>
                <div>КОНТАКТЫ:
                    <p>
                        Email: up_lab@mail.ru    кликабельный
                        Phone: +7 911 129 96 94 кликабельный
                        Иконки Мессенджеры как на главной кликабельные
                    </p>
                </div>
                <div>
                    РЕКВИЗИТЫ:
                    <p>
                        ИП Караказова Анастасия Павловна
                        Юридический и почтовый адрес:
                        192076, Санкт-Петербург,
                        пр. Рыбацкий, д. 15, корп. 1, кв. 319
                        ИНН/КПП: 222509007480
                    </p>
                </div>
                <div><a href="/">ПОЛИТИКА КОНФИДЕНЦИАЛЬНОСТИ</a></div>
            </div>
        </section>
    </footer>

</main><!-- #main -->
<script>
    jQuery('.iphone-video__play').click((e)=>{
        const videoWrapper = e.target.closest('.iphone-video');
        const video = videoWrapper.querySelector('video');
        if(video.paused) {
            video.play();
            videoWrapper.classList.add('playing');
        } else {
            video.pause();
            videoWrapper.classList.remove('playing');
        }
        video.addEventListener('ended', stopMedia);
        function stopMedia() {
            video.pause();
            video.currentTime = 0;
            videoWrapper.classList.remove('playing');
        }
    });

    jQuery('.iphone-video__full-screen').click((e)=>{
        const videoWrapper = e.target.closest('.iphone-video');
        const video = videoWrapper.querySelector('video');
        function openFullscreen() {
            if (video.requestFullscreen) {
                video.requestFullscreen();
            } else if (video.webkitRequestFullscreen) { /* Safari */
                video.webkitRequestFullscreen();
            } else if (video.msRequestFullscreen) { /* IE11 */
                video.msRequestFullscreen();
            }
        }
        openFullscreen();
    });
</script>
<?php

get_footer();

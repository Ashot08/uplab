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
        <img class="full-width-image" src="/wp-content/uploads/2021/09/main_course1-1.png">
    </section>
    <section class="sec">
        <div class="box">
            <div class="info-block">
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
                <div>
                    <div class="info-block__outlined-title info-block__outlined-title__main">БУДУЩЕЕ ЗА КОМПЛЕКСНЫМ
                        DIGITAL-МАРКЕТИНГОМ
                    </div>
                    <ul class="list">
                        <li>
                            ✓ Бизнес ищет стратегов, аналитиков, рекламистов, копирайтеров, SMMщиков в одном лице.
                            Комплексная экспертность актуальна, как никогда.
                        </li>
                        <li>
                            ✓ Только комплексные знания всех инструментов digital-маркетинга позволят выбрать и
                            настроить лучшие каналы продаж, а, значит, принести реальные ДЕНЬГИ бизнесу, а не охваты.
                        </li>
                        <li>
                            ✓ Специалисты, разбирающиеся в стратегии продвижения и аналитике, а также одновременно
                            владеющие практическими навыками внедрения трендовых инструментов продвижения, на вес золота
                            на современном рынке услуг!
                        </li>
                    </ul>
              <div>
                    <div class="info-block__outlined-title info-block__outlined-title__main">ПОЛУЧИТЕ КОМПЛЕКСНЫЕ ЗНАНИЯ <br> НА ПРАКТИЧЕСКОМ ОФЛАЙН-КУРСЕ <br>«DIGITAL-МАРКЕТИНГ: ПРОДВИНУТЫЙ УРОВЕНЬ»
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="for-who" class="sec sec_light">
        <div class="box">
            <div class="info-block gap40">
               <div>
                    <div class="info-block__title info-block__title_black">ДЛЯ КОГО КУРС</div>
                    <div class="info-block__outlined-title">НАЧИНАЮЩИМ СПЕЦИАЛИСТАМ DIGITAL: SMM-СПЕЦИАЛИСТАМ,
                        SEO-СПЕЦИАЛИСТАМ, ДИРЕКТОЛОГАМ, ТАРГЕТОЛОГАМ
                    </div>
                    <div class="info-block__text info-block__text_black">
                        ВЫ ПОЛУЧИТЕ КОМПЛЕКСНЫЕ ЗНАНИЯ О ВСЕХ ИНСТРУМЕНТАХ DIGITAL-МАРКТЕТИНГА, НАУЧИТЕСЬ ИМИ
                        ПОЛЬЗОВАТЬСЯ, ПОЛУЧИТЕ ПРЕДСТАВЛЕНИЕ О ПРОФЕССИИ DIGITAL-МАРКЕТОЛОГА
                    </div>
                    <div class="common__buttons-wrapper">
                        <button class="common__button common__button_dark" data-modal="modal_2">Записаться на курс</button>
                        <button class="common__button common__button_dark" data-modal="modal_3">В лист ожидания</button>
                    </div>
                </div>
                <div class="pt70">
                    <div class="iphone-video">
                        <div class="iphone-video__iphone-image">
                            <img src="/wp-content/uploads/2021/08/Iphone-1-2-1.png" alt="iphone">
                        </div>
                        <div class="iphone-video__back-image">
                            <img src="/wp-content/uploads/2021/08/Group-2-2-1.png" alt="iphone">
                        </div>
                        <div class="iphone-video__video-wrapper">
                            <video autoplay muted class="iphone-video__video-video"
                                   src="/wp-content/uploads/2021/08/pexels-alena-darmel-7659845.mp4">
                                Sorry, your browser doesn't support embedded videos,
                                but don't worry, you can <a
                                    href="/wp-content/uploads/2021/08/pexels-alena-darmel-7659845.mp4">download it</a>
                                and watch it with your favorite video player!
                            </video>
                        </div>
                        <button class="iphone-video__play" aria-label="play pause toggle"></button>
                        <button class="iphone-video__full-screen" aria-label="play pause toggle"></button>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sec sec_dark">
        <div class="box">
            <div class="info-block gap40">
                <div class="pt70 mob-order-2">
                    <div class="iphone-video">
                        <div class="iphone-video__iphone-image">
                            <img src="/wp-content/uploads/2021/08/Iphone-1-2-1.png" alt="iphone">
                        </div>
                        <div class="iphone-video__back-image">
                            <img src="/wp-content/uploads/2021/08/Group-2-2-1.png" alt="iphone">
                        </div>
                        <div class="iphone-video__video-wrapper">
                            <video autoplay muted class="iphone-video__video-video"
                                   src="/wp-content/uploads/2021/09/pexels-kindel-media-7651891.mp4">
                                Sorry, your browser doesn't support embedded videos,
                                but don't worry, you can <a
                                    href="/wp-content/uploads/2021/09/pexels-kindel-media-7651891.mp4">download it</a>
                                and watch it with your favorite video player!
                            </video>
                        </div>
                        <button class="iphone-video__play" aria-label="play pause toggle"></button>
                        <button class="iphone-video__full-screen" aria-label="play pause toggle"></button>
                    </div>
                </div>
                <div>
                    <div class="info-block__title">ДЛЯ КОГО КУРС</div>
                    <div class="info-block__outlined-title info-block__outlined-title_black-back">ПРОДОЛЖАЮЩИМ
                        СПЕЦИАЛИСТАМ DIGITAL-ПРОДВИЖЕНИЯ С ОПЫТОМ РАБОТЫ 2-3 ГОДА: SMM-СПЕЦИАЛИСТАМ, SEO-СПЕЦИАЛИСТАМ,
                        ДИРЕКТОЛОГАМ, ТАРГЕТОЛОГАМ
                    </div>
                    <div class="info-block__text">
                        ВЫ СИСТЕМАТИЗИРУЕТЕ И АКТУАЛИЗИРУЕТЕ СВОИ ЗНАНИЯ, ПОЛУЧИТЕ САМЫЕ ЭФФЕКТИВНЫЕ ФИШКИ ДЛЯ
                        КОМПЛЕКСНОЙ РАБОТЫ НА НОВОМ УРОВНЕ
                    </div>
                    <div class="common__buttons-wrapper">
                        <button class="common__button" data-modal="modal_2">Записаться на курс</button>
                        <button class="common__button" data-modal="modal_3">В лист ожидания</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sec sec_light">
        <div class="box">
            <div class="info-block gap40">
                <div>
                    <div class="info-block__title info-block__title_black">ДЛЯ КОГО КУРС</div>
                    <div class="info-block__outlined-title">ВЛАДЕЛЬЦАМ БИЗНЕСА, ДИРЕКТОРАМ ПО МАРКЕТИНГУ/PR/РЕКЛАМЕ
                    </div>
                    <div class="info-block__text info-block__text_black">
                        ВЫ ПОЙМЕТЕ, КАК РАЗВИВАТЬ КОМПАНИЮ/СВОЙ БИЗНЕС В ИНТЕРНЕТЕ С СОВРЕМЕННЫХ РЕАЛИЯХ, СМОЖЕТЕ
                        САМОСТОЯТЕЛЬНО ЗАПУСКАТЬ РЕКЛАМУ, ПРАВИЛЬНО ПОДБИРАТЬ ИСПОЛНИТЕЛЕЙ, СМОЖЕТЕ ГОВОРИТЬ С ЛЮБЫМ
                        ПРЕДСТАВИТЕЛЕМ DIGITAL-СФЕРЫ НА ОДНОМ ЯЗЫКЕ
                    </div>
                    <div class="common__buttons-wrapper">
                        <button class="common__button common__button_dark" data-modal="modal_2">Записаться на курс</button>
                        <button class="common__button common__button_dark" data-modal="modal_3">В лист ожидания</button>
                    </div>
                </div>
                <div class="pt70">
                    <div class="iphone-video">
                        <div class="iphone-video__iphone-image">
                            <img src="/wp-content/uploads/2021/08/Iphone-1-2-1.png" alt="iphone">
                        </div>
                        <div class="iphone-video__back-image">
                            <img src="/wp-content/uploads/2021/08/Group-2-2-1.png" alt="iphone">
                        </div>
                        <div class="iphone-video__video-wrapper">
                            <video autoplay muted class="iphone-video__video-video"
                                   src="/wp-content/uploads/2021/09/pexels-rodnae-productions-7947506.mp4">
                                Sorry, your browser doesn't support embedded videos,
                                but don't worry, you can <a
                                    href="/wp-content/uploads/2021/09/pexels-rodnae-productions-7947506.mp4">download it</a>
                                and watch it with your favorite video player!
                            </video>
                        </div>
                        <button class="iphone-video__play" aria-label="play pause toggle"></button>
                        <button class="iphone-video__full-screen" aria-label="play pause toggle"></button>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="what-learn" class="sec">
        <div class="box">
            <div class="info-block info-block_1_2">
                <div>
                    <div class="info-block__big-title">
                        ЧЕМУ<br>
                        <div class="pl40">
                            НАУЧИТЕСЬ
                        </div>
                    </div>
                </div>
                <div>
                    <ul class="list list_no-padding-items">
                        <li>✓ РАЗБИРАТЬСЯ В ОСНОВНЫХ ПОНЯТИЯХ, КАСАЮЩИХСЯ DIGITAL-МАРКЕТИНГА;</li>
                        <li>✓ РАЗБИРАТЬСЯ В АКТУАЛЬНЫХ ИНСТРУМЕНТАХ DIGITAL-МАРКЕТИНГА;</li>
                        <li>✓ СОСТАВЛЯТЬ ПОРТРЕТ ЦЕЛЕВОЙ АУДИТОРИИ;</li>
                        <li>✓ РАЗБИРАТЬСЯ В ПОЗИЦИОНИРОВАНИИ И УНИКАЛЬНОМ ТОРГОВОМ ПРЕДЛОЖЕНИИ;</li>
                        <li>✓ РАЗБИРАТЬСЯ В БРЕНДИНГЕ;</li>
                        <li>✓ СОЗДАВАТЬ ПРОДУКТОВУЮ МАТРИЦУ;</li>
                        <li>✓ РАЗБИРАТЬСЯ В ВИДАХ САЙТОВ, ОСНОВАХ НАПИСАНИЯ КОДА, ОСНОВАХ ЮЗАБИЛИТИ;</li>
                        <li>✓ АНАЛИЗИРОВАТЬ И ПОВЫШАТЬ КОНВЕРСИЮ САЙТА;</li>
                        <li>✓ НАСТРАИВАТЬ И АНАЛИЗИРОВАТЬ ЛЮБУЮ РЕКЛАМУ В ИНТЕРНЕТЕ;</li>
                        <li>✓ СОЗДАВАТЬ ВОРОНКИ ПРОДАЖ И МЕДИАПЛАН;</li>
                        <li>✓ АНАЛИЗИРОВАТЬ СВОИ И ЧУЖИЕ ТОЧКИ КОНТАКТА В ИНТЕРНЕТЕ;</li>
                        <li>✓ ПИСАТЬ ПРОДАЮЩИЕ ТЕКСТЫ;</li>
                        <li>✓ ПРОДВИГАТЬ ЛИЧНЫЕ БРЕНДЫ, ТОВАРЫ, УСЛУГИ В СОЦИАЛЬНЫХ СЕТЯХ;</li>
                        <li>✓ ИСПОЛЬЗОВАТЬ СОЦИАЛЬНЫЕ СЕТИ ДЛЯ ПОВЫШЕНИЯ ЛОЯЛЬНОСТИ КЛИЕНТОВ И ПРОДАЖ;</li>
                        <li>✓ ВЫСТАВЛЯТЬ И КОНТРОЛИРОВАТЬ KPI ПО DIGITAL-МАРКЕТИНГУ;</li>
                        <li>✓ РАЗБИРАТЬСЯ В АНАЛИТИКЕ И МНОГОЕ ДРУГОЕ!</li>
                    </ul>
                </div>
            </div>
            <div class="common__buttons-wrapper text-center">
                <button class="common__button" data-modal="modal_2">Записаться на курс</button>
                <button class="common__button" data-modal="modal_3">В лист ожидания</button>
            </div>
        </div>
    </section>
    <section id="speaker" class="sec">
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
            <div class="common__buttons-wrapper text-center">
                <button class="common__button" data-modal="modal_2">Записаться на курс</button>
                <button class="common__button" data-modal="modal_3">В лист ожидания</button>
            </div>
        </div>
    </section>
    <section id="includes" class="sec sec_light">
        <div class="box">
            <div class="info-block column-gap80 course-program">
                <div>
                    <div class="info-block__big-title black-color">
                        ПРОГРАММА
                        <br>
                        <div class="pl40">
                            КУРСА
                        </div>
                    </div>
                </div>
                <div class="course-module__wrapper">
                    <div class="course-module">
                        Модуль 1: продвижение в Интернете 2021<br>
                        ✓ Статистика<br>
                        ✓ Тренды<br>
                        ✓ Особенности коммуникации<br>
                        ✓ Что такое digital<br>
                        ✓ Кто такой digital-маркетолог<br>
                    </div>
                </div>
                <div class="course-module__wrapper">
                    <div class="course-module">
                        Модуль 2: digital-стратегия<br>
                        ✓ Что такое digital-стратегия<br>
                        ✓ Зачем нужна digital-стратегия<br>
                        ✓ Место digital-стратегии в маркетинге<br>
                        ✓ Ключевые составляющие digital-стратегии<br>
                    </div>
                </div>
                <div class="course-module__wrapper">
                    <div class="course-module">
                        Модуль 3: точка контакта – продающий сайт<br>
                        ✓ Виды и особенности сайтов<br>
                        ✓ Функционал сайтов<br>
                        ✓ Юзабилити сайта<br>
                        ✓ Визуальная составляющая сайта<br>
                        ✓ Техничексая составляющая сайта<br>
                        ✓ Основы написания кода<br>
                        ✓ Копирайтинг на сайт<br>
                        ✓ Работа с интерфейсом популярных CMS<br>
                    </div>
                </div>
                <div class="course-module__wrapper">
                    <div class="course-module">
                        Модуль 4: точки контакта – социальные сети<br>
                        ✓ Тренды и статистика 2021<br>
                        ✓ Стратегия продвижения в социальных сетях<br>
                        ✓ Визуальная, юзабилити, техническая составляющая социальных сетей<br>
                        ✓ Копирайтинг для социальных сетей<br>
                        ✓ Профессиональные инструменты автоматизации работы с социальными сетями<br>
                    </div>
                </div>
                <div class="course-module__wrapper">
                    <div class="course-module">
                        Модуль 5: иные точки контакта в Интернете<br>
                        ✓ Мессенджеры: Telegram, WhatsApp, Viber<br>
                        ✓ Особенности продвижения на YouTube<br>
                        ✓ Особенности продвижения на Яндекс Дзен<br>
                        ✓ Особенности продвижения на Яндекс Кью<br>
                    </div>
                </div>
                <div class="course-module__wrapper">
                    <div class="course-module">
                        Модуль 6: инструменты digital-маркетолога для генерации продаж<br>
                        ✓ Email-маркетинг<br>
                        ✓ Краудмаркетинг<br>
                        ✓ SEO<br>
                        ✓ Реклама (Яндекс Direct, Google Adwords)<br>
                        ✓ Таргетинг в социальных сетях<br>
                        ✓ Партнерки, блогеры, иные инструменты генерации трафика<br>
                    </div>
                </div>
                <div class="course-module__wrapper">
                    <div class="course-module">
                        Модуль 7: основы аналитики<br>
                        ✓ Яндекс Метрика<br>
                        ✓ Google Analytics<br>
                        ✓ Ройстат<br>
                        ✓ Ключевые показатели эффективности KPI Digital маркетолога<br>
                        ✓ Сквозная аналитика<br>
                    </div>
                </div>
                <div class="course-module__wrapper">
                    <div class="course-module">
                        Модуль 8: упаковка digital-маркетолога<br>
                        ✓ Отстраивание от конкурентов<br>
                        ✓ Брифование заказчиков<br>
                        ✓ Особенности заключения договора<br>
                        ✓ Ценообразование<br>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="pricing" class="sec sec_dark">
        <div class="box">
            <div class="info-block gap40">
                <div class="pt70 mob-order-2">
                    <div class="iphone-video">
                        <div class="iphone-video__iphone-image">
                            <img src="/wp-content/uploads/2021/08/Iphone-1-2-1.png" alt="iphone">
                        </div>
                        <div class="iphone-video__back-image">
                            <img src="/wp-content/uploads/2021/08/Group-2-2-1.png" alt="iphone">
                        </div>
                        <div class="iphone-video__video-wrapper">
                            <video autoplay muted class="iphone-video__video-video"
                                   src="/wp-content/uploads/2021/09/pexels-tima-miroshnichenko-7579564.mp4">
                                Sorry, your browser doesn't support embedded videos,
                                but don't worry, you can <a
                                    href="/wp-content/uploads/2021/09/pexels-tima-miroshnichenko-7579564.mp4">download it</a>
                                and watch it with your favorite video player!
                            </video>
                        </div>
                        <button class="iphone-video__play" aria-label="play pause toggle"></button>
                        <button class="iphone-video__full-screen" aria-label="play pause toggle"></button>

                    </div>
                </div>
                <div>
                    <div class="info-block__title">ЦЕНА И ДАТЫ</div>
                    <div class="info-block__outlined-title info-block__outlined-title_black-back">
                       ДЛИТЕЛЬНОСТЬ ВСЕГО: 72 ЧАСА <br>
                        СТАРТ: НАЧАЛО 2022 ГОДА <br>
                        КОЛИЧЕСТВО И ПЕРИОДИЧНОСТЬ ЗАНЯТИЙ: 14 ЗАНЯТИЙ ПО 3 ЧАСА ДВАЖДЫ В НЕДЕЛЮ
                    </div>
                    <div class="info-block__text">
                        В КАЧЕСТВЕ ЭКЗАМЕНА: РАЗРАБОТКА ДОКУМЕНТА «DIGITAL-СТРАТЕГИЯ БРЕНДА/УСЛУГИ/ТОВАРА/ПЕРСОНЫ»
                    </div>
                    <div class="info-block__text">
                        <strong>СТОИМОСТЬ УЧАСТИЯ: 35 000 Р.</strong>
                    </div>
                    <div class="info-block__text">
                        СТОИМОСТЬ ВКЛЮЧАЕТ ЗАНЯТИЯ, РАЗБОР ДОМАШНИХ ЗАДАНИЙ, АУДИТ И ОБРАТНАЯ СВЯЗЬ ПО ДОКУМЕНТУ «DIGITAL-СТРАТЕГИЯ БРЕНДА/УСЛУГИ/ТОВАРА/ПЕРСОНЫ», ИНФОРМАЦИОННАЯ ПОДДЕРЖКА ПОСЛЕ КУРСА НА ПРОТЯЖЕНИИ 2 МЕСЯЦЕВ.
                    </div>
                    <div class="common__buttons-wrapper">
                        <button class="common__button" data-modal="modal_2">Записаться на курс</button>
                        <button class="common__button" data-modal="modal_3">В лист ожидания</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php get_template_part('common-footer'); ?>
    
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

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
                            'theme_location' => 'library',
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
                            'theme_location' => 'library',
            'menu_id' => 'primary-menu',
            'menu_class' => 'header__top-menu',
            )
            );
            ?>
        </nav>
        <div class="common_top-logo"><img alt="logo" src="/wp-content/themes/uplab/img/logo2.png"/></div>
    </div>
    <section class="pt70">
        <img class="full-width-image" src="/wp-content/uploads/2021/09/biblioteka_main-1.png">
    </section>
    <section class="sec">
        <div class="box">
            <div class="info-block">
                <div class="info-block__big-title">
                    БЕСПЛАТНЫЕ <br>
                    <div class="pl40">
                        материалы для
                    </div>
                    <div class="pl70">
                        DIGITAL-
                    </div>
                    <div class="pl40">
                        МАРКЕТОЛОГОВ
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
                    <a href="/posadochnaya-besplatnyj-kurs/">
                    <div class="info-block__outlined-title info-block__outlined-title__main">
                        ХОЧУ ПРОЙТИ БЕСПЛАТНЫЙ ЭКСПРЕСС-КУРС
                            «DIGITAL-МАРКЕТИНГ: ПАКЕТ ЗНАНИЙ ДЛЯ ВЗРЫВНОГО ЭФФЕКТА»
                    </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="sec sec_light">
        <div class="box catalog">
            <div class="info-block gap40">
                <div>
                    <div class="info-block__title info-block__title_black">БИБЛИОТЕКА МАРКЕТОЛОГА ДЛЯ ПРОРЫВНОГО ЭФФЕКТА</div>
                    <div class="info-block__outlined-title">БЕСПЛАТНЫЙ, БЕЗЛИМИТНЫЙ ДОСТУП К ЧЕК-ЛИСТАМ, ИНСТРУКЦИЯМ,
                        ПОЛЕЗНЫМ МАТЕРИАЛАМ ПО DIGITAL-МАРКЕТИНГУ
                    </div>
                </div>
                <div class="pt70">
                    <ul class="catalog__menu">
                        <li class="active" data-index="0">Инструкции</li>
                        <li data-index="1">/ Чек-листы</li>
                        <li data-index="2">/ Брифы</li>
                        <li data-index="3">/ SMM</li>
                    </ul>
                    <button data-modal="modal_10" class="common__button catalog__download-all-button active">Скачать все материалы</button>
                    <button data-modal="modal_10" class="common__button catalog__download-all-button">Скачать все материалы</button>
                    <button data-modal="modal_10" class="common__button catalog__download-all-button">Скачать все материалы</button>
                    <button data-modal="modal_10" class="common__button catalog__download-all-button">Скачать все материалы</button>
                </div>
            </div>
            <div class="catalog__wrapper">
                <div class="catalog__category active">
                    <div class="catalog__item">
                        <div class="catalog__item-header">
                            <img src="/wp-content/uploads/2021/09/uplab_check-34.jpg" alt="catalog-item-image">
                        </div>
                        <div class="catalog__item-title">
                            Инструкция по подключению Yandex Метрики
                        </div>
                        <button data-modal="modal_4" class="common__button common__button_dark"><strong>С</strong>качать</button>
                    </div>
                    <div class="catalog__item">
                        <div class="catalog__item-header">
                            <img src="/wp-content/uploads/2021/09/uplab_check-35.jpg" alt="catalog-item-image">
                        </div>
                        <div class="catalog__item-title">
                            Инструкция по созданию креатива
                        </div>
                        <button data-modal="modal_4" class="common__button common__button_dark"><strong>С</strong>качать</button>
                    </div>
                    <div class="catalog__item">
                        <div class="catalog__item-header">
                            <img src="/wp-content/uploads/2021/09/uplab_check-36.jpg" alt="catalog-item-image">
                        </div>
                        <div class="catalog__item-title">
                            Инструкция установки Google analytics
                        </div>
                        <button data-modal="modal_4" class="common__button common__button_dark"><strong>С</strong>качать</button>
                    </div>
                    <div class="catalog__item">
                        <div class="catalog__item-header">
                            <img src="/wp-content/uploads/2021/09/uplab_check-37.jpg" alt="catalog-item-image">
                        </div>
                        <div class="catalog__item-title">
                            Инструкция установки Search console
                        </div>
                        <button data-modal="modal_4" class="common__button common__button_dark"><strong>С</strong>качать</button>
                    </div>
                    <div class="catalog__item">
                        <div class="catalog__item-header">
                            <img src="/wp-content/uploads/2021/09/uplab_check-38.jpg" alt="catalog-item-image">
                        </div>
                        <div class="catalog__item-title">
                            Инструкция установки Yandex Webmaster
                        </div>
                        <button data-modal="modal_4" class="common__button common__button_dark"><strong>С</strong>качать</button>
                    </div>
                    <div class="catalog__item">
                        <div class="catalog__item-header">
                            <img src="/wp-content/uploads/2021/09/uplab_check-42.jpg" alt="catalog-item-image">
                        </div>
                        <div class="catalog__item-title">
                            Рекомендации по участию в онлайн-встречах
                        </div>
                        <button data-modal="modal_4" class="common__button common__button_dark"><strong>С</strong>качать</button>
                    </div>
                </div>
                <div class="catalog__category">
                    <div class="catalog__item">
                        <div class="catalog__item-header">
                            <img src="/wp-content/uploads/2021/09/uplab_check-01.jpg" alt="catalog-item-image">
                        </div>
                        <div class="catalog__item-title">
                            Чек-лист по юзабилити. Ссылки
                        </div>
                        <button data-modal="modal_5" class="common__button common__button_dark"><strong>С</strong>качать</button>
                    </div>
                    <div class="catalog__item">
                        <div class="catalog__item-header">
                            <img src="/wp-content/uploads/2021/09/uplab_check-02.jpg" alt="catalog-item-image">
                        </div>
                        <div class="catalog__item-title">
                            Чек-лист по юзабилити. Кнопки
                        </div>
                        <button data-modal="modal_5" class="common__button common__button_dark"><strong>С</strong>качать</button>
                    </div>
                    <div class="catalog__item">
                        <div class="catalog__item-header">
                            <img src="/wp-content/uploads/2021/09/uplab_check-03.jpg" alt="catalog-item-image">
                        </div>
                        <div class="catalog__item-title">
                            Чек-лист по юзабилити. Дизайн и элементы сайта
                        </div>
                        <button data-modal="modal_5" class="common__button common__button_dark"><strong>С</strong>качать</button>
                    </div>
                    <div class="catalog__item">
                        <div class="catalog__item-header">
                            <img src="/wp-content/uploads/2021/09/uplab_check-04.jpg" alt="catalog-item-image">
                        </div>
                        <div class="catalog__item-title">
                            Чек-лист по юзабилити. Основное
                        </div>
                        <button data-modal="modal_5" class="common__button common__button_dark"><strong>С</strong>качать</button>
                    </div>
                    <div class="catalog__item">
                        <div class="catalog__item-header">
                            <img src="/wp-content/uploads/2021/09/uplab_check-05.jpg" alt="catalog-item-image">
                        </div>
                        <div class="catalog__item-title">
                            Чек-лист по юзабилити. Главное меню
                        </div>
                        <button data-modal="modal_5" class="common__button common__button_dark"><strong>С</strong>качать</button>
                    </div>
                    <div class="catalog__item">
                        <div class="catalog__item-header">
                            <img src="/wp-content/uploads/2021/09/uplab_check-06.jpg" alt="catalog-item-image">
                        </div>
                        <div class="catalog__item-title">
                            Чек-лист по юзабилити. Поиск
                        </div>
                        <button data-modal="modal_5" class="common__button common__button_dark"><strong>С</strong>качать</button>
                    </div>
                    <div class="catalog__item">
                        <div class="catalog__item-header">
                            <img src="/wp-content/uploads/2021/09/uplab_check-07.jpg" alt="catalog-item-image">
                        </div>
                        <div class="catalog__item-title">
                            Чек-лист по юзабилити. Навигация и поиск
                        </div>
                        <button data-modal="modal_5" class="common__button common__button_dark"><strong>С</strong>качать</button>
                    </div>
                    <div class="catalog__item">
                        <div class="catalog__item-header">
                            <img src="/wp-content/uploads/2021/09/uplab_check-12.jpg" alt="catalog-item-image">
                        </div>
                        <div class="catalog__item-title">
                            Коммуникация с клиентом на сайте
                        </div>
                        <button data-modal="modal_5" class="common__button common__button_dark"><strong>С</strong>качать</button>
                    </div>
                    <div class="catalog__item">
                        <div class="catalog__item-header">
                            <img src="/wp-content/uploads/2021/09/uplab_check-08.jpg" alt="catalog-item-image">
                        </div>
                        <div class="catalog__item-title">
                            Страница контактов
                        </div>
                        <button data-modal="modal_5" class="common__button common__button_dark"><strong>С</strong>качать</button>
                    </div>
                    <div class="catalog__item">
                        <div class="catalog__item-header">
                            <img src="/wp-content/uploads/2021/09/uplab_check-09.jpg" alt="catalog-item-image">
                        </div>
                        <div class="catalog__item-title">
                            Отзывы и комментарии
                        </div>
                        <button data-modal="modal_5" class="common__button common__button_dark"><strong>С</strong>качать</button>
                    </div>
                    <div class="catalog__item">
                        <div class="catalog__item-header">
                            <img src="/wp-content/uploads/2021/09/uplab_check-10.jpg" alt="catalog-item-image">
                        </div>
                        <div class="catalog__item-title">
                            Форма обратной связи
                        </div>
                        <button data-modal="modal_5" class="common__button common__button_dark"><strong>С</strong>качать</button>
                    </div>
                    <div class="catalog__item">
                        <div class="catalog__item-header">
                            <img src="/wp-content/uploads/2021/09/uplab_check-11.jpg" alt="catalog-item-image">
                        </div>
                        <div class="catalog__item-title">
                            Онлайн-консультант
                        </div>
                        <button data-modal="modal_5" class="common__button common__button_dark"><strong>С</strong>качать</button>
                    </div>
                    <div class="catalog__item">
                        <div class="catalog__item-header">
                            <img src="/wp-content/uploads/2021/09/uplab_check-13.jpg" alt="catalog-item-image">
                        </div>
                        <div class="catalog__item-title">
                            Страницы категорий товара
                        </div>
                        <button data-modal="modal_5" class="common__button common__button_dark"><strong>С</strong>качать</button>
                    </div>
                    <div class="catalog__item">
                        <div class="catalog__item-header">
                            <img src="/wp-content/uploads/2021/09/uplab_check-14.jpg" alt="catalog-item-image">
                        </div>
                        <div class="catalog__item-title">
                            Фильтры
                        </div>
                        <button data-modal="modal_5" class="common__button common__button_dark"><strong>С</strong>качать</button>
                    </div>
                    <div class="catalog__item">
                        <div class="catalog__item-header">
                            <img src="/wp-content/uploads/2021/09/uplab_check-15.jpg" alt="catalog-item-image">
                        </div>
                        <div class="catalog__item-title">
                            Сравнение товаров
                        </div>
                        <button data-modal="modal_5" class="common__button common__button_dark"><strong>С</strong>качать</button>
                    </div>
                    <div class="catalog__item">
                        <div class="catalog__item-header">
                            <img src="/wp-content/uploads/2021/09/uplab_check-16.jpg" alt="catalog-item-image">
                        </div>
                        <div class="catalog__item-title">
                            Сортировка
                        </div>
                        <button data-modal="modal_5" class="common__button common__button_dark"><strong>С</strong>качать</button>
                    </div>
                    <div class="catalog__item">
                        <div class="catalog__item-header">
                            <img src="/wp-content/uploads/2021/09/uplab_check-17.jpg" alt="catalog-item-image">
                        </div>
                        <div class="catalog__item-title">
                            Страница товара
                        </div>
                        <button data-modal="modal_5" class="common__button common__button_dark"><strong>С</strong>качать</button>
                    </div>
                    <div class="catalog__item">
                        <div class="catalog__item-header">
                            <img src="/wp-content/uploads/2021/09/uplab_check-19.jpg" alt="catalog-item-image">
                        </div>
                        <div class="catalog__item-title">
                            Фото и видео
                        </div>
                        <button data-modal="modal_5" class="common__button common__button_dark"><strong>С</strong>качать</button>
                    </div>
                    <div class="catalog__item">
                        <div class="catalog__item-header">
                            <img src="/wp-content/uploads/2021/09/uplab_check-20.jpg" alt="catalog-item-image">
                        </div>
                        <div class="catalog__item-title">
                            Характеристики
                        </div>
                        <button data-modal="modal_5" class="common__button common__button_dark"><strong>С</strong>качать</button>
                    </div>
                    <div class="catalog__item">
                        <div class="catalog__item-header">
                            <img src="/wp-content/uploads/2021/09/uplab_check-21.jpg" alt="catalog-item-image">
                        </div>
                        <div class="catalog__item-title">
                            Другое
                        </div>
                        <button data-modal="modal_5" class="common__button common__button_dark"><strong>С</strong>качать</button>
                    </div>
                    <div class="catalog__item">
                        <div class="catalog__item-header">
                            <img src="/wp-content/uploads/2021/09/uplab_check-23.jpg" alt="catalog-item-image">
                        </div>
                        <div class="catalog__item-title">
                            Регистрация
                        </div>
                        <button data-modal="modal_5" class="common__button common__button_dark"><strong>С</strong>качать</button>
                    </div>
                    <div class="catalog__item">
                        <div class="catalog__item-header">
                            <img src="/wp-content/uploads/2021/09/uplab_check-24.jpg" alt="catalog-item-image">
                        </div>
                        <div class="catalog__item-title">
                            Корзина
                        </div>
                        <button data-modal="modal_5" class="common__button common__button_dark"><strong>С</strong>качать</button>
                    </div>
                    <div class="catalog__item">
                        <div class="catalog__item-header">
                            <img src="/wp-content/uploads/2021/09/uplab_check-25.jpg" alt="catalog-item-image">
                        </div>
                        <div class="catalog__item-title">
                            Оформление заказа
                        </div>
                        <button data-modal="modal_5" class="common__button common__button_dark"><strong>С</strong>качать</button>
                    </div>
                    <div class="catalog__item">
                        <div class="catalog__item-header">
                            <img src="/wp-content/uploads/2021/09/uplab_check-26.jpg" alt="catalog-item-image">
                        </div>
                        <div class="catalog__item-title">
                            Оплата
                        </div>
                        <button data-modal="modal_5" class="common__button common__button_dark"><strong>С</strong>качать</button>
                    </div>
                    <div class="catalog__item">
                        <div class="catalog__item-header">
                            <img src="/wp-content/uploads/2021/09/uplab_check-27.jpg" alt="catalog-item-image">
                        </div>
                        <div class="catalog__item-title">
                            Доставка
                        </div>
                        <button data-modal="modal_5" class="common__button common__button_dark"><strong>С</strong>качать</button>
                    </div>
                    <div class="catalog__item">
                        <div class="catalog__item-header">
                            <img src="/wp-content/uploads/2021/09/uplab_check-28.jpg" alt="catalog-item-image">
                        </div>
                        <div class="catalog__item-title">
                            Тексты на сайте
                        </div>
                        <button data-modal="modal_5" class="common__button common__button_dark"><strong>С</strong>качать</button>
                    </div>
                    <div class="catalog__item">
                        <div class="catalog__item-header">
                            <img src="/wp-content/uploads/2021/09/uplab_check-29.jpg" alt="catalog-item-image">
                        </div>
                        <div class="catalog__item-title">
                            Шрифт
                        </div>
                        <button data-modal="modal_5" class="common__button common__button_dark"><strong>С</strong>качать</button>
                    </div>
                    <div class="catalog__item">
                        <div class="catalog__item-header">
                            <img src="/wp-content/uploads/2021/09/uplab_check-30.jpg" alt="catalog-item-image">
                        </div>
                        <div class="catalog__item-title">
                            Заголовки и подзаголовки
                        </div>
                        <button data-modal="modal_5" class="common__button common__button_dark"><strong>С</strong>качать</button>
                    </div>
                    <div class="catalog__item">
                        <div class="catalog__item-header">
                            <img src="/wp-content/uploads/2021/09/uplab_check-31.jpg" alt="catalog-item-image">
                        </div>
                        <div class="catalog__item-title">
                            Изображения и видео на сайте
                        </div>
                        <button data-modal="modal_5" class="common__button common__button_dark"><strong>С</strong>качать</button>
                    </div>
                    <div class="catalog__item">
                        <div class="catalog__item-header">
                            <img src="/wp-content/uploads/2021/09/uplab_check-32.jpg" alt="catalog-item-image">
                        </div>
                        <div class="catalog__item-title">
                            Блог сайта
                        </div>
                        <button data-modal="modal_5" class="common__button common__button_dark"><strong>С</strong>качать</button>
                    </div>
                    <div class="catalog__item">
                        <div class="catalog__item-header">
                            <img src="/wp-content/uploads/2021/09/uplab_check-33.jpg" alt="catalog-item-image">
                        </div>
                        <div class="catalog__item-title">
                            Постоянное совершенствование юзабилити
                        </div>
                        <button data-modal="modal_5" class="common__button common__button_dark"><strong>С</strong>качать</button>
                    </div>
                    <div class="catalog__item">
                        <div class="catalog__item-header">
                            <img src="/wp-content/uploads/2021/09/uplab_check-44_kanali_prodaj.jpg" alt="catalog-item-image">
                        </div>
                        <div class="catalog__item-title">
                            Чек-лист каналов продаж
                        </div>
                        <button data-modal="modal_5" class="common__button common__button_dark"><strong>С</strong>качать</button>
                    </div>
                </div>
                <div class="catalog__category">
                    <div class="catalog__item">
                        <div class="catalog__item-header">
                            <img src="/wp-content/uploads/2021/09/uplab_check-39.jpg" alt="catalog-item-image">
                        </div>
                        <div class="catalog__item-title">
                            Разработка сайта
                        </div>
                        <button data-modal="modal_6" class="common__button common__button_dark"><strong>С</strong>качать</button>
                    </div>
                    <div class="catalog__item">
                        <div class="catalog__item-header">
                            <img src="/wp-content/uploads/2021/09/uplab_check-40.jpg" alt="catalog-item-image">
                        </div>
                        <div class="catalog__item-title">
                            Работы в Social media
                        </div>
                        <button data-modal="modal_6" class="common__button common__button_dark"><strong>С</strong>качать</button>
                    </div>
                    <div class="catalog__item">
                        <div class="catalog__item-header">
                            <img src="/wp-content/uploads/2021/09/uplab_check-41.jpg" alt="catalog-item-image">
                        </div>
                        <div class="catalog__item-title">
                            Продвижение персонального бренда
                        </div>
                        <button data-modal="modal_6" class="common__button common__button_dark"><strong>С</strong>качать</button>
                    </div>
                    <div class="catalog__item">
                        <div class="catalog__item-header">
                            <img src="/wp-content/uploads/2021/09/uplab_check-43_forma_otcheta.jpg" alt="catalog-item-image">
                        </div>
                        <div class="catalog__item-title">
                            Форма отчета по комплексному аудиту
                        </div>
                        <button data-modal="modal_6" class="common__button common__button_dark"><strong>С</strong>качать</button>
                    </div>
                </div>
                <div class="catalog__category">
                    <div class="catalog__item">
                        <div class="catalog__item-header">
                            <img src="/wp-content/uploads/2021/09/uplab_check-45_avatar_klienta.jpg" alt="catalog-item-image">
                        </div>
                        <div class="catalog__item-title">
                            Аватар клиента
                        </div>
                        <button data-modal="modal_7" class="common__button common__button_dark"><strong>С</strong>качать</button>
                    </div>
                    <div class="catalog__item">
                        <div class="catalog__item-header">
                            <img src="/wp-content/uploads/2021/09/uplab_check-46_kontent-plan.jpg" alt="catalog-item-image">
                        </div>
                        <div class="catalog__item-title">
                            Контент-план 100 постов
                        </div>
                        <button data-modal="modal_7" class="common__button common__button_dark"><strong>С</strong>качать</button>
                    </div>
                    <div class="catalog__item">
                        <div class="catalog__item-header">
                            <img src="/wp-content/uploads/2021/09/uplab_check-47_portret_auditorii.jpg" alt="catalog-item-image">
                        </div>
                        <div class="catalog__item-title">
                            Портрет целевой аудитории
                        </div>
                        <button data-modal="modal_7" class="common__button common__button_dark"><strong>С</strong>качать</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sec sec_dark">
        <div class="box">
            <div class="info-block gap40">
                <div class="info-block__big-title">
                    <div class="pl160">ПРОЙДИ</div>
                    <div class="">
                        БЕСПЛАТНЫЙ
                    </div>
                    <div class="pl20 fs33">ЭКСПРЕСС-КУРС</div>
                    <div class="pl40">
                        «DIGITAL-МАРКЕТИНГ
                    </div>
                    <div class="fs33 pl120">ПАКЕТ ЗНАНИЙ</div>
                    <div class="pl140">ДЛЯ ВЗРЫВНОГО</div>
                    <div class="pl200">ЭФФЕКТА»</div>
                </div>
                <div>
                    <div class="info-block__title">ПРОГРАММА КУРСА</div>
                    <div class="info-block__outlined-title info-block__outlined-title_black-back">
                        Создаем лендинг, который будет приносить заявки 24/7, 365 дней в году
                        Настраиваем и запускаем воронку с 5 ключевыми каналами онлайн-продаж (email, соцсети, контекст, площадки Яндекс, YouTube)
                        Подключаем Яндекс Метрику и Google Analytics
                        Разбираемся в основах аналитики, оптимизируем каналы
                    </div>
                    <div class="info-block__text uppercase">
                        <h3>ЗА 3 ДНЯ!</h3>
                        <div class="fs12 mb20"><span class="fs16 fw600">П</span>ервый день: готовим идеальную площадку для трафика – лендинг, который будет приносить заявки <span class="fs16 fw600">24/7</span></div>
                        <div class="fs12 ls1"><span class="fs16 fw600">1.   В</span>иды высококонверсионных лендингов: квиз, микролендинг, лендинг-сообщество</div>
                        <div class="fs12 ls1"><span class="fs16 fw600">2.   С</span>оздаем продающий лендинг за 1 день: макеты, структура, топовые инструменты</div>
                        <div class="fs12 ls1"><span class="fs16 fw600">3.   П</span>родающий контент для лендинга: позиционирование, УТП, акция, message, call to action</div>
                        <div class="fs12 ls1"><span class="fs16 fw600">4.   В</span>изуал для лендинга: топовые инструменты для создания изображений, инфоргафики, баннеров</div>
                    </div>
                    <div class="info-block__text uppercase">
                        <div class="fs12 mb20"><span class="fs16 fw600">В</span>торой день: настраиваем воронку через <span class="fs16 fw600">5</span> основных онлайн-каналов</div>
                        <div class="fs12 ls1"><span class="fs16 fw600">1.   Г</span>айд по ключевым настройкам социальных сетей</div>
                        <div class="fs12 ls1"><span class="fs16 fw600">2.   З</span>апуск email-маркетинга</div>
                        <div class="fs12 ls1"><span class="fs16 fw600">3.   З</span>апуск контекстной рекламы Yandex Direct, Google Adwords</div>
                        <div class="fs12 ls1"><span class="fs16 fw600">4.   Я</span>ндекс Кью, Яндекс Дзен как каналы генерации целевого трафика</div>
                        <div class="fs12 ls1"><span class="fs16 fw600">5.   З</span>апуск личного YouTube канала</div>
                    </div>
                    <div class="info-block__text uppercase">
                        <div class="fs12 mb20"><span class="fs16 fw600">Т</span>ретий день: подключаем инструменты аналитики, оптимизируем каналы продаж</div>
                        <div class="fs12 ls1"><span class="fs16 fw600">1.   П</span>одключаем, настраиваем Яндекс Метрику</div>
                        <div class="fs12 ls1"><span class="fs16 fw600">2.   П</span>одключаем, настраиваем Google Analytics</div>
                        <div class="fs12 ls1"><span class="fs16 fw600">3.   Н</span>овинки в инструментах, секретные настройки</div>
                        <div class="fs12 ls1"><span class="fs16 fw600">4.   А</span>нализируем трафик, оптимизируем каналы, выбираем эффективные</div>
                    </div>
                    <a href="/posadochnaya-besplatnyj-kurs/" target="_blank">
                        <div class="info-block__text uppercase info-block__text_black p20 br4 sec_light fw600">
                           ХОЧУ ПРОЙТИ БЕСПЛАТНЫЙ ЭКСПРЕСС-КУРС<br>
                            «DIGITAL-МАРКЕТИНГ:
                            ПАКЕТ ЗНАНИЙ ДЛЯ ВЗРЫВНОГО ЭФФЕКТА»
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>


    <?php get_template_part('common-footer'); ?>

</main><!-- #main -->
<script>
    jQuery('.catalog__menu').click((e)=>{
        if(e.target.tagName === 'LI'){
            e.target.closest('ul').querySelector('.active').classList.remove('active');
            e.target.classList.add('active');
        }else{
            return;
        }

        e.target.closest('.catalog').querySelector('.catalog__category.active').classList.remove('active');
        e.target.closest('.catalog').querySelectorAll('.catalog__category')[e.target.dataset.index].classList.add('active');

        e.target.closest('.catalog').querySelector('.catalog__download-all-button.active').classList.remove('active');
        e.target.closest('.catalog').querySelectorAll('.catalog__download-all-button')[e.target.dataset.index].classList.add('active');

    })
</script>
<?php

get_footer();

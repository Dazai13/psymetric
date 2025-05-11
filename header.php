<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PsyMetric</title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
    <header class="header">
        <div class="header__container container">
            <div class="header__content">
                <div class="header__logo">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="header__logo-link" rel="home">
                        <svg class="header__logo-img" aria-hidden="true" focusable="false">
                            <use xlink:href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/sprite.svg#logo"></use>
                        </svg>
                        <span class="header__logo-text">Psy<span>Metric</span></span>
                    </a>
                </div>

				<nav class="header__nav" aria-label="Основное меню">
                    <ul class="header__nav-list">
                        <li class="header__nav-item"><a href="#" class="header__nav-link">Топ вопросов</a></li>
                        <li class="header__nav-item"><a href="#" class="header__nav-link">О сервисе</a></li>
                        <li class="header__nav-item"><a href="#" class="header__nav-link">Вопрос-Ответ</a></li>
                        <li class="header__nav-item"><a href="#" class="header__nav-link">Психологам</a></li>
                    </ul>
                </nav>
                
                <div class="header__actions">
                    <button class="header__btn btn">
                        <?php esc_html_e('Войти', 'psymetric'); ?>
                        <img src="<? echo get_template_directory_uri() ?>/img/arrow.png" alt="" aria-hidden="true">
                    </button>
                </div>
            </div>
        </div>
    </header>
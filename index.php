<?php get_header(); ?>
<section class="background__wrapper">
    <div class="background__wrapper-container container">
        <img src="<? echo get_template_directory_uri() ?>/img/background__x.png" alt="" class="background__wrapper-x">
        <img src="<? echo get_template_directory_uri() ?>/img/background__delta.png" alt="" class="background__wrapper-delta">
        <img src="<? echo get_template_directory_uri() ?>/img/background__arrow.png" alt="" class="background__wrapper-arrow">
        <img src="<? echo get_template_directory_uri() ?>/img/background__line.png" alt="" class="background__wrapper-line">
        <img src="<? echo get_template_directory_uri() ?>/img/background__circle.png" alt="" class="background__wrapper-circle">
        <div class="background__wrapper-block"></div>
    </div>
</section>
<section class="intro">
    <div class="intro__container container">
        <div class="intro__content content">
            <div class="intro__content-left">
                <h1 class="intro__title"><span>Онлайн сервис</span> <br>психологической<br> помощи в 1 клик</h1>
                <div class="intro__points">
                    <div class="intro__points-item">
                        <img src="<? echo get_template_directory_uri() ?>/img/decision.png" alt="" class="points__item-icon">
                        <p class="point__item-text">Задай <span>бесплатно</span> свой вопрос и получи<br> ответ от 25060 психологов анонимно за 5 минут.</p>
                    </div>
                    <div class="intro__points-item">
                        <img src="<? echo get_template_directory_uri() ?>/img/helping__hand.png" alt="" class="points__item-icon">
                        <p class="point__item-text">Выбирай себе психолога, который действительно<br> сможет помочь</p>
                    </div>
                    <div class="intro__points-item">
                        <img src="<? echo get_template_directory_uri() ?>/img/seminole__warpaint.png" alt="" class="points__item-icon">
                        <p class="point__item-text">О твоей проблеме никто не узнает, все анонимно.</p>
                    </div>
                </div>
                <button class="intro__button btn">Подробнее о сервисе</button>
                <p class="intro__text">* все абсолютно бесплатно и анонимано 24/7</p>
            </div>
            <div class="intro__content-right">
                <div class="question">
                    <div class="question__content content">
                        <h2 class="question__content-title"><span>Топ популярных</span> вопросов сегодня</h2>
                        <div class="question__content-items">
                            <div class="question__content-item">
                                <div class="question__content-text">
                                    <img src="<? echo get_template_directory_uri() ?>/img/Question.png" class="question__content-icon">
                                    <p class="question__content-about">Скажите как мне найти мужа и почему у  меня болит голова</p>
                                </div>
                                <div class="question__content-line"></div>                            
                            </div>
                            <div class="question__content-item">
                                <div class="question__content-text">
                                    <img src="<? echo get_template_directory_uri() ?>/img/Question.png" class="question__content-icon">
                                    <p class="question__content-about">Откуда у меня появилась паническая атака</p>
                                </div>
                                <div class="question__content-line"></div>                            
                            </div>
                                <div class="question__content-item">
                                <div class="question__content-text">
                                    <img src="<? echo get_template_directory_uri() ?>/img/Question.png" class="question__content-icon">
                                    <p class="question__content-about">Когда пройдет бессоница и станет спокойнее</p>
                                </div>
                                <div class="question__content-line"></div>                            
                            </div>
                                <div class="question__content-item">
                                <div class="question__content-text">
                                    <img src="<? echo get_template_directory_uri() ?>/img/Question.png" class="question__content-icon">
                                    <p class="question__content-about">Почему болит голова каждый день и кружится</p>
                                </div>
                        
                            </div>
                        </div>
                        <a class="question__content-more link">Весь топ вопросов</a>
                    </div>
                </div>
                <div class="form">
                    <div class="form__body">
                        <div class="form__content content">
                            <h2 class="form__body-title">Напишите свой вопрос</h2>
                            <form action="" class="intro__form">
                                <textarea name="about" id="about" placeholder="Опишите вашу проблему подробно чтобы вам смогли помочь психологи"></textarea>
                                <label class="form__label" for="">Как к вам обращаться</label>
                                <div class="form__inputs">
                                    <input class="form__input" placeholder="Например Олег*" type="text"><button class="form__button btn">Задать вопрос</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="form__footer">
                        <p class="form__footer-text">
                            Я соглашаюсь с политикой конфиденциальности, правилами использования сервиса, готов(а) вести диалог с психологами онлайн анонимно без регистрации.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
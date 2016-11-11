<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width">
</head>
<body>
<header class="header">
    <a href="" class="logo__link">
        <img class="logo__img" src="img/logo.png">
    </a>
    <a href="" class="menu">
        <img class="menu__img" src="img/burger.png">
    </a>
    <a href="tel:+74957800771" class="header__phone">+7 495 780 07 71</a>
</header>
<div class="content">
    <div class="breadcrumbs">
        <a href="" class="breadcrumbs__item">Главная</a>
        <a href="" class="breadcrumbs__item">Работа у нас</a>
        <a href="" class="breadcrumbs__item">Вакансии</a>
        <a href="" class="breadcrumbs__item">Врач-оториноларинголог</a>
    </div>
    <div class="vacancy">
        <h2 class="vacancy__name">Врач-оториноларинголог</h2>
        <div class="vacancy__info">
        <span class="vacancy__price">От 50 000 рублей</span>
        <span class="vacancy__stage">Опыт работы от 1 до 3 лет</span>
        <span class="vacancy__education">Высшее образование</span><br>
        <span class="vacancy__category">Оториноларингология</span>
        <span class="vacancy__date">7 декабря</span>
        </div>
        <h3 class="vacancy__duties">Должностные обязанности</h3>
        <ul class="duties-list custom-list">
            <li class="duties-list__item custom-list__item">Амбулаторный прием пациентов (первичный, повторный)</li>
            <li class="duties-list__item custom-list__item">Квалифицированное оказание медицинской помощи в рамках амбулаторно-поликлинической практики согласно медицинским стандартам</li>
            <li class="duties-list__item custom-list__item">Ведение электронных медицинских карт</li>
        </ul>
        <h3 class="vacancy__requirements">Требования</h3>
        <ul class="requirements-list custom-list">
            <li class="requirements-list__item custom-list__item">Образование – высшее профессиональное медицинское. Обязательно наличие действующего сертификата на осуществление медицинской деятельности в области оториноларингологии.</li>
            <li class="requirements-list__item custom-list__item">Официально подтвержденный опыт работы в должности оториноларинголога (зафиксированный в трудовой книжке).</li>
            <li class="requirements-list__item custom-list__item">Приветствуется опыт ведения амбулаторных приемов в частных медицинских учреждениях.</li>
            <li class="requirements-list__item custom-list__item">Знание ПК в объеме пользователя.</li>
            <li class="requirements-list__item custom-list__item">Личные качества: ответственность, дисциплинированность, бесконфликтность, вежливость и корректное общение с пациентами, склонность к самообразованию и профессиональному развитию.</li>
        </ul>
        <h3 class="vacancy__offers">Мы предлагаем</h3>
        <ul class="offers-list custom-list">
            <li class="offers-list__item custom-list__item">Фиксированный оклад (50 000р.), надбавки за ученую степень, стаж работы в Компании и т.п., премии (% от оказанных услуг).</li>
            <li class="offers-list__item custom-list__item">Сменный график работы.</li>
            <li class="offers-list__item custom-list__item">Оплата отпусков и больничных согласно ТК РФ.</li>
            <li class="offers-list__item custom-list__item">Страхование профессиональной ответственности врача.</li>
            <li class="offers-list__item custom-list__item">Сохранение медицинского стажа.</li>
            <li class="offers-list__item custom-list__item">Бесплатное корпоративное обучение.</li>
            <li class="offers-list__item custom-list__item">Оснащение рабочих мест современным оборудованием.</li>
            <li class="offers-list__item custom-list__item">Ведение истории пациента в специализированной компьютерной программе.</li>
            <li class="offers-list__item custom-list__item">Предоставление медицинского обслуживания сотрудникам и членам их семей.</li>
            <li class="offers-list__item custom-list__item">Оплата ресертификационных циклов.</li>
            <li class="offers-list__item custom-list__item">Сменный график работы.</li>
        </ul>
        <form action="" method="" class="vacancy-form">
        <span class="vacancy-form__span">Откликнуться на вакансию</span>
        <input type="text" name="name" class="vacancy-form__name" placeholder="ФИО*" required>
        <input type="number" name="phone" class="vacancy-form__phone" placeholder="Телефон*" required>
        <input type="email" name="email" class="vacancy-form__email" placeholder="Email">
        <input type="text" name="city" class="vacancy-form__city" placeholder="Город">
        <label class="vacancy-form__file-label">
            <span class="vacancy-form__file-button">ПРИКРЕПИТЬ ФАЙЛ</span>
            <input type="file" name="file" class="vacancy-form__file">
        </label>
        <span class="vacancy-form__file-span">Загрузите файл в формате MS Word или PDF</span>
        <textarea class="vacancy-form__message" placeholder="Сопроводительное письмо" rows="4"></textarea>
        <label class="vacancy-form__agree-label">
            <input type="checkbox" class="vacancy-form__agree"> Я согласен на обработку <a href="" class="vacancy-form__agree-link">персональных данных</a>
        </label>
        <input type="submit" class="vacancy-form__submit" value="ОТПРАВИТЬ">
    </form>
        <a href="./" class="vacancy__back">Вернуться к списку вакансий</a>
    </div>
    <h3>Адреса поликлиник</h3>
    <a href="" class="address-list">Списком</a>
    <img class="map" src="">
</div>
<footer>
    <ul class="footer-navigation">
        <a href="" class="footer-navigation__item-link"><li class="footer-navigation__item">Информация для пациентов</li></a>
        <a href="" class="footer-navigation__item-link"><li class="footer-navigation__item">О сети поликлиник</li></a>
        <a href="" class="footer-navigation__item-link"><li class="footer-navigation__item">Работа у нас</li></a>
    </ul>
    <a href="tel:+74957800771" class="footer__number">+7 495 780 07 71</a>
    <span>Круглосуточная поддержка клиентов</span>
</footer>
</body>
</html>
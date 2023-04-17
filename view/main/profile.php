<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Azov RP | Особистий кабінет</title>
    <link rel="stylesheet" href="/public/main/css/cabinet.css">
    <link rel="shortcut icon" href="/public/main/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/public/main/css/wow.css">
</head>

<?php 
	$data = GetUserData();
?>   
<h1>Особистий кабінет</h1>

<section class="user-wrapper">
    <div class="user">
        <div class="wow fadeInLeft"><img src="/public/main/images/skins/<?php echo $data[$ucp_table_settings['skin']] ?>.png" alt="Avatar" class="user__avatar"></div>
        <div class="wow fadeInLeft">
            <p class="user__name"><?php FixName($data[$ucp_table_settings['name']]) ?></p>
            <p class="user__code">#<?php echo $data[$ucp_table_settings['id']] ?></p>
        </div>
    </div>
    <a href="#" class="settings__btn wow fadeInRight"><img src="/public/main/images/cabinet/settings.png"></a>
</section>

<section class="status-wrapper">
    <div class="wow fadeInLeft">
        <p class="status__title">останній вхід</p>
        <p class="status__text"><?php echo $data[$ucp_table_settings['last_date']] ?></p>
    </div>
    <div class="wow fadeInDown">
        <p class="status__title">стан</p>
        <p class="status__text">не в грі</p>
    </div>
    <div class="wow fadeInRight">
        <p class="status__title">останній айпі</p>
        <p class="status__text"><?php echo $data[$ucp_table_settings['last_ip']] ?></p>
    </div>
</section>

<nav class="navigation-wrapper wow fadeInUp">
    <ul class="navigation">
        <li class="navigation__item">
            <a href="#achievment-wrapper" id="achievments-link"><img src="/public/main/images/cabinet/guns.png"
                    alt="Досягнення"></a>
        </li>
        <li class="navigation__item">
            <a href="#password-wrapper" id="password-link"><img src="/public/main/images/cabinet/key.png" alt="Паролі"></a>
        </li>
        <li class="navigation__item">
            <a href="javascript:void(0)"><img src="/public/main/images/cabinet/settings.png" alt="Налаштування"></a>
        </li>
        <li class="navigation__item">
            <a href="#data-wrapper" id="data-link"><img src="/public/main/images/cabinet/info.png" alt="Інформація"></a>
        </li>
    </ul>
</nav>

<section class="password-wrapper" id="password-wrapper">
    <div>
        <p class="password-title wow fadeInLeft">новий пароль:</p>
        <input type="text" class="password-input" placeholder="QUERTY123">
    </div>
    <div>
        <p class="password-title wow fadeInRight">повторити пароль:</p>
        <input type="text" class="password-input" placeholder="QUERTY123">
    </div>
</section>
<section class="data-wrapper" id="data-wrapper">
    <ul class="data__list wow fadeInLeft">
        <li class="data__item">Ім'я: <span><?php FixName($data[$ucp_table_settings['name']]) ?></span></li>
        <li class="data__item">Рівень: <span><?php echo $data[$ucp_table_settings['level']] ?></span></li>
        <li class="data__item">Готівка: <span><?php echo $data[$ucp_table_settings['cash']] ?>$</span></li>
        <li class="data__item">Номер телефону: <span><?php echo $data[$ucp_table_settings['u_phone']] ?></span></li>
        <li class="data__item">Донат рахунок: <span><?php echo $data[$ucp_table_settings['donate']] ?>грн</span></li>
        <li class="data__item">Банківський рахунок: <span><?php echo $data[$ucp_table_settings['bank']] ?>$</span></li>
    </ul>
    <ul class="data__list wow fadeInRight">
        <li class="data__item">Стать: <span><?php if($data[$ucp_table_settings['sex']]) echo "Жіноча"; else echo "Чоловіча"; ?></span></li>
        <li class="data__item">Бізнес: <span>Відсутній</span></li>
        <li class="data__item">Будинок: <span>Відсутній</span></li>
        <li class="data__item">Статус VIP: <span>Відсутній</span></li>
        <li class="data__item">Фракція: <span>LSPD</span></li>
        <li class="data__item">Ранг: <span>Шеф</span></li>
    </ul>
</section>

<section class="achievment-wrapper" id="achievment-wrapper">
    <div class="achievment wow fadeInLeft">
        <img src="/public/main/images/cabinet/achieve-pistol.png" alt="Іконка" class="achievment__img">
        <div class="achievment__progress">
            <div style="width: 25%"></div>
            <div style="width: 75%"></div>
        </div>
        <span class="achievment__percent">25%</span>
    </div>
    <div class="achievment wow fadeInRight">
        <img src="/public/main/images/cabinet/achieve-mp5.png" alt="Іконка" class="achievment__img">
        <div class="achievment__progress">
            <div style="width: 75%"></div>
            <div style="width: 25%"></div>
        </div>
        <span class="achievment__percent">75%</span>
    </div>
    <div class="achievment wow fadeInLeft">
        <img src="/public/main/images/cabinet/achieve-shotgun.png" alt="Іконка" class="achievment__img">
        <div class="achievment__progress">
            <div style="width: 50%"></div>
            <div style="width: 50%"></div>
        </div>
        <span class="achievment__percent">50%</span>
    </div>
    <div class="achievment wow fadeInRight">
        <img src="/public/main/images/cabinet/achieve-pistol.png" alt="Іконка" class="achievment__img">
        <div class="achievment__progress">
            <div style="width: 40%"></div>
            <div style="width: 60%"></div>
        </div>
        <span class="achievment__percent">40%</span>
    </div>
    <div class="achievment wow fadeInLeft">
        <img src="/public/main/images/cabinet/achieve-rifle.png" alt="Іконка" class="achievment__img">
        <div class="achievment__progress">
            <div style="width: 85%"></div>
            <div style="width: 15%"></div>
        </div>
        <span class="achievment__percent">85%</span>
    </div>
    <div class="achievment wow fadeInRight">
        <img src="/public/main/images/cabinet/achieve-mp5.png" alt="Іконка" class="achievment__img">
        <div class="achievment__progress">
            <div style="width: 100%"></div>
            <div style="width: 0%"></div>
        </div>
        <span class="achievment__percent">100%</span>
    </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="/public/main/js/cabinet.js"></script>
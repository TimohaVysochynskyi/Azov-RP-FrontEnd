<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Azov RP | Головна</title>
    <link rel="stylesheet" href="public/main/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="shortcut icon" href="public/main/images/favicon.ico" type="image/x-icon">
</head>

<body>

<!-- HEADER -->
<header class="header">
        <!-- NAVIGATION -->
        <nav class="header__nav">
            <a href="/" class="header__logo-wrapper wow fadeInLeft">
                <img class="header__logo" src="public/main/images/main/logo.png" alt="AZOV ROLE PLAY">
                <h1 class="header__logo-title"><span>azov role play</span></h1>
            </a>
            <a class="header__burger" href="javascript:void(0)">
                <div class="header__burger-line"></div>
                <div class="header__burger-line"></div>
                <div class="header__burger-line"></div>
            </a>
            <ul class="header__list wow fadeInRight">
                <li class="header__item"><a href="#about" class="header__link header__link-active">про нас</a></li>
                <li class="header__item"><a href="#play" class="header__link">як грати</a></li>
                <li class="header__item"><a href="/donate" class="header__link">донат</a></li>
                <?php if(isset($_SESSION['NickName'])):?>
                <li class="header__item"><a href="/profile/" class="header__link"><?php echo $_SESSION['NickName']?></a></li>
                <?php else: ?>
                <li class="header__item"><a href="/profile/" class="header__link">особистий кабінет</a></li>
                <?php endif; ?>
                <li class="header__item"><a href="#" class="header__link">форум</a></li>
            </ul>
        </nav>
        <!-- HEADER CONTENT -->
        <div class="header__content">
            <h2 class="wow fadeInLeft">Виборюй нашу свободу, граючи на <span>Азов!</span></h2>
            <p class="header__description wow fadeInLeft">Бажаєш грати у SAMP з комп'ютера або телефона, але без росіян?
                <br>
                Пропонуємо розпочати гру на українському сервері - AZOV RP!
            </p>
            <div class="header__btns">
                <a href="#" class="header__btn-play wow fadeInLeft"><img src="public/main/images/main/btn-play.png"> грати</a>
                <a href="#" class="header__btn-video wow fadeInRight"><img src="public/main/images/main/header-play-btn.png"
                        alt="Відео"></a>
            </div>
            <ul class="header__servers">
                <li class="header__server wow fadeInLeft">
                    <p class="header__server-name">Azov RP 1</p>
                    <span class="header__server-players">77/1000</span>
                </li>
                <li class="header__server wow fadeInRight">
                    <p class="header__server-name">Azov RP 2</p>
                    <span class="header__server-players">66/1000</span>
                </li>
            </ul>
        </div>
        <img src="public/main/images/main/header-soldier.png" class="header__soldier wow fadeInRight" value="-1.2">
    </header>


    <!-- ABOUT US -->
    <section class="about" id="about">
        <h2 style="padding: 0 10vw;">про <span>нас!</span></h2>
        <div class="swiper about__swiper">
            <div class="swiper-wrapper about__swiper-wrapper">
            <?php
                global $db;
                $var;
                $statement = $db->prepare("SELECT * FROM `ucp_news` ORDER BY n_id DESC");
                $statement->execute ();
                if($statement->rowCount()) 
                {
                    while($news=$statement->fetch())
                    {			
                        $var = '<div class="swiper-slide about__swiper-slide">
                                <div class="about__col wow fadeInLeft">
                                    <p class="about__text">'.$news['n_text'].'
                                    </p>
                                </div>
                                <div class="about__col wow fadeInRight">
                                    <div class="about__video">';
                                    if($news['n_url']=='null')
                                    {
                                        $var = $var . '<video class="about__videoplayer" poster="'.$news['n_images'].' "> </video> 
                                            </div>
                                        </div> 
                                    </div>';
                                    }
                                    else
                                    {
                                        $var = $var . '<iframe width="100%" height="400" src="' .$news['n_url']. '" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                    </div>';
                                    }
                            echo $var;
                    } 
                } 
            ?>
            </div>
            <div class="swiper-button-next about__swiper-button-next"></div>
            <div class="swiper-button-prev about__swiper-button-prev"></div>
            <div class="swiper-pagination about__swiper-pagination"></div>
        </div>
    </section>


    <!--PLAY-->
    <section class="play" id="play">
        <h2 class="wow fadeInLeft">Як <span>почати</span> гру? просто скачай лаунчер</h2>
        <p class="play__description wow fadeInLeft">Це все дуже просто, чуваче! просто скачай потрібний лаунчер.</p>
        <div class="play__content">
            <div class="play__block wow fadeInLeft">
                <p class="play__block-title">Якщо ти з мобільного. Крок 1</p>
                <h4 class="play__block-message">Скачай лаунчер з плей маркету</h4>
                <a href="#" class="play__btn-link wow bounceInLeft"><img src="public/main/images/main/btn-play.png"> Посилання</a>
            </div>
            <div class="play__item wow fadeInRight">
                <h4 class="play__item-message">
                    <p class="play__item-title">Крок 2</p>Насолоджуйся<br>грою! <img
                        src="public/main/images/main/play-circle-arrow.png">
                </h4>
                <img src="public/main/images/main/play-phone.png" alt="Mobile phone" class="play__item-phone wow bounceInRight">
            </div>
            <div class="play__item wow fadeInLeft">
                <img src="public/main/images/main/play-laptop.png" alt="Laptop" class="play__item-laptop">
            </div>
            <div class="play__block wow fadeInRight">
                <p class="play__block-title">Якщо ти з комп’ютера</p>
                <h4 class="play__block-message">скачай наш лаунчер!</h4>
                <a href="#" class="play__btn-link wow bounceInRight"><img src="public/main/images/main/btn-play.png">
                    Посилання</a>
            </div>
        </div>
    </section>



    <!--PLAY-->
    <section class="play" id="play">
        <h2 class="wow fadeInLeft">Як <span>почати</span> гру? просто скачай лаунчер</h2>
        <p class="play__description wow fadeInLeft">Це все дуже просто, чуваче! просто скачай потрібний лаунчер.</p>
        <div class="play__content">
            <div class="play__block wow fadeInLeft">
                <p class="play__block-title">Якщо ти з мобільного. Крок 1</p>
                <h4 class="play__block-message">Скачай лаунчер з плей маркету</h4>
                <a href="#" class="play__btn-link wow bounceInLeft"><img src="/public/main/images/main/btn-play.png"> Посилання</a>
            </div>
            <div class="play__item wow fadeInRight">
                <h4 class="play__item-message">
                    <p class="play__item-title">Крок 2</p>Насолоджуйся<br>грою! <img
                        src="/public/main/images/main/play-circle-arrow.png">
                </h4>
                <img src="/public/main/images/main/play-phone.png" alt="Mobile phone" class="play__item-phone wow bounceInRight">
            </div>
            <div class="play__item wow fadeInLeft">
                <img src="/public/main/images/main/play-laptop.png" alt="Laptop" class="play__item-laptop">
            </div>
            <div class="play__block wow fadeInRight">
                <p class="play__block-title">Якщо ти з комп’ютера</p>
                <h4 class="play__block-message">скачай наш лаунчер!</h4>
                <a href="#" class="play__btn-link wow bounceInRight"><img src="/public/main/images/main/btn-play.png"> Посилання</a>
            </div>
        </div>
    </section>



    <?php include "view/common/footer.php"; ?>

    <!-- SCRIPTS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="/public/main/js/script.js"></script>
</body>

</html>
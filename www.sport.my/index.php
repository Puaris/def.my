<!DOCTYPE html>
<html lang="en">
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <link type="image/png" sizes="32x32" rel="icon" href="/img/site/ico32.png">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <title>Sport Shablon</title>

    <!--<link rel="stylesheet" href="css/particles-js.css">-->

    <link rel="stylesheet" href="css/def/def.css">
    <link rel="stylesheet" href="css/def/main.css">
    <link rel="stylesheet" href="css/def/header.css">

    <link rel="stylesheet" href="css/def/nav.css">

    <link rel="stylesheet" href="css/b/b1.css">
    <!-- <link rel="stylesheet" href="css/b/b2.css">
    <link rel="stylesheet" href="css/q/q1.css">
    <link rel="stylesheet" href="css/b/b3.css">


    <script src="js/m_jq.js"></script> -->

</head>
<body>
<div id="back">
    <!--<div id="particles-js"></div> ProSportPlus  -->
</div>


<header class="a-show">
    <div class="maxw">
        
        <div class="logo">
            <a href="/"><img src="/img/def/logo_white.png" alt="Разработка и ..."></a>
        </div>


        <div class="kp">
            <p>Просмотреть <br>коммерческие <br>предложения</p>
            <button onclick="alert('Клик!!!');">Готовые кейсы <img src="/img/def/case.png" alt="коммерческое предложение" title="коммерческое предложение"></button>
            <img src="/img/def/arrow.svg" alt="" class="arrow">
        </div>

        <div class="msg">
            <p>Свяжитесь с нами</p>
            <div class="msgBtn">
                <a href="https://wa.clck.bar/79527728957" target="_blank"><img src="/img/msg/w.svg" alt="whatsapp"></a>
                <a href="https://t.me/ruslan" target="_blank"><img src="/img/msg/t.svg" alt="telegram"></a>
            </div>
        </div>




        <div class="phone">
            <a href="tel:+79498036088">+7 (949) 803 77 77</a>
            <p>Пн-Вс: 8:30 - 22:00</p>
        </div>
        

        <div class="lng"></div>

        <!-- <script type="text/javascript">
            const toggleMenu = () => {
                document.getElementById("lngCanv").classList.toggle('hide');
            }
            lngFlag.addEventListener('click',e=>{
            e.stopPropagation();
            toggleMenu();
            });

            document.addEventListener('click', e=>{
                const menu = document.getElementById('lngCanv');
                const target = e.target;
                const its_menu = target == menu|| menu.contains(target);
                const menu_is_active = menu.classList.contains('hide');
                if(!its_menu && !menu_is_active){toggleMenu();}
            })

            let nextLang = document.querySelectorAll('.lng_e');

            let setLng=(el)=>{
                console.log(el.getAttribute("alt"));
                toggleMenu();
                return true;
            }
            nextLang.forEach(e=>e.addEventListener('click',()=>setLng(e)));

        </script> -->
        
        <div class="menu">
            <button id="menu">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
        <nav id="menu_body" class="burger"><!--  скрыто hide-->
            <div class="b-head">

            </div>
            <div class="b-body">

                <div class="b-h-line"><a href="/">Главная</a></div>
                <div class="b-h-line"><a href="/">Главная</a></div>
                <div class="b-h-line"><a href="/">Главная</a></div>
                <div class="b-h-line"><a href="/">Главная ghjjl</a></div>
                <div class="b-h-line"><a href="/">Рассчитать стоимость</a></div>
                <div class="b-h-line">Главная d</div>
                <div class="b-h-line">Главная d</div>

            </div>
            <div class="b-down">
                <div class="msgBtn">
                    <a href="https://wa.clck.bar/79527728957" target="_blank"><img src="img/msg/w.svg" alt="whatsapp"></a>
                    <a href="https://t.me/ruslan" target="_blank"><img src="img/msg/t.svg" alt="telegram"></a>
                </div>
                <div class="b-phone">
                    <a href="tel:+77777728957">+7 777 772 89 57</a>
                    <p>Пн-Вс: 8:30 - 22:00</p>
                </div>
            </div>
        </nav>
        <script type="text/javascript">

            const menuBody=()=>{
                document.getElementById("menu").classList.toggle('active');
                document.getElementById("menu_body").classList.toggle('active');
                return false;
            }
            document.getElementById("menu").addEventListener("click",()=>menuBody());
            
            window.addEventListener("resize",()=>{
                if(window.innerWidth>950){//скрыть бургер
                    document.getElementById("menu").classList.remove("active");
                    document.getElementById("menu_body").classList.remove("active");
                }
            },true);

        </script>
    </div>
</header>


<!-- <nav>
    <div class="maxw">
        <ul>
            <li><a href="/" class="scrollto">Главная</a></li>
            <li><a href="/" class="scrollto">Рассчитать стоимость</a></li>
            <li><a href="#b2" class="scrollto">О нас</a></li>
            <li><a href="#b3" class="scrollto">Цены</a></li>
            <li><a href="#q1" class="scrollto">Портфолио</a></li>
            <li><a href="news.php" target="_blank">Блог</a></li>
            <li><a href="#block7" class="scrollto">Landing Page</a></li>
            <li><a href="#block8" class="scrollto">Процесс работы</a></li>
            <li><a href="#block10" class="scrollto">Отзывы</a></li>
            <li><a href="#block12" class="scrollto">F.A.Q</a></li>
        </ul>
    </div>
</nav> -->


<section id="b1">
    <div class="maxw">
    block 1 rgrre
    </div>
</section>


<section id="b2">
    <div class="maxw">
        
    block 2 rgrre
        
    </div>
</section>



<section id="b3">
    <div class="maxw">
        block 3 rgrre
    </div>
</section>

<section id="b4">
    <div class="maxw">
        block 4 rgrre
    </div>
</section>


<div id="shadow"></div>
<footer>
    footer <br>
    footer <br>
    footer <br>
    footer <br>dvd
</footer>


</body>
</html>
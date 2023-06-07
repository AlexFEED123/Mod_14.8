<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
      <title>SPAinTOWN</title>  
      <link href="css/style.css" rel="stylesheet"> 
    </head>
    <body>
        <header>
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-9 col-12"> 
                    <nav class="nav-main">
                    <ul class="nav-main-list list-circle"><li class="first current"><a href="/">Главная</a></li><li><a href="#">Акции</a></li>
                    <?php
                    if($_SESSION['auth'] = false){ ?>
                     <br><li class="last"><a href="login.php">Войти</a></li>  <?php }
                     else{ ?>
                        <br><li class="last"><a href="logout.php">Выйти</a></li>  <?php
                     }
                     ?>                  
                     </ul></nav>
                </div>
                <div class="col-md-3 col-12">
                    <div class="header-contact-block">                    

        </div>
</div>                    
                    </div>  
                </div>                
            </div>    
        </div>
        </header>
        <section class="news">
            <article>
            <a href="login.php"
                class="newads">
                    <h2 >Курс на лето!!!</h2>
                <div class="article-meta">
                </div>
                <img src=https://images.unsplash.com/photo-1537726043141-dabf1c48d0a8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80 alt="Laser">
                <p>Выгодные пакеты лазерной эпиляции!<br> <h4>скидка %5</h4></p>
                </a>
            </article>
            <article>
                <a href="#">
                    <h2>Лимфодренаж</h2>
                </a>
                <img src="https://images.unsplash.com/photo-1570174006382-148305ce4972?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="JAC-4">
                <p><h3>Особая техника массажа скалкой</h3>
                Лимфодренаж - это процесс при котором обеспечивается отток лимфы. Застои лимфы вредны для организма, плохо сказываются не только на внешнем виде тела, но и на самочувствии.<br> Лимфу можно "гонять" разными способами, но массаж один из самых легких и приятных процессов.

Принцип у массажа для ног очень простой, держим скалку за ручки и прокручиваем ее вверх по ноге. Отрываем от кожи, переносим на исходную точку и снова катим по коже вверх.</p>
            </article>
            <article>
                <a href="#">
                    <h2>Сауна - лучшее средство от накопишвейся усталости</h2>
                </a>
                <img src="https://plus.unsplash.com/premium_photo-1661322614846-d34da9f111dc?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1471&q=80" alt="Da-42NG">
                <p>Сауна – это средство повышения гибкости мышц. Она создает чувство глубокой релаксации тела и ума. Сауна открывает поры кожи, успокаивает боль в мышцах, повышает кровообращение. Общие продукты метаболизма выделяются через кожу.</p>
                </article>
        </section>
        <footer>
            <div class="Links">
                <a href="#">Акции</a>
                <a href="#">Контакты</a>
                <a href="#">О нас</a>
                <a href="#">Промо</a>
            </div>
            <div class="copyright">Copyright ⓒ SPAinTOWN</div>
        </footer>
    </body>
</html>
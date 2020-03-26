<?php include_once("layouts/header.php") ?>
<div id="carouselExampleIndicators" class="carousel slide d-sm-block d-none" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item banner active">
            <img src="img/one.jpg" class="w-100 bannerimg" alt="...">
        </div>
        <div class="carousel-item banner"> 
            <img src="img/two.jpg" class="w-100 bannerimg" alt="...">
        </div>
        <div class="carousel-item banner">
            <img src="img/three.jpg" class="w-100 bannerimg" alt="...">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<div class="container mt-4">
    <div class="row row-cols-1 row-cols-md-3">
        <div class="col mb-4">
            <div class="card h-100">
                <img src="img/food1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Сопля гендальфа</h5>
                    <p class="card-text">Сопля гендальфа, мозг эльфа, фара батиной 6-ки</p>
                </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card h-100">
                <img src="img/food2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a short card.</p>
                </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card h-100">
                <img src="img/food3.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card h-100">
                <img src="img/food4.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card h-100">
                <img src="img/food4.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card h-100">
                <img src="img/food4.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div style="position:relative;overflow:hidden;">
    <a href="https://yandex.ru/maps/195/ulyanovsk/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Ульяновск</a><a href="https://yandex.ru/maps/195/ulyanovsk/house/ulitsa_igoshina_2/YEEYdAFoQUwAQFtufX55cX1mZw==/?ll=48.268886%2C54.280149&sll=48.402557%2C54.316855&sspn=0.123253%2C0.040495&utm_medium=mapframe&utm_source=maps&z=18.08"
        style="color:#eee;font-size:12px;position:absolute;top:14px;">Улица Игошина, 2 — Яндекс.Карты</a><iframe src="https://yandex.ru/map-widget/v1/-/CKueBN6y" width="100%" height="600" frameborder="0" allowfullscreen="true" style="position:relative;"></iframe>
</div>
<?php include_once("layouts/footer.php") ?>
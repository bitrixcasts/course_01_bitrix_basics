<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Обжорозаврик - Приюти и покорми динозаврика");
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
$APPLICATION->SetTitle("Обжорозаврик - Приюти и покорми динозаврика");
$APPLICATION->SetPageProperty('header_icon_color', '');
?>

<section>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active" style="background-image: url('images/banners/dino_banner_1.jpg')">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Динозавры не игрушки</h3>
                    <hr class="border-light">
                    <div>
                        <p>Эти гигантские животные жили много лет назад. Они были огромные тяжелые и опасные. Их не выводили гулять на поводке, как сейчас. И кормили они себя сами, разрывая все своими острыми зубами. Хорошо, что сейчас они такие лапушки, и прекрасно уживаются дома с нашими котиками <i class="text-danger fas fa-heart"></i></p>

                        <hr class="border-light">
                        <p><a class="btn btn-info" href="dinosaurs.html">Подробнее</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item" style="background-image: url('images/banners/dino_banner_2.jpg')">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Когда у динозаврика режутся зубки</h3>
                    <hr class="border-light">
                    <div>
                        <p>Когда у вашего динозаврика режутся зубки, это очень тяжелый период как для малыша, так и для вас. Убирайте все, что можно грызть. Потому что погрызано будет все. И главное: терпение, терпение и еще раз терпение.</p>

                        <hr class="border-light">
                        <p><a class="btn btn-info" href="blog-post.html">Подробнее</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item" style="background-image: url('images/banners/dino_banner_3.jpg')">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Хорошего динозавра много не бывает</h3>
                    <hr class="border-light">
                    <div>
                        <p>Для тех кто любит малышей покрупнее. Когда динозаврик обнимает тебя, а не ты его. А также любителям одна лапа здесь, другая там. Приходите к нам в приют и выбирайте друга побольше.</p>

                        <hr class="border-light">
                        <p><a class="btn btn-info" href="shelter.html">Подробнее</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item" style="background-image: url('images/banners/dino_banner_4.jpg')">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Хищный или травоядный</h3>
                    <hr class="border-light">
                    <div>
                        <p>Вопрос: какого динозаврика взять хищного или травоядного, - самый острый при выборе своего питомца. Как не ошибиться с выбром и взять подходящего для себя малыша, рассказывают эксперты.</p>

                        <hr class="border-light">
                        <p><a class="btn btn-info" href="blog-post.html">Подробнее</a></p>
                    </div>
                </div>
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
</section>

<div class="container">

    <h1 class="my-4">О динозаврах</h1>


    <div class="row">
        <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
                <a href="dinosaur-item.html"><img class="card-img-top" src="/images/dinosaurs/tirannozavr.jpg" alt="Тираннозавр"></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="dinosaur-item.html">Тираннозавр</a>
                    </h4>
                    <p class="card-text">Тиранноза́вр — монотипический род плотоядных динозавров из группы целурозавров подотряда теропод, включающий единственный валидный вид — Tyrannosaurus rex.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
                <a href="dinosaur-item.html"><img class="card-img-top" src="/images/dinosaurs/velociraptor_p.jpg" alt="Велоцираптор"></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="dinosaur-item.html">Велоцираптор</a>
                    </h4>
                    <p class="card-text">Велоцира́птор — род хищных двуногих динозавров из семейства дромеозаврид, подсемейства велоцирапторин. Типовой вид — Velociraptor mongoliensis.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
                <a href="dinosaur-item.html"><img class="card-img-top" src="/images/dinosaurs/triceratops.jpg" alt="Трицератопс"></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="dinosaur-item.html">Трицератопс</a>
                    </h4>
                    <p class="card-text">Трицера́топс — род растительноядных динозавров из семейства цератопсид, существовали в конце маастрихтского века мелового периода и начале палеоценовой эпохи палеогенового периода.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
                <a href="dinosaur-item.html"><img class="card-img-top" src="/images/dinosaurs/brontozavr.jpg" alt="Бронтозавр"></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="dinosaur-item.html">Бронтозавр</a>
                    </h4>
                    <p class="card-text">Бронтозавр — род гигантских четвероногих динозавров-завропод, в который включают три вида. Хотя типовой вид, Brontosaurus excelsus, уже давно считается одним из видов близкородственного апатозавра, более поздние исследования показали, что бронтозавр — род, отдельный от Apatosaurus.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
                <a href="dinosaur-item.html"><img class="card-img-top" src="/images/dinosaurs/pterodaktil.jpg" alt="Птеродактиль"></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="dinosaur-item.html">Птеродактиль</a>
                    </h4>
                    <p class="card-text">Птерода́ктили — род птерозавров, ископаемые остатки которых были обнаружены преимущественно в Зольнхофенских известняках Германии, которые датируются концом юрского периода, 152,1—145 млн лет назад, хотя более фрагментарные ископаемые остатки были найдены в других странах Европы и в Африке.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
                <a href="dinosaur-item.html"><img class="card-img-top" src="/images/dinosaurs/parazavrolofus.jpg" alt="Паразавролофус"></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="dinosaur-item.html">Паразавролофус</a>
                    </h4>
                    <p class="card-text">Паразауролофы — род динозавров. Обитали в конце мелового периода, около 76—73 млн лет назад на территории Северной Америки. Окаменелости обнаружены в провинции Альберта в Канаде и Нью-Мексико и Юта в США. Впервые описаны в 1923 году Уильямом Парксом. Учёные относят их к утконосым динозаврам.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-4 justify-content-center">
        <div class="col-md-4">
            <a class="btn btn-lg btn-outline-primary btn-block" href="dinosaurs.html">Все динозавры</a>
        </div>
    </div>

    <hr>

    <div class="row">
        <div class="col-lg-6">
            <h2>Обжорозаврик <i class="fas fa-dragon"></i> - это круто</h2>
            <p>На нашем сайте вы можете:</p>
            <ul>
                <li>
                    <strong>Приютить динозаврика</strong>
                </li>
                <li>Узнать о динозаврах побольше</li>
                <li>Поделится интересным</li>
                <li>Почитать об историях о домашних динозаврах</li>
                <li>Купить своему динозаврику покушать или кроватку</li>
            </ul>
            <p>Польный каталог динозавров. Огромный магазин товаров для динозваров. Дружелюбное сообщество любителей динозавров. И свой приют для динозавров - все это <strong>Обжорозаврик</strong>.</p>
        </div>
        <div class="col-lg-6 text-center">
            <img class="img full-width" src="/images/zavri.jpg" alt="Обжорозаврик" width="300" height="300">
        </div>
    </div>


    <hr>

    <h2>Последнее в блоге</h2>

    <div class="row">
        <div class="col-lg-4 mb-4">
            <div class="card h-100">
                <h4 class="card-header">Хищный или травоядный</h4>
                <div class="card-body">
                    <h6 class="card-subtitle mb-2 text-muted">Мнение эксперта</h6>
                    <p class="card-text">Вопрос: какого динозаврика взять хищного или травоядного - самый острый при выборе своего питомца. Как не ошибиться с выбром и взять подходящего для себя малыша, рассказывают эксперты.</p>
                    <small class="mt-2 text-muted">Опубликовано вчера</small>
                </div>
                <div class="card-footer">
                    <a href="blog-post.html" class="btn btn-primary">Подробнее</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card h-100">
                <h4 class="card-header">Велоцираптор Веган</h4>
                <div class="card-body">
                    <h6 class="card-subtitle mb-2 text-muted">Разное</h6>
                    <p class="card-text">Всякое бывает. Наш велоцираптор ни в какую не хочет кушать мясо. Ни птицу, ни рыбу, вообще ни кусочка. Любит кашу и брокколи. Мы уже давно смирились с этим, а в этой статье я оставлю несколько советов, что делать в такой ситуации.</p>
                    <small class="mt-2 text-muted">Опубликовано вчера</small>
                </div>
                <div class="card-footer">
                    <a href="blog-post.html" class="btn btn-primary">Подробнее</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card h-100">
                <h4 class="card-header">Когда у динозаврика режутся зубки</h4>
                <div class="card-body">
                    <h6 class="card-subtitle mb-2 text-muted">Воспитание</h6>
                    <p class="card-text">Когда у вашего динозаврика режутся зубки, это очень тяжелый период как для малыша, так и для вас. Убирайте все, что можно грызть. Потому что погрызано будет все. И главное: терпение, терпение и еще раз терпение.</p>
                    <small class="mt-2 text-muted">Опубликовано вчера</small>
                </div>
                <div class="card-footer">
                    <a href="blog-post.html" class="btn btn-primary">Подробнее</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-4 justify-content-center">
        <div class="col-md-4">
            <a class="btn btn-lg btn-outline-primary btn-block" href="blog.html">Перейти в блог</a>
        </div>
    </div>

</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
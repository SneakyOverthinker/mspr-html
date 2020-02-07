<?php require_once 'includes/header.php'; ?>

    <section id="refuge-jumbotron"
             style="background-image: url('https://img.over-blog-kiwi.com/0/16/67/80/20161013/ob_7c5fef_la-petite-maison-dans-la-prairie-3.jpg');  background-repeat: no-repeat; background-position: center center; width:auto; background-size: cover; padding: 220px  ">
        <!-- Full Page Intro -->
        <div class="container">
            <!--Grid row-->
            <h1 class="display-4 text-white">Découvrez leur refuge</h1>
            <!--Grid row-->
        </div>
    </section>

    <main id="main">


        <section class="refuge-jumbotron">
            <form method="post" action="/refuge/recherche">
            </form>

        </section>
        <section id="main">
            <div class="container py-5">
<div class="container">
                <h2>
                    La fôret des Loutres
                </h2>
                <p>Si vous rencontrez une loutre adulte et vous pensez qu'elle pourrait être gravement blessée ou
                    qu'elle ait besoin de soins vétérinaires, la meilleure solution est de rester à distance et
                    d'appeler le 112 ou les gardes forestiers de la région où vous vous trouvez. N'essayez pas de
                    l'attraper car elle pourrait vous attaquer et, en tant que mammifère vous transmettre une
                    multitude d'infections ou de parasites.</p>
                <img src="" alt="">
            </div>
                
                <div id="carouselExampleControls" class="carousel slide py-5" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://france3-regions.francetvinfo.fr/hauts-de-france/sites/regions_france3/files/styles/top_big/public/assets/images/2017/04/22/1583664-3012329.jpg?itok=QHZOKbQE" class="d-block w-100" alt="La fôret des loutres">
                        </div>
                        <div class="carousel-item">
                            <img src="https://www.tourismebretagne.com/app/uploads/crt-bretagne/2018/10/la-foret-de-broceliande-5-1920x1278.jpg" class="d-block w-100" alt="Photo de la fôret des loutres">
                        </div>
                        <div class="carousel-item">
                            <img src="data:image/jpeg;base64,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" class="d-block w-100" alt="Toujours le terrain de chasse de nos loutres">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <div class="container py-5">
                    <div class="text-align: center">
                        <p>La loutre européenne (Lutra lutra) habitait autrefois dans toute l'Europe, des régions les plus
                            arctiques, vers l'Afrique du Nord et une partie de l'Asie. A partir de la moitié du XX siècle,
                            une partie de sa population disparue suite à la persécution des êtres humains, la pénurie de
                            nourriture, la destruction de son habitat et la pollution.

                            Toutes les loutres, à l'exception de la loutre marine (Enhydra lutris), vivent dans les
                            rivières, les lacs, les marais, les lagunes ou tout autre endroit où l'eau est claire, entourée
                            d'une végétation forestière dense. Leurs terriers (appelé catiche) sont sur les rives, profitant
                            des grottes naturelles. Elles n'ont pas un terrier unique, on sait qu'elles peuvent chaque jour
                            se reposer dans une catiche différente, tant qu'elle se situe sur son territoire.

                            Elles s'alimentent presque exclusivement d'animaux aquatiques, de poissons, de crustacés,
                            d'amphibiens ou de reptiles, même si, lorsqu'elles ne disposent d'aucun de ces aliments, elles
                            peuvent sortir de l'eau et chasser des petits mammifères ou des oiseaux. A l'exception de la
                            loutre marine, qui ne sortira pas de l'eau de toute sa vie.

                            Généralement, la loutre est un animal solitaire, qui se réunit seulement durant la cour et la
                            copulation, et quand la mère est avec ses petits jusqu'à ce qu'ils s'en aillent. Elles peuvent
                            se reproduire durant toute l'année, mais elles ont tendance à réguler leurs cycles selon les
                            périodes de sécheresse et l'abondance de leurs proies préférées.
                        </p>
</div>
                    <div class=" container py-5">
                        <div class="text-align: center">
                            <h2> Voici leur terrain de chasse ! </h2>
                    </div>
                </div>
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://lh3.googleusercontent.com/proxy/TCCQByIfhBqdG-U7qosk5romOrR1bUQX8Em2gx0Tm5aVVN2_WbZs4KWOvnQcNE4vW7oSFZPYR7k3AzRUkPUosPl3_CBSJ-l0R7ibFyGpcOUG06p1Xw96iDEWGGay8FxeFc-Ai0CBvvACvaFm9Q" class="d-block w-100" alt="Terrain de chasse de nos loutres">
                        </div>
                        <div class="carousel-item">
                            <img src="https://static.actu.fr/uploads/2019/09/800px-Le_Madon_en_aval_du_pont_de_Harou%C3%A9.jpg" class="d-block w-100" alt="Terrain de chasse des loutres">
                        </div>
                        <div class="carousel-item">
                            <img src="https://www.blancheserreponcon-tourisme.com/wp-content/uploads/2017/10/rivieres-galerie.jpg" class="d-block w-100" alt="Observatoire des loutres">
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
                <div class="container py-5">
                    <h2>Conseils pratiques</h2>
                    <h3>Ce qu'il ne faut jamais faire </h3>
                    <p>Dans des pays comme le Japon ou l'Argentine, il existe une nouvelle "tendance" qui consiste à
                        adopter une loutre comme animal domestique. La loutre asiatique a alors un prix exorbitant même
                        si certaines personnes continuentn d'en acheter. Même si elle peut sembler être un animal docile
                        et domptable, la loutre est un animal sauvage, qui n'est pas passé par un processus de
                        domestication, qui prendrait des centaines d'années. Il existe toutefois encore aujourd'hui des
                        élevages de loutres, bien qu'une loutre apprivoisée reste aujourd'hui presque impossible.</p>
                </div>
                    <div class="container py-5">
                    <h3 class="mb-3">Période de reproduction</h3>
                    <p>Les personnes achètent souvent l'animal illégalement alors qu'il s'agit encore d'un bébé loutre,
                        séparé de sa mère trop tôt. Il faut savoir que les bébés loutres doivent rester avec leur mère
                        au moins 18 mois durant lesquelles elles leur apprennent le nécessaire pour vivre seul. Le fait
                        que la loutre soit un animal solitaire est une autre raison pour laquelle cet animal n'est pas
                        un animal domestique, puisqu'elle serait alors accompagnée la plupart du temps. De plus, elles
                        ne seraient pas en mesure d'adopter tous leurs comportements naturels dans une maison, et nous
                        n'avons habituellement pas de rivières ou de lacs chez nous.

                        Ces animaux deviennent aussi très agressifs quand ils sont en chaleur, état dans lequel ils
                        passent la plus grande partie de leur vie d'adulte. Une loutre cendrée en adoption pourrait
                        alors avoir un comportement incontrôlable un peu moins de la moitié de l'année.

                        Si vous voulez tout savoir sur la Loutre de mer et contempler des photos de petits bébés loutres
                        de mer adorables, consultez l'article Loutre de mer : 10 choses à savoir de PlanèteAnimal !</p>
                        <div class="col-md-4">
                            <div class="container py-5">
                                <form method="GET" action="./loutre">
                                    <h5>Venez découvrir nos loutres. </h5>
                                    <button type="submit" class="btn btn-primary">
                                        Nos loutres
                                    </button>
                                </form>
                            </div>
                        </div>
                </div>
                </div>

        </section>

<?php require_once 'includes/footer.php'; ?>
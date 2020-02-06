<?php require_once 'includes/header.php'; ?>

    <main id="main">

        <section id="container">
            <div class="container py-5">
                <h1>Découvrez notre catalogue</h1>
            </div>
        </section>

        <section id="home-formulaire">
            <div class="container py-5">
                <div class="row">
                    <div class="block-align: center">
                        <form method="GET" action="./loutre">
                            <h2 class="h3"> Trouvez la loutre qui <strong>vous</strong> convient</h2>

                            <div class="form-group">
                                <select id="species" name="species" class="custom-select">
                                    <option selected disabled>Toutes les espèces</option>
                                    <option value="1">Aonyx</option>
                                    <option value="2">Enhydra</option>
                                    <option value="3">Lutra</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <select id="ages" name="Ages" class="custom-select">
                                    <option selected disabled>Tous les âges</option>
                                    <option value="1">Bébés</option>
                                    <option value="2">Junior</option>
                                    <option value="3">Adulte</option>
                                    <option value="4">Sénior</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">
                                Cherchez votre loutre !
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <section id="home-catalogue">
            <div class="container py-5">
                <div class="text-align: center">
                    <h2 class="h3 mb-3">Les variétés de Loutres</h2>
                </div>
                <div class="container py-5">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card card-body mb-3">
                            <h3>Les loutres Aonyx</h3>
                            <img src="public/images/aonyx.jpg" alt="Cette photo représente une loutre Aonyx"
                                 height="159" width="258">
                            <p>Les loutres à joues blanches sont un genre de loutres de la famille des Mustélidés. Si la
                                loutre du Cap ne se rencontre à l'état sauvage qu'en Afrique, la loutre cendrée, quant à
                                elle, n'est présente qu'en Asie. Une espèce disparue a vécu en Europe dont en France
                                jusque
                                dans le précédent interglaciaire</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card card-body mb-3">
                            <h3>Les loutres à joues blanches du Cap</h3>
                            <img src="public/images/loutre-joue-blanche.jpg" alt="Cette photo montre une loutre cendrée"
                                 height="130" width="258">
                            <p>Les loutres à joues blanches sont un genre de loutres de la famille des Mustélidés. Si
                                la
                                loutre du Cap ne se rencontre à l'état sauvage qu'en Afrique, la loutre cendrée, quant à
                                elle, n'est présente qu'en Asie. Une espèce disparue a vécu en Europe dont en France
                                jusque dans le précédent interglaciaire.</p>
                        </div>
                    </div>
                </div>
                </div>
                <div class="row">
                    <div class="card mb-6">
                        <img class="card-img-top" src="public/images/loutre-joue-blanche.jpg"
                             alt="Cette photo montre une loutre cendrée">
                        <div class="card-body">
                            <h5 class="card-title">Mickey</h5>
                            <p>MLes loutres à joues blanches sont un genre de loutres de la famille des Mustélidés. Si
                                la
                                loutre du Cap ne se rencontre à l'état sauvage qu'en Afrique, la loutre cendrée, quant à
                                elle, n'est présente qu'en Asie. Une espèce disparue a vécu en Europe dont en France
                                jusque dans le précédent interglaciaire.</p>
                            <a href="./contact.php" class="btn btn-primary">Venez le rencontrer !</a>
                        </div>
                    </div>

                    <div class="card mb-3">
                        <img class="card-img-top" src="public/images/loutre-joue-blanche.jpg"
                             alt="Cette photo montre une loutre cendrée">
                        <div class="card-body">
                            <h5 class="card-title">Mickey</h5>
                            <p>MLes loutres à joues blanches sont un genre de loutres de la famille des Mustélidés. Si
                                la
                                loutre du Cap ne se rencontre à l'état sauvage qu'en Afrique, la loutre cendrée, quant à
                                elle, n'est présente qu'en Asie. Une espèce disparue a vécu en Europe dont en France
                                jusque dans le précédent interglaciaire.</p>
                            <a href="./contact.php" class="btn btn-primary">Venez le rencontrer !</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card card-body mb-3">
                            <h3 class="h4">Les loutres cendrées</h3>
                            <img src="public/images/loutre-home-page.png" alt="Famille de loutres cendrées" height="160"
                                 width="250">
                            <p>La loutre cendrée est une espèce de loutres de la famille des Mustelidés. Aussi appelée
                                loutre asiatique ou loutre naine d'Asie, cette loutre est menacée et considérée comme
                                étant vulnérable à cause de la disparition rapide de son habitat</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card card-body mb-3">
                            <h3 class="h4">Les loutres géantes</h3>
                            <img src="public/images/loutre-geante.jpg" alt="Photo représentant une loutre géante"
                                 height="160" width="250">
                            <p>Les loutres ont de longs corps minces et des membres relativement courts, avec des pattes
                                palmées. La plupart ont des griffes acérées, et tous, sauf la loutre de mer ont de
                                longues queues. La taille varie selon les espèces, allant de 60 cm à 1,8 m de long
                                pour un poids de 1 à 45 kg.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section id="home-catalogue">
            <div class="container">

                <div class="row">

                    <div class="col-md-4">
                        <div class="card mb-3">
                            <div class="card-body">
                                <h3>Venez découvrir leur refuges ! </h3>
                                <a href="./refuge" class="btn btn-primary">Leur maison !</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card card-body mb-3">
                            <form method="GET" action="./don">
                                <h2 class="h3">Soutenez-les, soutenez-nous ! </h2>
                                <button type="submit" class="btn btn-primary">
                                    Faites un don !
                                </button>
                            </form>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card card-body mb-3">
                            <form method="GET" action="./conseils">
                                <h2 class="h3">Venez découvrir les conseils pratiques ! </h2>
                                <button type="submit" class="btn btn-primary">
                                    Bien s'occuper de sa loutre !
                                </button>
                            </form>
                        </div>
                    </div>

                </div>

            </div>
            <div class="row" hidden>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional
                                content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6" hidden>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional
                                content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>


<?php require_once 'includes/footer.php'; ?>
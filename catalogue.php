<?php require_once 'includes/header.php'; ?>

    <main id="main">

        <section id="home-jumbotron">
            <div id="content-header" class="content-header header-home">
                <div class="content-header-position-blocks max-w-1280">
                    Les loutres.
                </div>
            </div>
        </section>

        <section id="home-formulaire">
            <div class="container py-5">
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
        </section>

        <section id="home-catalogue">
            <div class="container">
                <h2 class="h3 mb-3">Livret de <em>famille</em> de nos loutres</h2>

                <div class="row">
                    <div class="col">
                        <div class="card card-body mb-3">
                            <h3 class="h4">Les loutres à joues blanches du Cap</h3>
                            <p>Les loutres à joues blanches sont un genre de loutres de la famille des Mustélidés. Si la
                                loutre du Cap ne se rencontre à l'état sauvage qu'en Afrique, la loutre cendrée, quant à
                                elle, n'est présente qu'en Asie. Une espèce disparue a vécu en Europe dont en France
                                jusque dans le précédent interglaciaire.</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card-body mb-3">
                            <h3 class="h4">Les loutres cendrée</h3>
                            <img scr="../public/images/loutre-cendrée" alt="Famille de loutres cendrées">
                            <p>La loutre cendrée est une espèce de loutres de la famille des Mustelidés. Aussi appelée
                                loutre asiatique ou loutre naine d'Asie, cette loutre est menacée et considérée comme
                                étant vulnérable à cause de la disparition rapide de son habitat</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="card card-body mb-3">
                            <h3 class="h4">Les loutres cendrée</h3>
                            <img scr="../public/images/loutre-cendrée" alt="Famille de loutres cendrées">
                            <p>La loutre cendrée est une espèce de loutres de la famille des Mustelidés. Aussi appelée
                                loutre asiatique ou loutre naine d'Asie, cette loutre est menacée et considérée comme
                                étant vulnérable à cause de la disparition rapide de son habitat</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card-body mb-3">
                            <h3 class="h4">Les loutres à joues blanches du Cap</h3>
                            <p>Les loutres à joues blanches sont un genre de loutres de la famille des Mustélidés. Si la
                                loutre du Cap ne se rencontre à l'état sauvage qu'en Afrique, la loutre cendrée, quant à
                                elle, n'est présente qu'en Asie. Une espèce disparue a vécu en Europe dont en France
                                jusque dans le précédent interglaciaire.</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="card card-body mb-3">
                            <h3 class="h4">Les loutres cendrée</h3>
                            <img scr="../public/images/loutre-cendrée" alt="Famille de loutres cendrées">
                            <p>La loutre cendrée est une espèce de loutres de la famille des Mustelidés. Aussi appelée
                                loutre asiatique ou loutre naine d'Asie, cette loutre est menacée et considérée comme
                                étant vulnérable à cause de la disparition rapide de son habitat</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card-body mb-3">
                            <h3 class="h4">Les loutres cendrée</h3>
                            <img scr="../public/images/loutre-cendrée" alt="Famille de loutres cendrées">
                            <p>La loutre cendrée est une espèce de loutres de la famille des Mustelidés. Aussi appelée
                                loutre asiatique ou loutre naine d'Asie, cette loutre est menacée et considérée comme
                                étant vulnérable à cause de la disparition rapide de son habitat</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>

    </main>


<?php require_once 'includes/footer.php'; ?>
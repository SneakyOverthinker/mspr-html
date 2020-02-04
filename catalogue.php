<?php require_once 'includes/header.php'; ?>

    <section id="home-jumbotron">

        <div id="content-header" class="content-header header-home">
            <div class="content-header-position-blocks max-w-1280">
                Les loutres.
            </div>
        </div>
    </section>
    <div class="container py-5">
        <form method="POST" action="/loutres/recherche">
            <div class="block-form-search">
                <h2 class="h3"> Trouvez la loutre qui <strong>vous</strong> convient</>
                <div class="form-group">
                    <select id="species" name="espèces" class="custom-select">
                        <option selected disabled>Toutes les espèces</option>
                        <option value="1">Aonyx</option>
                        <option value="2">Enhydra</option>
                        <option value="3">Lutra</option>
                    </select>


                        <div class="container py-5">
                            <form method="POST" action="/ages/recherche">
                                <div class="block-form-search">
                                    <select id="ages" name="Ages" class="custom-select">
                                        <option selected disabled>Tous les âges</option>
                                        <option value="1">Bébés</option>
                                        <option value="2">Junior</option>
                                        <option value="3">Adulte</option>
                                        <option value="4">Sénior</option>
                                    </select>

                </div>
                </div>
            </div>
    </div>
    </form>




            <button type="submit" class="btn btn-primary color=" red
            ">
            Cherchez votre loutre !
            </button>
        </div>


    <div class="grid">
        <div class="grid-item">...</div>
        <div class="grid-item grid-item--width2">...</div>
        <div class="grid-item">...</div>
        ...
    </div>
<div class="container">
    <h2 class="h3">Livret de <em>famille</em> de nos loutres</h2>
</div>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <h3 class="h4">Les loutres à joues blanches du Cap</h3>
                    <p>Les loutres à joues blanches sont un genre de loutres de la famille des Mustélidés. Si la loutre du Cap ne se rencontre à l'état sauvage qu'en Afrique, la loutre cendrée, quant à elle, n'est présente qu'en Asie. Une espèce disparue a vécu en Europe dont en France jusque dans le précédent interglaciaire.</p>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <h3 class="h4">Les loutres cendrée</h3>
                    <img scr
                    <p>La loutre cendrée est une espèce de loutres de la famille des Mustelidés. Aussi appelée loutre asiatique ou loutre naine d'Asie, cette loutre est menacée et considérée comme étant vulnérable à cause de la disparition rapide de son habitat</p>
                </div>
            </div>
        </div>
    </div>


<?php require_once 'includes/footer.php'; ?>
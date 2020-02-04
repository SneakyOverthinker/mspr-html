<?php require_once 'includes/header.php'; ?>

<section class="container">
    <form method="post" action="/loutres/recherche">
        <div class="block-form-search" >
            <h3> "Trouvez la loutre qui <strong> vous </strong> convient</h3>
            <div class="form-group">
                <select id="species" name="espèces" class="form-control">
                    <option value>Espèce</option>
                    <option value="1">Aonyx</option>
                    <option value="2">Enhydra</option>
                    <option value="3">Lutra</option>
                </select>
                <div class="checkbox">
                    <div id="sexe">
                        <label class="checkbox-inline">
                            <input type="checkbox" id="sexe_1" name="sexe[]" value="1">
                            "Femelle"
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" id="sexe_2" name="sexe[]" value="2">
                            "Mâle"
                        </label>
                    </div>
                </div>
                <div class="checkbox">
                    <div id="age">
                        <label class="checkbox-inline">
                            <input type="checkbox" id="age_1" name="age[]" value="1">
                            "Bébé"
                        </label>

                    </div>
                </div>

                <div class="checkbox">
                    <div id="age">
                        <label class="checkbox-inline">
                            <input type="checkbox" id="age_1" name="age[]" value="1">
                            "Junior"
                        </label>

                    </div>
                </div>

                <div class="checkbox">
                    <div id="age">
                        <label class="checkbox-inline">
                            <input type="checkbox" id="age_2" name="age[]" value="2">
                            "Adulte"
                        </label>

                    </div>
                </div>

                <div class="checkbox">
                    <div id="age">
                        <label class="checkbox-inline">
                            <input type="checkbox" id="age_3" name="age[]" value="3">
                            "Sénior"
                        </label>

                    </div>
                </div>
                <button type="submit" class="btn btn-style-1 btn-go-search search-otter-home">
                    Cherchez votre loutre !
                </button>
            </div>
        </div>
    </form>
</section>

<?php require_once 'includes/footer.php'; ?>
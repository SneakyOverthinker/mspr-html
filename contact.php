<?php require_once 'includes/header.php'; ?>
    <section id="contact">
        <div class="container">
            <form action="" method="POST">
                <div class="form-group">
                    <label for="first_name">Prénom</label>
                    <input type="text" id="first_name" class="form-control">
                </div>

                <div class="form-group">
                    <label for="last_name">Nom</label>
                    <input type="text" id="last_name" class="form-control">
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" id="email" class="form-control">
                </div>

                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" class="form-control"> </textarea>
                </div>
                <button class="btn2">
                    Envoyer
                </button>
            </form>
        </div>


<?php require_once 'includes/footer.php'; ?>
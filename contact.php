<?php require_once 'includes/header.php'; ?>

    <section id="contact-jumbotron"
             style=" background-image: url('https://zupimages.net/up/20/06/jf3b.jpg'); background-repeat: no-repeat; background-position: center center; background-size: cover; padding: 220px">
        <div class="container">
            <h1 class="display-4 text-white">Contact</h1>
        </div>
    </section>

    <section class="container">
        <div class="card card-body mt-5">
            <h2 class="h1-responsive font-weight-bold text-center my-4">Contactez-nous</h2>
            <p class="text-center w-responsive mx-auto mb-5">Si vous avez la moindre question contactez-nous ici
                ou par mail. Nous vous répondrons dans les plus brefs délais.</p>
            <div class="row">
                <div class="col-md-8">
                    <form id="contact-form" name="contact-form" action="mail.php" method="POST">
                        <!--Grid row-->
                        <div class="form-row">
                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name" class="">Votre nom</label>
                                    <input type="text" id="name" name="name" class="form-control">
                                </div>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email" class="">Votre e-mail</label>
                                    <input type="text" id="email" name="email" class="form-control">
                                </div>
                            </div>
                            <!--Grid column-->
                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="form-group">
                            <label for="subject" class="">Objet de votre message</label>
                            <input type="text" id="subject" name="subject" class="form-control">
                        </div>
                        <!--Grid row-->

                        <!--Grid row-->

                        <div class="form-group">
                            <label for="message">Votre message</label>
                            <textarea type="text" id="message" name="message" rows="2"
                                      class="form-control md-textarea"></textarea>
                        </div>
                        <!--Grid row-->

                        <button type="submit" class="btn btn-primary">
                            Envoyer
                        </button>
                    </form>
                </div>
                <!--Grid column-->
                <div class="col-md-4">

                    <div class="card bg-dark text-white mb-5">
                        <img class="card-img" src="public/images/loutrefun.jpg" alt="Card image">
                        <div class="card-body">
                            <h5 class="card-title">Où nous trouver</h5>
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <i class="fas fa-map-marker-alt fa-2x"></i>
                                    Nantes, 44200, France
                                </li>
                                <li>
                                    <i class="fas fa-phone mt-4 fa-2x"></i>
                                    + 06 98 37 67 46
                                </li>
                                <li>
                                    <i class="fas fa-envelope mt-4 fa-2x"></i>
                                    otters@gmail.com
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="py-1 my-5">
        <div class="container">
            <div class="row">
    <div class="container py-5">
        <div class="text-align-center">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="public/images/12" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="public/images/10" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="public/images/11" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="public/images/9" class="d-block w-100" alt="...">
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
        </div>
    </div>
    </div>
    </div>
    </section>

<?php require_once 'includes/footer.php'; ?>
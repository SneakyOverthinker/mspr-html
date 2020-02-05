<?php require_once 'includes/header.php'; ?>

    <section id="jumbotron"
             style=" background-image: url('https://static.lpnt.fr/images/2018/12/21/17792283lpw-17792282-article-jpg_5825528.jpg'); background-position: center center; background-size:cover; background-repeat: no-repeat; padding : 260px ">
        <div class="container">
            lorm ipsum
        </div>
    </section>
    <!-- Main navigation -->

    <section id="contact">

        <div class="container">
            <!--Section: Contact v.2-->
            <section class="mb-4">

                <!--Section heading-->
                <h2 class="h1-responsive font-weight-bold text-center my-4">Contactez-nous</h2>
                <!--Section description-->
                <p class="text-center w-responsive mx-auto mb-5">Si vous avez la moindre question contactez-nous ici ou
                    par mail. Nous vous répondrons dans les plus brefs délais.</p>

                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-9 mb-md-0 mb-5">
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

                    <!--Grid column-->
                    <div class="col-md-3 text-center">
                        <ul class="list-unstyled mb-0">
                            <li><i class="fas fa-map-marker-alt fa-2x"></i>
                                <p>Nantes, 44200, France</p>
                            </li>

                            <li><i class="fas fa-phone mt-4 fa-2x"></i>
                                <p>+ 06 98 37 67 46</p>
                            </li>

                            <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                                <p>otters@gmail.com</p>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->

                </div>
            </section>
        </div>
    </section>


    <div style="position:relative; height:400px">
        <div style="position:absolute;z-index:1">
            <img src="images/greenhouse.jpg">
        </div>
        <div style="position:absolute;top:360px; width:600px; height:400px; z-index:2;font-size:200%">
            <center><b>Ma maison...</b></center>
        </div>
    </div>

    <!--Section: Contact v.2-->

<?php require_once 'includes/footer.php'; ?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Louis Séguin</title>

        <link rel="stylesheet" href="styles/main.css" />

        <script src="scripts/main.js" defer></script>
    </head>

    <body>
        <div class="site-container">
            <header
                class="header"
                data-component="Header"
                data-scroll-limit="0.15"
                data-auto-hide="true"
            >
                <div class="header-wrapper">
                    <a href="index.html" class="logo">Louis Séguin</a>
                    <nav class="nav-primary">
                        <ul class="liste-nav">
                            <li>
                                <a href="index.html" class="nav-primary_item"
                                    >Accueil</a
                                >
                            </li>
                            <li>
                                <a
                                    href="page-projets.html"
                                    class="nav-primary_item"
                                    >Projets</a
                                >
                            </li>
                            <li>
                                <a
                                    href="page-a-propos.html"
                                    class="nav-primary_item"
                                    >À propos</a
                                >
                            </li>
                            <li>
                                <a
                                    href="page-contact.html"
                                    class="nav-primary_item"
                                    >Contact</a
                                >
                            </li>
                        </ul>
                    </nav>
                    <button class="menu-hamburger header__toggle js-toggle">
                        <img src="assets/images/btn-hamburger.png" alt="" />
                    </button>
                </div>
            </header>

            <section class="contact">
                <section class="wrapper">
                    <h1>Contact</h1>

                    <div class="contenu-contact">
                    
                    <?php
                            $message_sent = false;

                                if(isset($_POST['submit']) && $_POST['email'] != '' && $_POST['fullname'] != '' && $_POST['comment'] != '') {

                                    if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                                        $name = $_POST['fullname'];
                                        $subject ="Vous avez reçu un courriel de ".$name.";
                                        $mailFrom = $_POST['email'];
                                        $comment = $_POST['comment'];

                                        $mailTo = "info@louisseguin.com";
                                        $headers = "From: ".$mailFrom;
                                        $txt = $comment;


                                        mail($mailTo, $subject, $txt, $headers);

                                        $message_sent = true;
                                    }
                                }
                        ?>

                        <?php 
                        if($message_sent):
                        ?>
                        <h3>Merci!</h3>
                        <?php 
                        else:
                        ?>
                        <div class="form">
                            <form
                                action="page-contact.php"
                                class="form"
                                autocomplete="off"
                                data-component="Form"
                                method="post"
                            >
                                <div class="form_body">
                                    <fieldset class="grid">
                                        <div class="input">
                                            <label
                                                class="input_label"
                                                for="fullname"
                                                >Votre nom</label
                                            >
                                            <div class="border-contact">
                                                <input
                                                    class="input_element"
                                                    type="text"
                                                    name="fullname"
                                                    id="fullname"
                                                    placeholder="ex.: Jean-François"
                                                    required
                                                />
                                            </div>
                                        </div>

                                        <div class="input">
                                            <label
                                                class="input_label"
                                                for="email"
                                                >Votre courriel</label
                                            >
                                            <input
                                                class="input_element"
                                                type="email"
                                                name="email"
                                                id="email"
                                                placeholder="ex.: asdfg@hotmail.com"
                                                required
                                            />
                                        </div>
                                        <div
                                            class="
                                                input
                                                textarea
                                                u-grid-fullwidth
                                            "
                                        >
                                            <label
                                                class="input_label"
                                                for="comment"
                                                >Votre message</label
                                            >
                                            <textarea
                                                class="
                                                    input_element
                                                    comment-area
                                                "
                                                name="comment"
                                                id="comment"
                                                placeholder="Votre message ici..."
                                                required
                                            ></textarea>
                                        </div>
                                   
                                    </fieldset>     <button
                                            type="submit"
                                            name="submit"
                                            class="btn-form"
                                        >
                                            Envoyer
                                            <img
                                                class="coinBtn"
                                                src="assets/images/coin-btn.png"
                                                alt=""
                                            />
                                        </button>
                                </div>
                            </form> 
                            <?php endif;?>
                        </div>
                       

                        <div class="mes-reseaux-sociaux">
                            <div class="rs">
                                <img
                                    src="assets/images/logo-courriel.png"
                                    alt=""
                                    class="logo-rs"
                                />
                                <a
                                    href="mailto:info@louisseguin.com"
                                    class="lien-rs"
                                    >info@louisseguin.com</a
                                >
                            </div>
                            <div class="rs">
                                <img
                                    src="assets/images/logo-phone.png"
                                    alt=""
                                    class="logo-rs"
                                />
                                <a href="tel:438-497-6495" class="lien-rs"
                                    >438-497-6495</a
                                >
                            </div>
                            <div class="rs">
                                <img
                                    src="assets/images/logo-facebook.png"
                                    alt=""
                                    class="logo-rs"
                                />
                                <a
                                    href="https://www.facebook.com/louis1329"
                                    class="lien-rs"
                                    >Louis Séguin</a
                                >
                            </div>
                            <div class="rs">
                                <img
                                    src="assets/images/logo-linkedin.png"
                                    alt=""
                                    class="logo-rs"
                                />
                                <a
                                    href="https://www.linkedin.com/in/louis-s%C3%A9guin-897649220/"
                                    class="lien-rs"
                                    >Louis Séguin</a
                                >
                            </div>
                            <div class="rs">
                                <img
                                    src="assets/images/logo-github.png"
                                    alt=""
                                    class="logo-rs"
                                />
                                <a
                                    href="https://github.com/LouisSeguin1329"
                                    class="lien-rs"
                                    >LouisSeguin1329</a
                                >
                            </div>
                            <a
                                href="assets/pdf/Curriculum Vitae.pdf"
                                download
                                class="btn-cv"
                                >Télécharger mon CV</a
                            >
                        </div>
                    </div>
                </section>

                <div class="champi1"></div>
                <div class="champi2"></div>
                <div class="blob-contact"></div>
            </section>
        </div>
    </body>
</html>

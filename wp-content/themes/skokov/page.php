<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package skokov
 */

get_header();
?>
<main>
    <section class="hero">
        <div class="container hero__content">
            <div class="hero__content-item">
                <h1 class="hero__title">
                    Global management
                    consulting agency
                </h1>
                <p class="hero__text">
                    Growth doesn't always go the way you expect. Our
                    strategy consultants can help you climb.
                </p>
                <div class="hero__icon">
                    <div class="hero__icon-button">
                        <a href="page-zaglushka.php" class="button__icon button__text">
                            Get started
                        </a>
                    </div>
                    <div class="hero__icon-button">
                        <a href="page-zaglushka.php" class="button__icon">
                            <p class="button__text">Learn more</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero__profile">
            <div class="hero__profile-icon">
                <img src="<?php echo Q_IMG_DIR; ?>/chart_header.png" height="auto" width="100%"/>
                <div class="hero__profile-item-icon">
                    <a href="page-zaglushka.php">
                        <img src="<?php echo Q_IMG_DIR; ?>/3-layers.png" height="35" width="97"/>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="services">
        <div class="container services__content">
            <h2 class="services__content-title">
                our services
            </h2>
            <p class="services__content-subtitle">
                Our management consulting services focus on our clients'
                most critical issues and opportunities. We have proven
                a multiplier effect from optimizing the sum of the parts,
                not just the individual pieces.
            </p>
            <div class="services__item-services">
                <div class="item-services">
                    <div class="item-services__item">
                        <div class="item-services__icon">
                            <img src="<?php echo Q_IMG_DIR; ?>/icon-services-1.png" height="55" width="55"/>
                        </div>
                        <h3 class="item-services__title">
                            Performance<br>
                            Improvement
                        </h3>
                        <p class="item-services__text">
                            Enabling companies to grow
                            revenue, improve margins and
                            reposition quickly.
                        </p>
                    </div>
                </div>
                <div class="item-services">
                    <div class="item-services__item">
                        <div class="item-services__icon">
                            <img src="<?php echo Q_IMG_DIR; ?>/icon-services-2.png" height="55" width="55"/>
                        </div>
                        <h3 class="item-services__title">
                            Customer<br>
                            Strategy & Marketing
                        </h3>
                        <p class="item-services__text">
                            In-depth customer insights
                            combined with economic and
                            operational fundamentals
                        </p>
                    </div>
                </div>
                <div class="item-services">
                    <div class="item-services__item">
                        <div class="item-services__icon">
                            <img src="<?php echo Q_IMG_DIR; ?>/icon-services-3.png" height="55" width="55"/>
                        </div>
                        <h3 class="item-services__title">
                            Information<br>
                            Technology
                        </h3>
                        <p class="item-services__text">
                            Realizing the full potential
                            of IT resources, investments
                            and assets
                        </p>
                    </div>
                </div>
                <div class="item-services">
                    <div class="item-services__item">
                        <div class="item-services__icon">
                            <img src="<?php echo Q_IMG_DIR; ?>/icon-services-4.png" height="55" width="55"/>
                        </div>
                        <h3 class="item-services__title">
                            Full Potential<br>
                            Transformation
                        </h3>
                        <p class="item-services__text">
                            A cross-functional effort to alter
                            the financial, operational and
                            strategic trajectory of a business
                        </p>
                    </div>
                </div>
                <div class="item-services">
                    <div class="item-services__item">
                        <div class="item-services__icon">
                            <img src="<?php echo Q_IMG_DIR; ?>/icon-services-5.png" height="55" width="55"/>
                        </div>
                        <h3 class="item-services__title">
                            Strategy
                        </h3>
                        <p class="item-services__text">
                            Tailored solutions that deliver
                            results and achieve sustained
                            growth
                        </p>
                    </div>
                </div>
                <div class="item-services">
                    <div class="item-services__item">
                        <div class="item-services__icon">
                            <img src="<?php echo Q_IMG_DIR; ?>/icon-services-6.png" height="55" width="55"/>
                        </div>
                        <h3 class="item-services__title">
                            Private Equity
                        </h3>
                        <p class="item-services__text">
                            Advising investors across
                            the entire investment life
                            cycle
                        </p>
                    </div>
                </div>
                <div class="item-services">
                    <div class="item-services__item">
                        <div class="item-services__icon">
                            <img src="<?php echo Q_IMG_DIR; ?>/icon-services-7.png" height="55" width="55"/>
                        </div>
                        <h3 class="item-services__title">
                            Digital
                        </h3>
                        <p class="item-services__text">
                            Deliver on core strategy,
                            delight customers and operate
                            smarter and faster
                        </p>
                    </div>
                </div>
                <div class="item-services">
                    <div class="item-services__item">
                        <div class="item-services__icon">
                            <img src="<?php echo Q_IMG_DIR; ?>/icon-services-8.png" height="55" width="55"/>
                        </div>
                        <h3 class="item-services__title">
                            Results Delivery
                        </h3>
                        <p class="item-services__text">
                            Predicting, measuring and
                            managing risk associated with
                            change management
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-us contact-us__background">
        <div class="container">
            <p class="contact-us__title">
                Contact us for a FREE, NO OBLIGATION confidential
                exploration of your needs
            </p>
            <div class="contact-us__icon">
                <div class="contact-us__icon-button">
                    <a href="zaglushka.html" class="button__icon">
                        <p class="button__text">Contact Us</p>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="about-us container">
        <h2 class="about-us__title">
            about us
        </h2>
        <p class="about-us__subtitle">
            SKOKOV is one of the world's leading management consulting firms.
            We care for our clients' business as our
            own, they know we're in this together
        </p>
        <div class="about-us__content-col">
            <div class="about-us__content-row">
                <div class="about-us__content-row-item">
                    <h3 class="main__block-title">What we do</h3>
                    <p class="main__block-text-dark">
                        When someone asks what we do SKOKOV, it’s tempting to point out our
                        four-decade track record for helping to transform the world’s great companies
                        into sharper, smarter, better versions of themselves. It’s true, our mission is to
                        help management teams create such high levels of economic value that together
                        we redefine our respective industries.
                        We work with top executives to help them make better decisions, convert those
                        decisions to actions, and deliver the sustainable success they desire. For forty
                        years, we've been passionate about achieving better results for our
                        clients-results that go beyond financial and are uniquely tailored, pragmatic,
                        holistic, and enduring.
                        We advise global leaders on their most critical issues and opportunities: strategy,
                        marketing, organization, operations, technology, transformations and
                        mergers & acquisitions, across all industries and geographies.
                        Our unique approach to traditional change management, called
                        Results Delivery®, helps clients measure and manage risk and overcome the
                        odds to realize results.
                    </p>
                </div>
                <div class="about-us__content-row-item">
                    <h3 class="main__block-title">our clients</h3>
                    <div id="carouselExampleIndicators" class="main carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="about-us__content carousel-item active">
                                <img class="about-us__content-icon" src="<?php echo Q_IMG_DIR; ?>/icon-clients-1.png" height="185" width="185" alt="partners"/>
                                <img class="about-us__content-icon" src="<?php echo Q_IMG_DIR; ?>/icon-clients-2.png" height="185" width="185" alt="partners"/>
                                <img class="about-us__content-icon" src="<?php echo Q_IMG_DIR; ?>/icon-clients-3.png" height="185" width="185" alt="partners"/>
                                <img class="about-us__content-icon" src="<?php echo Q_IMG_DIR; ?>/icon-clients-4.png" height="185" width="185" alt="partners"/>
                                <img class="about-us__content-icon" src="<?php echo Q_IMG_DIR; ?>/icon-clients-5.png" height="185" width="185" alt="partners"/>
                                <img class="about-us__content-icon" src="<?php echo Q_IMG_DIR; ?>/icon-clients-6.png" height="185" width="185" alt="partners"/>
                            </div>
                            <div class="about-us__content carousel-item">
                                <img class="about-us__content-icon" src="<?php echo Q_IMG_DIR; ?>/icon-clients-1.png" height="185" width="185" alt="partners"/>
                                <img class="about-us__content-icon" src="<?php echo Q_IMG_DIR; ?>/icon-clients-2.png" height="185" width="185" alt="partners"/>
                                <img class="about-us__content-icon" src="<?php echo Q_IMG_DIR; ?>/icon-clients-3.png" height="185" width="185" alt="partners"/>
                                <img class="about-us__content-icon" src="<?php echo Q_IMG_DIR; ?>/icon-clients-4.png" height="185" width="185" alt="partners"/>
                                <img class="about-us__content-icon" src="<?php echo Q_IMG_DIR; ?>/icon-clients-5.png" height="185" width="185" alt="partners"/>
                                <img class="about-us__content-icon" src="<?php echo Q_IMG_DIR; ?>/icon-clients-6.png" height="185" width="185" alt="partners"/>
                            </div>
                            <div class="about-us__content carousel-item">
                                <img class="about-us__content-icon" src="<?php echo Q_IMG_DIR; ?>/icon-clients-1.png" height="185" width="185" alt="partners"/>
                                <img class="about-us__content-icon" src="<?php echo Q_IMG_DIR; ?>/icon-clients-2.png" height="185" width="185" alt="partners"/>
                                <img class="about-us__content-icon" src="<?php echo Q_IMG_DIR; ?>/icon-clients-3.png" height="185" width="185" alt="partners"/>
                                <img class="about-us__content-icon" src="<?php echo Q_IMG_DIR; ?>/icon-clients-4.png" height="185" width="185" alt="partners"/>
                                <img class="about-us__content-icon" src="<?php echo Q_IMG_DIR; ?>/icon-clients-5.png" height="185" width="185" alt="partners"/>
                                <img class="about-us__content-icon" src="<?php echo Q_IMG_DIR; ?>/icon-clients-6.png" height="185" width="185" alt="partners"/>
                            </div>
                        </div>
                        <ol class="main__carousel">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="main__carousel-item active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1" class="main__carousel-item"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2" class="main__carousel-item"></li>
                        </ol>
                    </div>
                </div>
            </div>
            <div>
                <h3 class="main__block-title">our team</h3>
                <div class="about-us__content-item-persons">
                    <div class="item-persons">
                        <div class="item-persons__img">
                            <img class="item-persons__icon" src="<?php echo Q_IMG_DIR; ?>/icon-person-3.png" width="100%" height="auto" />
                            <a href="zaglushka.html" class="item-persons__item">
                                <div class="item-persons__content">
                                    <h3 class="item-persons__content-title">
                                        Clark<br>
                                        Kent
                                    </h3>
                                    <div>
                                        <p class="item-persons__content-subtitle">
                                            Bad Debt Manager
                                        </p>
                                        <p class="item-persons__content-text">
                                            Team Leader
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="item-persons">
                        <div class="item-persons__img">
                            <img class="item-persons__icon" src="<?php echo Q_IMG_DIR; ?>/icon-person-3.png" width="100%" height="auto" />
                            <a href="zaglushka.html" class="item-persons__item">
                                <div class="item-persons__content">
                                    <h3 class="item-persons__content-title">
                                        Clark<br>
                                        Kent
                                    </h3>
                                    <div>
                                        <p class="item-persons__content-subtitle">
                                            Bad Debt Manager
                                        </p>
                                        <p class="item-persons__content-text">
                                            Team Leader
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="item-persons">
                        <div class="item-persons__img">
                            <img class="item-persons__icon" src="<?php echo Q_IMG_DIR; ?>/icon-person-3.png" width="100%" height="auto" />
                            <a href="zaglushka.html" class="item-persons__item">
                                <div class="item-persons__content">
                                    <h3 class="item-persons__content-title">
                                        Clark<br>
                                        Kent
                                    </h3>
                                    <div>
                                        <p class="item-persons__content-subtitle">
                                            Bad Debt Manager
                                        </p>
                                        <p class="item-persons__content-text">
                                            Team Leader
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="item-persons">
                        <div class="item-persons__img">
                            <img class="item-persons__icon" src="<?php echo Q_IMG_DIR; ?>/icon-person-3.png" width="100%" height="auto" />
                            <a href="zaglushka.html" class="item-persons__item">
                                <div class="item-persons__content">
                                    <h3 class="item-persons__content-title">
                                        Clark<br>
                                        Kent
                                    </h3>
                                    <div>
                                        <p class="item-persons__content-subtitle">
                                            Bad Debt Manager
                                        </p>
                                        <p class="item-persons__content-text">
                                            Team Leader
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="item-persons">
                        <div class="item-persons__img">
                            <img class="item-persons__icon" src="<?php echo Q_IMG_DIR; ?>/icon-person-3.png" width="100%" height="auto" />
                            <a href="zaglushka.html" class="item-persons__item">
                                <div class="item-persons__content">
                                    <h3 class="item-persons__content-title">
                                        Clark<br>
                                        Kent
                                    </h3>
                                    <div>
                                        <p class="item-persons__content-subtitle">
                                            Bad Debt Manager
                                        </p>
                                        <p class="item-persons__content-text">
                                            Team Leader
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="item-persons">
                        <div class="item-persons__img">
                            <img class="item-persons__icon" src="<?php echo Q_IMG_DIR; ?>/icon-person-3.png" width="100%" height="auto" />
                            <a href="zaglushka.html" class="item-persons__item">
                                <div class="item-persons__content">
                                    <h3 class="item-persons__content-title">
                                        Clark<br>
                                        Kent
                                    </h3>
                                    <div>
                                        <p class="item-persons__content-subtitle">
                                            Bad Debt Manager
                                        </p>
                                        <p class="item-persons__content-text">
                                            Team Leader
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="item-persons">
                        <div class="item-persons__img">
                            <img class="item-persons__icon" src="<?php echo Q_IMG_DIR; ?>/icon-person-3.png" width="100%" height="auto" />
                            <a href="zaglushka.html" class="item-persons__item">
                                <div class="item-persons__content">
                                    <h3 class="item-persons__content-title">
                                        Clark<br>
                                        Kent
                                    </h3>
                                    <div>
                                        <p class="item-persons__content-subtitle">
                                            Bad Debt Manager
                                        </p>
                                        <p class="item-persons__content-text">
                                            Team Leader
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="item-persons">
                        <div class="item-persons__img">
                            <img class="item-persons__icon" src="<?php echo Q_IMG_DIR; ?>/icon-person-3.png" width="100%" height="auto" />
                            <a href="zaglushka.html" class="item-persons__item">
                                <div class="item-persons__content">
                                    <h3 class="item-persons__content-title">
                                        Clark<br>
                                        Kent
                                    </h3>
                                    <div>
                                        <p class="item-persons__content-subtitle">
                                            Bad Debt Manager
                                        </p>
                                        <p class="item-persons__content-text">
                                            Team Leader
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="item-persons">
                        <div class="item-persons__img">
                            <img class="item-persons__icon" src="<?php echo Q_IMG_DIR; ?>/icon-person-3.png" width="100%" height="auto" />
                            <a href="zaglushka.html" class="item-persons__item">
                                <div class="item-persons__content">
                                    <h3 class="item-persons__content-title">
                                        Clark<br>
                                        Kent
                                    </h3>
                                    <div>
                                        <p class="item-persons__content-subtitle">
                                            Bad Debt Manager
                                        </p>
                                        <p class="item-persons__content-text">
                                            Team Leader
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="item-persons">
                        <div class="item-persons__img">
                            <img class="item-persons__icon" src="<?php echo Q_IMG_DIR; ?>/icon-person-3.png" width="100%" height="auto" />
                            <a href="zaglushka.html" class="item-persons__item">
                                <div class="item-persons__content">
                                    <h3 class="item-persons__content-title">
                                        Clark<br>
                                        Kent
                                    </h3>
                                    <div>
                                        <p class="item-persons__content-subtitle">
                                            Bad Debt Manager
                                        </p>
                                        <p class="item-persons__content-text">
                                            Team Leader
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="item-persons">
                        <div class="item-persons__img">
                            <img class="item-persons__icon" src="<?php echo Q_IMG_DIR; ?>/icon-person-3.png" width="100%" height="auto" />
                            <a href="zaglushka.html" class="item-persons__item">
                                <div class="item-persons__content">
                                    <h3 class="item-persons__content-title">
                                        Clark<br>
                                        Kent
                                    </h3>
                                    <div>
                                        <p class="item-persons__content-subtitle">
                                            Bad Debt Manager
                                        </p>
                                        <p class="item-persons__content-text">
                                            Team Leader
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="item-persons">
                        <div class="item-persons__img">
                            <img class="item-persons__icon" src="<?php echo Q_IMG_DIR; ?>/icon-person-3.png" width="100%" height="auto" />
                            <a href="zaglushka.html" class="item-persons__item">
                                <div class="item-persons__content">
                                    <h3 class="item-persons__content-title">
                                        Clark<br>
                                        Kent
                                    </h3>
                                    <div>
                                        <p class="item-persons__content-subtitle">
                                            Bad Debt Manager
                                        </p>
                                        <p class="item-persons__content-text">
                                            Team Leader
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>
    <section class="what-we-blend what-we-blend__background">
        <div class="container">
            <div class="what-we-blend__icon">
                <div class="what-we-blend__icon-button button__background">
                    <a href="zaglushka.html" class="button__click">
                        <i class="fas fa-play-circle"></i>
                    </a>
                </div>
            </div>
            <p class="what-we-blend__title">
                Contact us for a FREE, NO OBLIGATION confidential
                exploration of your needs
            </p>
            <p class="what-we-blend__text">
                When someone asks what we do at SKOKOV, it’s tempting to point out our four-decade track record for helping to transform
                the world’s great companies into sharper, smarter, better versions of themselves.
            </p>
        </div>
    </section>
    <section class="news">
        <div class="container news__content">
            <h2 class="news__content-title">
                news
            </h2>
            <p class="news__content-subtitle">
                Together, we find value across boundaries, develop insights to act on,
                and energize teams to sustain success. We're passionate about
                always doing the right thing for our clients, our people and our
                communities, even if it isn't easy.
            </p>
            <div class="news__item">
            </div>
        </div>
    </section>
    <section class="home-bottom">
        <div class="home-bottom__background">
            <div class="home-bottom__contact-background">
                <div class="home-bottom__contact-content container">
                    <div class="contact">
                        <div class="contact-one">
                            <div class="contact-one__logo">
                                <a class="logo" href="/">skokov</a>
                            </div>
                            <p class="main__block-text-light contact-one__after-text">
                                Thank you for your interest in SKOKOV. Please contact us using the
                                information below. To locate contacts in the SKOKOV office closest to
                                you, visit our office websites. To get the latest updates from SKOKOV,
                                subscribe to a newsletter or connect with us on social media.
                            </p>
                            <div>
                                <div class="contact-one__item">
                                    <div class="contact-one__item-icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <address class="contact-one__item-text">
                                        43 gagarina street, kharkov, ukraine
                                    </address>
                                </div>
                                <div class="contact-one__item">
                                    <div class="contact-one__item-icon">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                    <a href="tel: +380577770505" class="contact-one__item-text">+38 (057) 777-05-05</a>
                                </div>
                                <div class="contact-one__item">
                                    <div class="contact-one__item-icon">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <a href="mailto: mynameisskokov@gmail.com" class="contact-one__item-text"">mynameisskokov@gmail.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="contact">
                        <div class="contact-two">
                            <h3 class="main__block-title">contact</h3>
                            <p class="main__block-text-light">
                                Please contact us using contact form below.
                            </p>
                            <form class="contact-two__form">
                                <div class="form">
                                    <div class="form__input">
                                        <div>
                                            <label for="name" hidden="hidden">name</label>
                                            <input type="text" id="name" name="name" class="form__input-text" placeholder="Name">

                                            <label for="email" hidden="hidden">email</label>
                                            <input type="text" id="email" name="email" class="form__input-text" placeholder="E-mail">

                                            <label for="number" hidden="hidden">subject</label>
                                            <input type="tel" id="number" name="subject" class="form__input-text" placeholder="Subject">
                                        </div>
                                        <textarea id="message" name="message" class="form__input form__input-textarea" placeholder="Message"></textarea>
                                    </div>
                                    <div class="form__submit">
                                        <input type="submit" class="button__form" name="Send" value="Send">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php get_footer(); ?>
        </div>

    </section>
</main>

<!-- get_footer() in last section-->

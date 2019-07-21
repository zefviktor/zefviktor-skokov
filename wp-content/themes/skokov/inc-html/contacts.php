<?php
/**
 * Created by PhpStorm.
 * User: viktor
 * Date: 22.03.19
 * Time: 17:12
 */
?>


<section class="bottom">
            <div class="bottom__background">
                <div class="bottom__contact-background">
                    <div class="bottom__contact-content container">
                        <div class="contact">
                            <div class="contact-one">
                                <div class="contact-one__logo">
                                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                                        <h1 class="logo">skokov</h1>
                                    </a>
                                </div>
                                <p class="main__block-text-light contact-one__after-text">
                                    <?php echo get_theme_mod( 'zef_content_contacts__general-text' ); ?>
                                </p>
                                <div>
                                    <div class="contact-one__item">
                                        <div class="contact-one__item-icon">
                                            <i class="fas fa-map-marker-alt"></i>
                                        </div>
                                        <address class="contact-one__item-text">
                                            <?php echo get_theme_mod( 'zef_content_contacts__content-address' ); ?>
                                        </address>
                                    </div>
                                    <div class="contact-one__item">
                                        <div class="contact-one__item-icon">
                                            <i class="fas fa-phone"></i>
                                        </div>
                                        <a href="tel: +380577770505" class="contact-one__item-text">
                                            <?php echo get_theme_mod( 'zef_content_contacts__content-tel' ); ?>
                                        </a>
                                    </div>
                                    <div class="contact-one__item">
                                        <div class="contact-one__item-icon">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                        <a href="mailto: mynameisskokov@gmail.com" class="contact-one__item-text">
                                            <?php echo get_theme_mod( 'zef_content_contacts__content-email' ); ?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="contacts" class="contact">
                            <div class="contact-two">
                                <h3 class="main__block-title">
                                    <?php echo get_theme_mod( 'zef_content_contacts__form-title' ); ?>
                                </h3>
                                <p class="main__block-text-light">
                                    <?php echo get_theme_mod( 'zef_content_contacts__form-text' ); ?>
                                </p>
                                <form class="contact-two__form">
                                    <div class="form">
                                        <div class="form__input">
                                            <div>
                                                <label for="name" hidden="hidden">name</label>
                                                <input type="text" id="name" name="name" class="form__input-text" placeholder="Name">

                                                <label for="email" hidden="hidden">email</label>
                                                <input type="text" id="email" name="email" class="form__input-text" placeholder="E-mail">

                                                <label class="" for="number" hidden="hidden">subject</label>
                                                <input type="tel" id="number" name="subject" class="form__input-text" placeholder="Subject">
                                            </div>
                                            <textarea id="message" name="message" class="form__input-textarea" placeholder="Message"></textarea>
                                        </div>
                                        <div class="form__submit">
                                            <input class="button__form" type="submit"  name="Send" value="Send">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
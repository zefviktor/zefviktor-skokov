<?php
/*
Template Name: about
*/


get_header();
?>
    <main>
        <section class="hero">
            <div class="container hero__page-services">
                <a onclick="smoothScroll('about-us')">
                    <h1 class="hero__page-title">
                        About us
                    </h1>
                </a>
            </div>
            <?php require "inc-html/my-profile.php"; ?>
        </section>

        <?php require "inc-html/about.php"; ?>

<?php
get_footer();
?>

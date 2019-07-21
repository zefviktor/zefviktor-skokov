<?php
/**
 * skokov Theme Customizer
 *
 * @package skokov
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function skokov_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'skokov_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'skokov_customize_partial_blogdescription',
		) );
	}
}
add_action( 'customize_register', 'skokov_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function skokov_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function skokov_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function skokov_customize_preview_js() {
	wp_enqueue_script( 'skokov-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'skokov_customize_preview_js' );


// My code

function zef_register_theme_customizer( $wp_customize ) {


//*   add customizer-section     "Hero content"

    $wp_customize->add_section(
        'zef_content_hero',
        array(
            'title'     => 'Hero',
            'priority'  => 210
        )
    );




    //**   add customizer-section   label   "General title"

    $wp_customize->add_setting(
        'zef_content_hero__general-title',
        array(
            'default'    =>  '',
            'transport'  =>  'postMessage'
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'zef_content_hero__general-title',
            array(
                'label'      => __( 'General title', 'zef' ),
                'settings'   => 'zef_content_hero__general-title',
                'section'    => 'zef_content_hero',
                'type'       => 'textarea'
            )
        )
    );


    //**   add customizer-section   label   "General text"

    $wp_customize->add_setting(
        'zef_content_hero__general-text',
        array(
            'default'    =>  '',
            'transport'  =>  'postMessage'
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'zef_content_hero__general-text',
            array(
                'label'      => __( 'General text', 'zef' ),
                'settings'   => 'zef_content_hero__general-text',
                'section'    => 'zef_content_hero',
                'type'       => 'textarea'
            )
        )
    );

    //**   add customizer-section   label   "Button one"
        $wp_customize->add_setting(
            'zef_content_hero__button-one',
            array(
                'default'    =>  '',
                'transport'  =>  'postMessage'
            )
        );

        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'zef_content_hero__button-one',
                array(
                    'label'      => __( 'Button one', 'zef' ),
                    'settings'   => 'zef_content_hero__button-one',
                    'section'    => 'zef_content_hero',
                    'type'       => 'textarea'
                )
            )
        );

    //**   add customizer-section   label   "Button two"
        $wp_customize->add_setting(
            'zef_content_hero__button-two',
            array(
                'default'    =>  '',
                'transport'  =>  'postMessage'
            )
        );

        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'zef_content_hero__cbutton-two',
                array(
                    'label'      => __( 'Button two', 'zef' ),
                    'settings'   => 'zef_content_hero__button-two',
                    'section'    => 'zef_content_hero',
                    'type'       => 'textarea'
                )
            )
        );


    //*   add customizer-section     "Services"
        $wp_customize->add_section(
            'zef_content_services',
            array(
                'title'     => 'Services',
                'priority'  => 220
            )
        );

        //**   add customizer-section   label   "General title"
            $wp_customize->add_setting(
                'zef_content_services__general-title',
                array(
                    'default'    =>  '',
                    'transport'  =>  'postMessage'
                )
            );

            $wp_customize->add_control(
                new WP_Customize_Control(
                    $wp_customize,
                    'zef_content_services__general-title',
                    array(
                        'label'      => __( 'General title', 'zef' ),
                        'settings'   => 'zef_content_services__general-title',
                        'section'    => 'zef_content_services',
                        'type'       => 'textarea'
                    )
                )
            );
        //**   add customizer-section   label   "General title"
            $wp_customize->add_setting(
                'zef_content_services__general-text',
                array(
                    'default'    =>  '',
                    'transport'  =>  'postMessage'
                )
            );

            $wp_customize->add_control(
                new WP_Customize_Control(
                    $wp_customize,
                    'zef_content_services__general-text',
                    array(
                        'label'      => __( 'General title', 'zef' ),
                        'settings'   => 'zef_content_services__general-text',
                        'section'    => 'zef_content_services',
                        'type'       => 'textarea'
                    )
                )
            );


    //*   add customizer-section     "Contact-us"
        $wp_customize->add_section(
            'zef_content_contact-us',
            array(
                'title'     => 'Contact us',
                'priority'  => 230
            )
        );

        //**   add customizer-section   label   "General title"
            $wp_customize->add_setting(
                'zef_content_contact-us__general-title',
                array(
                    'default'    =>  '',
                    'transport'  =>  'postMessage'
                )
            );

            $wp_customize->add_control(
                new WP_Customize_Control(
                    $wp_customize,
                    'zef_content_contact-us__general-title',
                    array(
                        'label'      => __( 'General title', 'zef' ),
                        'settings'   => 'zef_content_contact-us__general-title',
                        'section'    => 'zef_content_contact-us',
                        'type'       => 'textarea'
                    )
                )
            );
        //**   add customizer-section   label   "Button one"
            $wp_customize->add_setting(
                'zef_content_contact-us__button-one',
                array(
                    'default'    =>  '',
                    'transport'  =>  'postMessage'
                )
            );

            $wp_customize->add_control(
                new WP_Customize_Control(
                    $wp_customize,
                    'zef_content_contact-us__button-one',
                    array(
                        'label'      => __( 'Button one', 'zef' ),
                        'settings'   => 'zef_content_contact-us__button-one',
                        'section'    => 'zef_content_contact-us',
                        'type'       => 'textarea'
                    )
                )
            );





    //*   add customizer-section     "About-us"
        $wp_customize->add_section(
            'zef_content_about-us',
            array(
                'title'     => 'About us',
                'priority'  => 240
            )
        );

        //**   add customizer-section   label   "General title"
            $wp_customize->add_setting(
                'zef_content_about-us__general-title',
                array(
                    'default'    =>  '',
                    'transport'  =>  'postMessage'
                )
            );

            $wp_customize->add_control(
                new WP_Customize_Control(
                    $wp_customize,
                    'zef_content_about-us__general-title',
                    array(
                        'label'      => __( 'General title', 'zef' ),
                        'settings'   => 'zef_content_about-us__general-title',
                        'section'    => 'zef_content_about-us',
                        'type'       => 'textarea'
                    )
                )
            );
        //**   add customizer-section   label   "General text"
            $wp_customize->add_setting(
                'zef_content_about-us__general-text',
                array(
                    'default'    =>  '',
                    'transport'  =>  'postMessage'
                )
            );

            $wp_customize->add_control(
                new WP_Customize_Control(
                    $wp_customize,
                    'zef_content_about-us__general-text',
                    array(
                        'label'      => __( 'General text', 'zef' ),
                        'settings'   => 'zef_content_about-us__general-text',
                        'section'    => 'zef_content_about-us',
                        'type'       => 'textarea'
                    )
                )
            );



    //*   add customizer-section     "What we do"
        $wp_customize->add_section(
            'zef_content_what-we-do',
            array(
                'title'     => 'What we do',
                'priority'  => 250
            )
        );

        //**   add customizer-section   label   "General title"
            $wp_customize->add_setting(
                'zef_content_what-we-do__general-title',
                array(
                    'default'    =>  '',
                    'transport'  =>  'postMessage'
                )
            );

            $wp_customize->add_control(
                new WP_Customize_Control(
                    $wp_customize,
                    'zef_content_what-we-do__general-title',
                    array(
                        'label'      => __( 'General title', 'zef' ),
                        'settings'   => 'zef_content_what-we-do__general-title',
                        'section'    => 'zef_content_what-we-do',
                        'type'       => 'textarea'
                    )
                )
            );
        //**   add customizer-section   label   "General text"
            $wp_customize->add_setting(
                'zef_content_what-we-do__general-text',
                array(
                    'default'    =>  '',
                    'transport'  =>  'postMessage'
                )
            );

            $wp_customize->add_control(
                new WP_Customize_Control(
                    $wp_customize,
                    'zef_content_what-we-do__general-text',
                    array(
                        'label'      => __( 'General text', 'zef' ),
                        'settings'   => 'zef_content_what-we-do__general-text',
                        'section'    => 'zef_content_what-we-do',
                        'type'       => 'textarea'
                    )
                )
            );



    //*   add customizer-section     "Our Clients"
        $wp_customize->add_section(
            'zef_content_our-clients',
            array(
                'title'     => 'Our clients',
                'priority'  => 260
            )
        );

        //**   add customizer-section   label   "General title"
            $wp_customize->add_setting(
                'zef_content_our-clients__general-title',
                array(
                    'default'    =>  '',
                    'transport'  =>  'postMessage'
                )
            );

            $wp_customize->add_control(
                new WP_Customize_Control(
                    $wp_customize,
                    'zef_content_our-clients__general-title',
                    array(
                        'label'      => __( 'General title', 'zef' ),
                        'settings'   => 'zef_content_our-clients__general-title',
                        'section'    => 'zef_content_our-clients',
                        'type'       => 'textarea'
                    )
                )
            );



    //*   add customizer-section     "Our team"
        $wp_customize->add_section(
            'zef_content_our-team',
            array(
                'title'     => 'Our team',
                'priority'  => 270
            )
        );

        //**   add customizer-section   label   "General title"
            $wp_customize->add_setting(
                'zef_content_our-team__general-title',
                array(
                    'default'    =>  '',
                    'transport'  =>  'postMessage'
                )
            );

            $wp_customize->add_control(
                new WP_Customize_Control(
                    $wp_customize,
                    'zef_content_our-team__general-title',
                    array(
                        'label'      => __( 'General title', 'zef' ),
                        'settings'   => 'zef_content_our-team__general-title',
                        'section'    => 'zef_content_our-team',
                        'type'       => 'textarea'
                    )
                )
            );

    //*   add customizer-section     "What we blend"
        $wp_customize->add_section(
            'zef_content_what-we-blend',
            array(
                'title'     => 'What we blend',
                'priority'  => 280
            )
        );

        //**   add customizer-section   label   "General title"
            $wp_customize->add_setting(
                'zef_content_what-we-blend__general-title',
                array(
                    'default'    =>  '',
                    'transport'  =>  'postMessage'
                )
            );

            $wp_customize->add_control(
                new WP_Customize_Control(
                    $wp_customize,
                    'zef_content_what-we-blend__general-title',
                    array(
                        'label'      => __( 'General title', 'zef' ),
                        'settings'   => 'zef_content_what-we-blend__general-title',
                        'section'    => 'zef_content_what-we-blend',
                        'type'       => 'textarea'
                    )
                )
            );
        //**   add customizer-section   label   "General text"
            $wp_customize->add_setting(
                'zef_content_what-we-blend__general-text',
                array(
                    'default'    =>  '',
                    'transport'  =>  'postMessage'
                )
            );

            $wp_customize->add_control(
                new WP_Customize_Control(
                    $wp_customize,
                    'zef_content_what-we-blend__general-text',
                    array(
                        'label'      => __( 'General text', 'zef' ),
                        'settings'   => 'zef_content_what-we-blend__general-text',
                        'section'    => 'zef_content_what-we-blend',
                        'type'       => 'textarea'
                    )
                )
            );


    //*   add customizer-section     "News"
        $wp_customize->add_section(
            'zef_content_news',
            array(
                'title'     => 'News',
                'priority'  => 290
            )
        );

        //**   add customizer-section   label   "General title"
            $wp_customize->add_setting(
                'zef_content_news__general-title',
                array(
                    'default'    =>  '',
                    'transport'  =>  'postMessage'
                )
            );

            $wp_customize->add_control(
                new WP_Customize_Control(
                    $wp_customize,
                    'zef_content_news__general-title',
                    array(
                        'label'      => __( 'General title', 'zef' ),
                        'settings'   => 'zef_content_news__general-title',
                        'section'    => 'zef_content_news',
                        'type'       => 'textarea'
                    )
                )
            );
        //**   add customizer-section   label   "General text"
            $wp_customize->add_setting(
                'zef_content_news__general-text',
                array(
                    'default'    =>  '',
                    'transport'  =>  'postMessage'
                )
            );

            $wp_customize->add_control(
                new WP_Customize_Control(
                    $wp_customize,
                    'zef_content_news__general-text',
                    array(
                        'label'      => __( 'General text', 'zef' ),
                        'settings'   => 'zef_content_news__general-text',
                        'section'    => 'zef_content_news',
                        'type'       => 'textarea'
                    )
                )
            );


    //*   add customizer-section     "Contacts"
        $wp_customize->add_section(
            'zef_content_contacts',
            array(
                'title'     => 'Contacts',
                'priority'  => 300
            )
        );

        //**   add customizer-section   label   "Contacts text"
            $wp_customize->add_setting(
                'zef_content_contacts__general-text',
                array(
                    'default'    =>  '',
                    'transport'  =>  'postMessage'
                )
            );

            $wp_customize->add_control(
                new WP_Customize_Control(
                    $wp_customize,
                    'zef_content_contacts__general-text',
                    array(
                        'label'      => __( 'General title', 'zef' ),
                        'settings'   => 'zef_content_contacts__general-text',
                        'section'    => 'zef_content_contacts',
                        'type'       => 'textarea'
                    )
                )
            );

        //**   add customizer-section   label   "Content address"
            $wp_customize->add_setting(
                'zef_content_contacts__content-address',
                array(
                    'default'    =>  '',
                    'transport'  =>  'postMessage'
                )
            );

            $wp_customize->add_control(
                new WP_Customize_Control(
                    $wp_customize,
                    'zef_content_contacts__content-address',
                    array(
                        'label'      => __( 'Content address', 'zef' ),
                        'settings'   => 'zef_content_contacts__content-address',
                        'section'    => 'zef_content_contacts',
                        'type'       => 'text'
                    )
                )
            );

        //**   add customizer-section   label   "Content tel"
            $wp_customize->add_setting(
                'zef_content_contacts__content-tel',
                array(
                    'default'    =>  '',
                    'transport'  =>  'postMessage'
                )
            );

            $wp_customize->add_control(
                new WP_Customize_Control(
                    $wp_customize,
                    'zef_content_contacts__content-tel',
                    array(
                        'label'      => __( 'Content tel', 'zef' ),
                        'settings'   => 'zef_content_contacts__content-tel',
                        'section'    => 'zef_content_contacts',
                        'type'       => 'text'
                    )
                )
            );

        //**   add customizer-section   label   "Content email"
            $wp_customize->add_setting(
                'zef_content_contacts__content-email',
                array(
                    'default'    =>  '',
                    'transport'  =>  'postMessage'
                )
            );

            $wp_customize->add_control(
                new WP_Customize_Control(
                    $wp_customize,
                    'zef_content_contacts__content-email',
                    array(
                        'label'      => __( 'Content tel', 'zef' ),
                        'settings'   => 'zef_content_contacts__content-email',
                        'section'    => 'zef_content_contacts',
                        'type'       => 'text'
                    )
                )
            );

    //**   add customizer-section   label   "Content email"
        $wp_customize->add_setting(
            'zef_content_contacts__form-title',
            array(
                'default'    =>  '',
                'transport'  =>  'postMessage'
            )
        );

        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'zef_content_contacts__form-title',
                array(
                    'label'      => __( 'Form title', 'zef' ),
                    'settings'   => 'zef_content_contacts__form-title',
                    'section'    => 'zef_content_contacts',
                    'type'       => 'text'
                )
            )
        );

    //**   add customizer-section   label   "Content email"
        $wp_customize->add_setting(
            'zef_content_contacts__form-text',
            array(
                'default'    =>  '',
                'transport'  =>  'postMessage'
            )
        );

        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'zef_content_contacts__form-text',
                array(
                    'label'      => __( 'form-text', 'zef' ),
                    'settings'   => 'zef_content_contacts__form-text',
                    'section'    => 'zef_content_contacts',
                    'type'       => 'text'
                )
            )
        );


    //*   add customizer-section     "Footer"
        $wp_customize->add_section(
            'zef_content_footer',
            array(
                'title'     => 'Footer',
                'priority'  => 310
            )
        );
        //**   add customizer-section   label   "General text"
            $wp_customize->add_setting(
                'zef_content_footer__general-text',
                array(
                    'default'    =>  '',
                    'transport'  =>  'postMessage'
                )
            );

            $wp_customize->add_control(
                new WP_Customize_Control(
                    $wp_customize,
                    'zef_content_footer__general-text',
                    array(
                        'label'      => __( 'General text', 'zef' ),
                        'settings'   => 'zef_content_footer__general-text',
                        'section'    => 'zef_content_footer',
                        'type'       => 'textarea'
                    )
                )
            );

        }
add_action( 'customize_register', 'zef_register_theme_customizer' );
<?php

$demo_templates_lists = array(

    'relax-spa' => array(
        'title' => __( 'Relax Spa', 'tbthemes-demo-import' ),/*Title*/
        'is_pro' => false,  /*Premium*/
        'type' => 'free',
        'author' => __( 'thebootstrapthemes', 'tbthemes-demo-import' ),    /*Author Name*/
        'keywords' => array( 'Relax', 'Spa', 'Fitness' ),  /*Search keyword*/
        'categories' => array( 'fitness' ), /*Categories*/
        'template_url' => array(
            'content' => TBTHEMES_DEMO_IMPORT_TEMPLATE_URL.'relax-spa/free/content.json',
            'options' => TBTHEMES_DEMO_IMPORT_TEMPLATE_URL.'relax-spa/free/options.json',
            'widgets' => TBTHEMES_DEMO_IMPORT_TEMPLATE_URL.'relax-spa/free/widgets.json'
        ),
        'screenshot_url' => TBTHEMES_DEMO_IMPORT_TEMPLATE_URL.'relax-spa/free/screenshot.png',
        'demo_url' => 'https://thebootstrapthemes.com/previews/relax-spa/',
        'plugins' => array()
    ),

     'relax-spa-pro' => array(
        'title' => __( 'Relax Spa Pro', 'tbthemes-demo-import' ),/*Title*/
        'is_pro' => true,  /*Premium*/
        'pro_url' => 'https://thebootstrapthemes.com/previews/relax-spa-pro/',
        'type' => 'free',
        'author' => __( 'thebootstrapthemes', 'tbthemes-demo-import' ),    /*Author Name*/
        'keywords' => array( 'Relax', 'Spa', 'Fitness' ),  /*Search keyword*/
        'categories' => array( 'fitness' ), /*Categories*/
        'template_url' => array(
            'content' => TBTHEMES_DEMO_IMPORT_TEMPLATE_URL.'relax-spa/pro/content.json',
            'options' => TBTHEMES_DEMO_IMPORT_TEMPLATE_URL.'relax-spa/pro/options.json',
            'widgets' => TBTHEMES_DEMO_IMPORT_TEMPLATE_URL.'relax-spa/pro/widgets.json'
        ),
        'screenshot_url' => TBTHEMES_DEMO_IMPORT_TEMPLATE_URL.'relax-spa/pro/screenshot.png',
        'demo_url' => 'https://thebootstrapthemes.com/previews/relax-spa-pro/',
        'plugins' => array()
    ),
    


);
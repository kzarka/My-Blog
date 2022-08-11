<?php

$demo_templates_lists = array(

    'bootstrap-coach' => array(
        'title' => __( 'Bootstrap Coach', 'tbthemes-demo-import' ),/*Title*/
        'is_pro' => false,  /*Premium*/
        'type' => 'free',
        'author' => __( 'thebootstrapthemes', 'tbthemes-demo-import' ),    /*Author Name*/
        'keywords' => array( 'Travel Agency' ),  /*Search keyword*/
        'categories' => array( 'life' ), /*Categories*/
        'template_url' => array(
            'content' => TBTHEMES_DEMO_IMPORT_TEMPLATE_URL.'bootstrap-coach/free/content.json',
            'options' => TBTHEMES_DEMO_IMPORT_TEMPLATE_URL.'bootstrap-coach/free/options.json',
            'widgets' => TBTHEMES_DEMO_IMPORT_TEMPLATE_URL.'bootstrap-coach/free/widgets.json'
        ),
        'screenshot_url' => TBTHEMES_DEMO_IMPORT_TEMPLATE_URL.'bootstrap-coach/free/screenshot.png',
        'demo_url' => 'https://thebootstrapthemes.com/previews/bootstrap-coach/',
        'plugins' => array()
    ),

     'bootstrap-coach-pro' => array(
        'title' => __( 'Bootstrap Coach Pro', 'tbthemes-demo-import' ),/*Title*/
        'is_pro' => true,  /*Premium*/
        'pro_url' => 'https://thebootstrapthemes.com/previews/bootstrap-coach-pro/',
        'type' => 'free',
        'author' => __( 'thebootstrapthemes', 'tbthemes-demo-import' ),    /*Author Name*/
        'keywords' => array( 'Travel Agency' ),  /*Search keyword*/
        'categories' => array( 'life' ), /*Categories*/
        'template_url' => array(
            'content' => TBTHEMES_DEMO_IMPORT_TEMPLATE_URL.'bootstrap-coach/pro/content.json',
            'options' => TBTHEMES_DEMO_IMPORT_TEMPLATE_URL.'bootstrap-coach/pro/options.json',
            'widgets' => TBTHEMES_DEMO_IMPORT_TEMPLATE_URL.'bootstrap-coach/pro/widgets.json'
        ),
        'screenshot_url' => TBTHEMES_DEMO_IMPORT_TEMPLATE_URL.'bootstrap-coach/pro/screenshot.png',
        'demo_url' => 'https://thebootstrapthemes.com/previews/bootstrap-coach-pro/',
        'plugins' => array()
    ),
    


);
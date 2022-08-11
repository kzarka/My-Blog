<?php

$demo_templates_lists = array(

    'bootstrap-fitness' => array(
        'title' => __( 'Bootstrap Fitness', 'tbthemes-demo-import' ),/*Title*/
        'is_pro' => false,  /*Premium*/
        'type' => 'free',
        'author' => __( 'thebootstrapthemes', 'tbthemes-demo-import' ),    /*Author Name*/
        'keywords' => array( 'Fitness' ),  /*Search keyword*/
        'categories' => array( 'health' ), /*Categories*/
        'template_url' => array(
            'content' => TBTHEMES_DEMO_IMPORT_TEMPLATE_URL.'bootstrap-fitness/free/content.json',
            'options' => TBTHEMES_DEMO_IMPORT_TEMPLATE_URL.'bootstrap-fitness/free/options.json',
            'widgets' => TBTHEMES_DEMO_IMPORT_TEMPLATE_URL.'bootstrap-fitness/free/widgets.json'
        ),
        'screenshot_url' => TBTHEMES_DEMO_IMPORT_TEMPLATE_URL.'bootstrap-fitness/free/screenshot.png',
        'demo_url' => 'https://thebootstrapthemes.com/previews/bootstrap-fitness/',
        'plugins' => array()
    ),

     'bootstrap-fitness-pro' => array(
        'title' => __( 'Bootstrap Fitness Pro', 'tbthemes-demo-import' ),/*Title*/
        'is_pro' => true,  /*Premium*/
        'pro_url' => 'https://thebootstrapthemes.com/previews/bootstrap-fitness-pro/',
        'type' => 'free',
        'author' => __( 'thebootstrapthemes', 'tbthemes-demo-import' ),    /*Author Name*/
        'keywords' => array( 'Fitness' ),  /*Search keyword*/
        'categories' => array( 'health' ), /*Categories*/
        'template_url' => array(
            'content' => TBTHEMES_DEMO_IMPORT_TEMPLATE_URL.'bootstrap-fitness/pro/content.json',
            'options' => TBTHEMES_DEMO_IMPORT_TEMPLATE_URL.'bootstrap-fitness/pro/options.json',
            'widgets' => TBTHEMES_DEMO_IMPORT_TEMPLATE_URL.'bootstrap-fitness/pro/widgets.json'
        ),
        'screenshot_url' => TBTHEMES_DEMO_IMPORT_TEMPLATE_URL.'bootstrap-fitness/pro/screenshot.png',
        'demo_url' => 'https://thebootstrapthemes.com/previews/bootstrap-fitness-pro/',
        'plugins' => array()
    ),
    


);
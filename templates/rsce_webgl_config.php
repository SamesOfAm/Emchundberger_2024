<?php
// rsce_my_element_config.php
return array(
    'label' => array('WebGL', 'Beschreibung...'),
    'types' => array('content', 'module'),
    'contentCategory' => 'texts',
    'moduleCategory' => 'miscellaneous',
    'beTemplate' => 'be_wildcard',
    'standardFields' => array(''),
    'wrapper' => array(
        'type' => 'none',
    ),
    'fields' => array(
        'modelScript' => array(
            'label' => array('3D-Modell (JS-Skript aus Dateiverwaltung)', ''),
            'inputType' => 'fileTree',
            'eval' => ['files' => true, 'filesOnly' => true, 'extensions' => 'js', 'path' => 'files/scripts'],
        ),
        'buttonText1' => array(
            'label' => array('Text auf Button 1'),
            'inputType' => 'text',
            'eval' => ['tl_class' => 'w50']
        ),
        'articleId1' => array(
            'label' => array('Artikelauswahl Inhalt 1', ''),
            'inputType' => 'select',
            'options_callback' => array('tl_content', 'getArticleAlias'),
            'eval' => ['tl_class'=>'w50']
        ),
        'buttonText2' => array(
            'label' => array('Text auf Button 2'),
            'inputType' => 'text',
            'eval' => ['tl_class' => 'w50']
        ),
        'articleId2' => array(
            'label' => array('Artikelauswahl Inhalt 2', ''),
            'inputType' => 'select',
            'options_callback' => array('tl_content', 'getArticleAlias'),
            'eval' => ['tl_class'=>'w50']
        ),
        'buttonText3' => array(
            'label' => array('Text auf Button 3'),
            'inputType' => 'text',
            'eval' => ['tl_class' => 'w50']
        ),
        'articleId3' => array(
            'label' => array('Artikelauswahl Inhalt 3', ''),
            'inputType' => 'select',
            'options_callback' => array('tl_content', 'getArticleAlias'),
            'eval' => ['tl_class'=>'w50']
        ),
        'articleId4' => array(
            'label' => array('Artikelauswahl Inhalt 4', ''),
            'inputType' => 'select',
            'options_callback' => array('tl_content', 'getArticleAlias'),
            'eval' => ['tl_class'=>'w50']
        ),
        'articleId5' => array(
            'label' => array('Artikelauswahl Inhalt 5', ''),
            'inputType' => 'select',
            'options_callback' => array('tl_content', 'getArticleAlias'),
            'eval' => ['tl_class'=>'w50']
        ),
        'articleId6' => array(
            'label' => array('Artikelauswahl Inhalt 6', ''),
            'inputType' => 'select',
            'options_callback' => array('tl_content', 'getArticleAlias'),
            'eval' => ['tl_class'=>'w50']
        ),
        'articleId7' => array(
            'label' => array('Artikelauswahl Inhalt 7', ''),
            'inputType' => 'select',
            'options_callback' => array('tl_content', 'getArticleAlias'),
            'eval' => ['tl_class'=>'w50']
        ),
        'articleId8' => array(
            'label' => array('Artikelauswahl Inhalt 8', ''),
            'inputType' => 'select',
            'options_callback' => array('tl_content', 'getArticleAlias'),
            'eval' => ['tl_class'=>'w50']
        ),
        'articleId9' => array(
            'label' => array('Artikelauswahl Inhalt 9', ''),
            'inputType' => 'select',
            'options_callback' => array('tl_content', 'getArticleAlias'),
            'eval' => ['tl_class'=>'w50']
        ),
    ),
);
<?php
/**
 *    This file is part of oxidtest
 *
 * @author    Peter Hoffmann
 */

/**
 * Metadata version
 */
$sMetadataVersion = '0.0.1';

/**
 * Module information
 */
$aModule = array(
    'id'           => 'oxidtest',
    'title'        => 'OxidTest Module',
    'description'  => 'OxidTest Module zum erstellen einer unabh�ngigen Seite',
    'version'      => '0.0.1',
    'author'       => 'Peter Hoffmann',
    'url'          => '',
    'email'        => '',
    'extend'       => array(
        'oxidtest'      => 'oxidtest/views/oxidtest'
    ),
    'templates' => array(
        'oxidtest.tpl' 	=> 'oxidtest/out/tpl/oxidtest.tpl'
    ),
);
<?php

/**
 * @param $path
 *
 * @return string
 */
function asset($path){
    return get_template_directory_uri()."/{$path}";
}


/**
 * @param $path
 *
 * @return string
 */
function link_js($path){
    $path = asset($path);
    return "<script src=\"{$path}\"></script>";
}


/**
 * @param $path
 *
 * @return string
 */
function link_css($path){
    $path = asset($path);
    return "<link rel=\"stylesheet\" href=\"{$path}\" />";
}


/**
 * @param $mix
 */
function dd($mix){
    die(var_dump($mix));
}


/**
 * @param $ref_id
 *
 * @return null|string
 */
function is_active($ref_id){
    return get_the_ID() == $ref_id ? 'active' : null;
}
<?php
/*
    Jacob Landowski
    Shahbaz Iqbal
    1-30-18
*/

/**
 * Validate a color
 *   
 * @param String color
 * @return boolean
 */
function validColor($color)
{
    global $f3;
    return in_array($color, $f3->get('colors'));    
}

/**
 *  Validate a string
 * 
 *  @param String str
 *  @return boolean
 */
function validString($str)
{
    return !empty($str) && ctype_alpha(str);
}

$errors = [];

if(!validColor($color))
{
    $errors['color'] = 'Please choose a valid color.';
}

if(!validString($name))
{
    $errors['name'] = 'Please enter a valid pet name.';
}

if(!validString($type))
{
    $errors['type'] = 'Please enter a valid pet type.';
}

$success = empty($errors);
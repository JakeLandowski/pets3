<?php

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
    return !empty(str) && ctype_alpha(str);
}
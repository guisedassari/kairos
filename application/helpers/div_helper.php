<?php

function div_open($class = NULL, $id = NULL)
{
    $code   = '<div ';
    $code   .= ( $class != NULL )   ? 'class="'. $class .'" '   : '';
    $code   .= ( $id != NULL )      ? 'id="'. $id .'" '         : '';
    $code   .= '>';
    return $code;
}

function div_close()
{
    return '</div>';
}
 
//como usar 
//echo div_open('some_class', 'some_id');
//echo 'some content...';
//echo div_close();
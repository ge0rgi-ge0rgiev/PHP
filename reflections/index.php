<?php

require_once './MyReflectionFunction.php';

/**
 * myFunction function
 * 
 * @param string $parameter1 required
 * @param mixed $parameter2 optional
 */
function myFunction(& $parameter1, $parameter2 = '') {
    echo $parameter1 . ' ' . $parameter2;
}

MyReflectionFunction::getSummary('implode');





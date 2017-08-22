<?php
//obtener url completa
function url(){
  return sprintf(
    "%s://%s%s",
    isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
    $_SERVER['SERVER_NAME'],
    $_SERVER['REQUEST_URI']
  );
}

//buscar valor en un array bidimensional
function searchForId($array, $field, $value) {
   foreach ($array as $key => $val) {
       if ($val[$field] === $value) {
           return $key;
       }
   }
   return null;
}

?>
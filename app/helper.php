<?php

// Important Function

// echo 'Hello';    //show every page

if (!function_exists('p')) {
  function p($data)
  {
    echo "<pre>";
    print_r($data);
    echo "<pre>";
  }
}
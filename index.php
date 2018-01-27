<?php
  $arr = [
  `cms` =>[ `joomla` , `wordpress` , `drupal`],
  `colors` => [ `blue` => `голубой`, `red`=> `красный`, `green`=> `зеленный`]
  ];
echo $arr[`cms`][0]; //joomla
echo $arr[`cms`][2]; //drupal
echo $arr[`colors`][`green`]; //зеленный
echo $arr[`colors`][`red`]; //красный
  ?>

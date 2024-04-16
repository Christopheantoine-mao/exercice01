<?php

// Question 1
$user = [
  'firstname' => 'john',
  'lastname' => 'doe',
  'email' => 'john@doe.com',
  'birthday' => '01/01/1970',
  'city' => 'London',
  'country' => 'UK',
];
var_dump($user);

// Question 2

$nbs = [200, 10];
$nb1 = $nbs[0];
$nb2 = $nbs[1];

echo 'Addition : '.$nb1.' + '.$nb2. ' = '.$nb1 + $nb2. '</br>';
echo 'Soustraction : '.$nb1.' - '.$nb2. ' = '.($nb1 - $nb2). '</br>';
echo 'Multiplication : '.$nb1.' * '.$nb2. ' = '.($nb1 * $nb2). '</br>';
echo 'Division : '.$nb1.' / '.$nb2. ' = '.($nb1 / $nb2). '</br>';
echo 'Division entière : '.$nb1.' / '.$nb2. ' = '.intdiv($nb1, $nb2). '</br>';
echo 'Modulo (reste d\'une division entière) : '.$nb1.' % '.$nb2. ' = '.($nb1 % $nb2). '</br>';
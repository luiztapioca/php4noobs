<?php

/*
 *
 * codigos de nullsafe evitam codigos como:
 *
 * if ($session !== null) {
 *      $user = $session->user;
 *
 *      if($user !== null) {
 *          $address = $user->getAddress();
 *
 *          if($address !== null) {
 *              $country = $address->country;
 *          }
 *      }
 *
 * }
 */

$country = $session?->user?->getAddress()?->country;
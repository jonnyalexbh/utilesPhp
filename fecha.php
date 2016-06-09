<?php

/*
 * Jonnyalexbh
 * @Descripcion: Manejo fechas
 */

$date = new DateTime("4000-01-01");
// "-2209078800"
echo $date->format("U");
// false
echo $date->getTimestamp();


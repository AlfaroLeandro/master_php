<?php

require_once '../vendor/autoload.php';

$foto_original = 'colab.png';
$guardar_en = 'colab_mod.png';

$thumb = new PHPThumb\GD($foto_original, array(), array());
$thumb->resize(50,50);
$thumb->show();
$thumb->save($guardar_en);

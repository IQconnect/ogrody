<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
];

$textBox = new FieldsBuilder('text-box', ['label' => 'Box z tekstem']);

$textBox
    ->addTextarea('text', ['rows' => 4, 'new_lines' => 'br', 'label' => 'Tekst'])
    ->addImage('image',['label' => 'Zdjęcie w rogach']);

return $textBox;
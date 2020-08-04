<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
];

$realizations = new FieldsBuilder('realizations', ['label' => 'Realizacje']);

$realizations
    ->addText('title', ['label' => 'Tytuł'])
    ->addTextarea('desc', ['rows' => 4, 'new_lines' => 'br', 'label' => 'Tekst'])
    ->addImage('bg',['label' => 'Tło'])
    ->addRepeater('realizations', ['label' => 'Realizacje'])
        ->addImage('image',['label' => 'Zdjęcie', 'wrapper' => ['width' => '80%']]);

return $realizations;
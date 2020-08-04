<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
];

$services = new FieldsBuilder('services', ['label' => 'Usługi']);

$services
    ->addText('title', ['label' => 'Tytuł'])
    ->addImage('lcorner',['label' => 'Zdjęcie w lewym rogu', 'wrapper' => ['width' => '50%']])
    ->addImage('rcorner',['label' => 'Zdjęcie w prawym rogu', 'wrapper' => ['width' => '50%']])
    ->addText('s1', ['label' => 'Usługa 1'])
    ->addTextarea('s1desc', ['rows' => 4, 'new_lines' => 'br', 'label' => 'Opis usługi'])
    ->addImage('s1img',['label' => 'Zdjęcie w rogach'])
    ->addText('s2', ['label' => 'Usługa 2'])
    ->addTextarea('s2desc', ['rows' => 4, 'new_lines' => 'br', 'label' => 'Opis usługi'])
    ->addImage('s2img',['label' => 'Zdjęcie w rogach'])
    ->addText('s3', ['label' => 'Usługa 3'])
    ->addTextarea('s3desc', ['rows' => 4, 'new_lines' => 'br', 'label' => 'Opis usługi'])
    ->addText('s4', ['label' => 'Usługa 4'])
    ->addTextarea('s4desc', ['rows' => 4, 'new_lines' => 'br', 'label' => 'Opis usługi']);

return $services;
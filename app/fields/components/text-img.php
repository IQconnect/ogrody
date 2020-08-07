<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
];

$textImg = new FieldsBuilder('text-img', ['label' => 'Tekst z mapką']);

$textImg
    ->addFields(get_field_partial('components.title'))
    ->addWysiwyg('content', ['label' => 'Treść', 'media_upload' => 0])
    ->addLink('link', ['label' => 'Link']);


return $textImg;
<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
];

$gallery = new FieldsBuilder('gallery', ['label' => 'galeria']);

$gallery

    ->addRepeater('realizations')
        ->addText('title', ['label' => 'tytuł', 'wrapper' => ['width' => '20%']])
        ->addRepeater('gallery')
            ->addImage('img', ['label' => 'link'])
            ->addText('yt', ['label' => 'Link Youtube (opcjonalne)']);

return $gallery;
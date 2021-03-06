<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$option_page = new FieldsBuilder('option_page');

$option_page
    ->setLocation('options_page', '==', 'acf-options-ustawienia-szablonu');

$option_page
    ->addTab('Kontakt', ['placement' => 'left'])
        ->addText('name', ['label' => 'Nazwa firmy'])
        ->addTextarea('address', ['label' => 'Adres firmy', 'rows' => '2', 'new_lines' => 'br'])
        ->addText('phone', ['label' => 'Telefon firmowy'])
        ->addText('email', ['label' => 'Email firmowy'])
        ->addText('facebook')
    ->addTab('Header', ['placement' => 'left'])
        ->addImage('logo')
    ->addTab('Stopka', ['placement' => 'left'])
        ->addText('copyright')
        ->addImage('iqlogo', ['label' => 'Wykonanie'])
        ->addImage('logo2', ['label' => 'Logo'])
        ->addImage('contactbg', ['label' => 'Tło sekcji kontakt']);

return $option_page;
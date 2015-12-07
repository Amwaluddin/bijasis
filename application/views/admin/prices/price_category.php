<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<?php
$form = Tb::form(['type' => Tb::FORM_TYPE_HORIZONTAL, 'id' => 'form_price_cat', 'leftRow' => 3, 'rightRow' => 9]);
echo $form->textField('id', '', ['type' => 'hidden']);
echo $form->textFieldRow('desc', 'Description', ['placeholder' => 'Enter Description']);
echo $form->textFieldRow('note1', 'Price 1', ['placeholder' => 'Enter Price 1']);
echo $form->textFieldRow('note2', 'Price 2', ['placeholder' => 'Enter Price 2']);
echo $form->textFieldRow('note3', 'Price 3', ['placeholder' => 'Enter Price 3']);
echo $form->textFieldRow('note4', 'Price 4', ['placeholder' => 'Enter Price 4']);
echo $form->textFieldRow('note5', 'Price 5', ['placeholder' => 'Enter Price 5']);
$form->end();
?>
        
    
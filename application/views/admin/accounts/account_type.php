<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<?php
$form = Tb::form(['type' => Tb::FORM_TYPE_HORIZONTAL, 'id' => 'form_acc_type']);
echo $form->textField('id', '', ['type' => 'hidden']);
echo $form->textFieldRow('name', 'Description', ['placeholder' => 'Enter Description']);
echo $form->textFieldRow('note', 'Normal Balance', ['placeholder' => 'Enter Normal Balance']);
$form->end();
?>
        
    
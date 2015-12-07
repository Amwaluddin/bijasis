<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<?php
$form = Tb::form(['type' => Tb::FORM_TYPE_HORIZONTAL, 'id' => 'form_price', 'leftRow' => 3, 'rightRow' => 9]);
echo $form->textField('id', '', ['type' => 'hidden']);
echo $form->textFieldRow('doc', 'Document / Process', ['placeholder' => 'Enter Document / Process']);
echo $form->dropDownListRow('Category', 'cat', '', $price_cat, []);
echo $form->textFieldRow('price1', 'Price 1', ['placeholder' => 'Enter Price 1']);
echo $form->textFieldRow('price2', 'Price 2', ['placeholder' => 'Enter Price 2']);
echo $form->textFieldRow('price3', 'Price 3', ['placeholder' => 'Enter Price 3']);
echo $form->textFieldRow('price4', 'Price 4', ['placeholder' => 'Enter Price 4']);
echo $form->textFieldRow('price5', 'Price 5', ['placeholder' => 'Enter Price 5']);
$form->end();
?>
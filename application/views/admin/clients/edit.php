<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<?php
$form = Tb::form(['type' => Tb::FORM_TYPE_HORIZONTAL, 'id' => 'form', 'leftRow' => 3, 'rightRow' => 9]);
echo $form->textField('id', '', ['type' => 'hidden']);
echo $form->textFieldRow('client_name', 'Company Name', ['placeholder' => 'Enter company name']);
echo $form->textFieldRow('partner', 'Partner', ['placeholder' => 'Enter patner']);
echo $form->textFieldRow('contact_name1', 'Contact Name 1', ['placeholder' => 'Enter contact Name 1']);
echo $form->textFieldRow('contact_number1', 'Contact Number 1', ['placeholder' => 'Enter contact Number 1']);
echo $form->textFieldRow('contact_name2', 'Contact Name 2', ['placeholder' => 'Enter contact Name 2']);
echo $form->textFieldRow('contact_number2', 'Contact Number 2', ['placeholder' => 'Enter contact Number 2']);
echo $form->textFieldRow('business_sector', 'Business Sector', ['placeholder' => 'Enter Business Sector']);
$form->end();
?>
        
    
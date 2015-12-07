<?php defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Amwaluddin Lubis
 * Date: 10/28/2015
 * Time: 9:12 AM
 * File Name: client.php
 */

$form = Tb::form(['type' => Tb::FORM_TYPE_HORIZONTAL, 'id' => 'form_client', 'leftRow' => 3, 'rightRow' => 9]);
echo $form->textField('id', '', ['type' => 'hidden']);
echo $form->textFieldRow('name', 'Client Name', ['placeholder' => 'Enter name', 'required' => 1]);
echo $form->dropDownListRow('Title', 'title', '', ['Mr' => 'Mr', 'Mrs' => 'Mrs', 'Ms' => 'Ms'], []);
$form->end();
?>
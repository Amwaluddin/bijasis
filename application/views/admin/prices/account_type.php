<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<?php
$form = Tb::form(['type' => Tb::FORM_TYPE_HORIZONTAL, 'id' => 'form_acc_type']);
echo $form->textField('id', '', ['type' => 'hidden']);
echo $form->textFieldRow('name', 'Description', ['placeholder' => 'Enter Description']);
echo $form->textFieldRow('note', 'Normal Balance', ['placeholder' => 'Enter Normal Balance']);
echo $form->formControlGroup('', Tb::buttonGroup(
	['item' => ['label' => 'Submit',
		'icon' => Tb::ICON_FLOPPY_SAVE,
		'type' => Tb::BUTTON_TYPE_SUBMIT,
		'color' => Tb::BUTTON_COLOR_PRIMARY,
		'class' => 'btn-flat'],
		['label' => 'Reset',
			'icon' => Tb::ICON_REFRESH,
			'type' => Tb::BUTTON_TYPE_RESET,
			'color' => Tb::BUTTON_COLOR_WARNING,
			'class' => 'btn-flat'],
		['label' => 'Cancel', 'icon' => Tb::ICON_BACKWARD,
			'type' => Tb::BUTTON_TYPE_LINK,
			'url' => '#', 'class' => 'btn-flat']
	]));
$form->end();
?>
        
    
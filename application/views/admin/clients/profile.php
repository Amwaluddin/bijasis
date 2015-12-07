<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="content-wrapper">
	<section class="content-header">
		<?php echo $pagetitle; ?>
		<?php echo $breadcrumb; ?>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box">
					<div class="box-header with-border">
						<h3 class="box-title"><?php echo lang('clients_edit_client'); ?></h3>
					</div>
					<div class="box-body">
						<?php echo $message; ?>
						<?php
						$form = Tb::form(array('type' => Tb::FORM_TYPE_HORIZONTAL));
						echo $form->textFieldRow('client_name', 'Company Name', ['placeholder' => 'Enter company name', 'value' => $client->company]);
						echo $form->textFieldRow('tax_number', 'Tax Number', ['placeholder' => 'Enter tax number', 'value' => $client->tax_number]);
						echo $form->textFieldRow('email', 'Email', ['placeholder' => 'Enter email', 'value' => $client->email]);
						echo $form->formControlGroup('', Tb::buttonGroup(['item' =>
							 ['label' => 'Submit', 'icon' => Tb::ICON_FLOPPY_SAVE, 'type' => Tb::BUTTON_TYPE_SUBMIT, 'color' => Tb::BUTTON_COLOR_PRIMARY, 'class' => 'btn-flat'],
							 ['label' => 'Reset', 'icon' => Tb::ICON_REFRESH, 'type' => Tb::BUTTON_TYPE_RESET, 'color' => Tb::BUTTON_COLOR_WARNING, 'class' => 'btn-flat'],
							 ['label' => 'Cancel', 'icon' => Tb::ICON_BACKWARD, 'type' => Tb::BUTTON_TYPE_LINK, 'url' => '#', 'class' => 'btn-flat']
						]));
						$form->end();
						?>
					</div>
				</div>
			</div>
	</section>
</div>
    
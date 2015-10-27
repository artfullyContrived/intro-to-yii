<?php
/* @var $this AccountController */
/* @var $model Account */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'account-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
		<?php echo $form->error($model,'user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'screen_name'); ?>
		<?php echo $form->textField($model,'screen_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'screen_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'oauth_token'); ?>
		<?php echo $form->textField($model,'oauth_token',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'oauth_token'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'oauth_token_secret'); ?>
		<?php echo $form->textField($model,'oauth_token_secret',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'oauth_token_secret'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'last_checked'); ?>
		<?php echo $form->textField($model,'last_checked'); ?>
		<?php echo $form->error($model,'last_checked'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'created_at'); ?>
		<?php echo $form->textField($model,'created_at'); ?>
		<?php echo $form->error($model,'created_at'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'modified_at'); ?>
		<?php echo $form->textField($model,'modified_at'); ?>
		<?php echo $form->error($model,'modified_at'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
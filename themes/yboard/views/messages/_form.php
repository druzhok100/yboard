<?php
/* @var $this MessagesController */
/* @var $model Messages */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'messages-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>

        <!--
	<div class="row">
		<?php echo $form->labelEx($model,'sender_id'); ?>
		<?php echo $form->textField($model,'sender_id'); ?>
		<?php echo $form->error($model,'sender_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'receiver_id'); ?>
		<?php echo $form->textField($model,'receiver_id'); ?>
		<?php echo $form->error($model,'receiver_id'); ?>
	</div>
        -->

	<div class="row">
		<?php echo $form->labelEx($model,'message'); ?>
		<?php echo $form->textArea($model,'message',array('rows'=>8, 'class'=>'wide')); ?>
		<?php echo $form->error($model,'message'); ?>
	</div>

        <!--
	<div class="row">
		<?php echo $form->labelEx($model,'send_date'); ?>
		<?php echo $form->textField($model,'send_date'); ?>
		<?php echo $form->error($model,'send_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'read_date'); ?>
		<?php echo $form->textField($model,'read_date'); ?>
		<?php echo $form->error($model,'read_date'); ?>
	</div>
        -->

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? t('Send') : t('Save'), array('class'=>'btn')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
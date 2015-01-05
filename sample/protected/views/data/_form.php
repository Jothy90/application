<?php
/* @var $this DataController */
/* @var $model Data */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'data-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'date'); ?>
		<?php echo $form->textField($model,'date'); ?>
		<?php echo $form->error($model,'date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'time'); ?>
		<?php echo $form->textField($model,'time'); ?>
		<?php echo $form->error($model,'time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gw_id'); ?>
		<?php echo $form->textField($model,'gw_id',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'gw_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'location_id'); ?>
		<?php echo $form->textField($model,'location_id'); ?>
		<?php echo $form->error($model,'location_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'task_id'); ?>
		<?php echo $form->textField($model,'task_id'); ?>
		<?php echo $form->error($model,'task_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'reading'); ?>
		<?php echo $form->textField($model,'reading',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'reading'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
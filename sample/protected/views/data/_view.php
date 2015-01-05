<?php
/* @var $this DataController */
/* @var $data Data */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('primary_key')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->primary_key), array('view', 'id'=>$data->primary_key)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::encode($data->date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('time')); ?>:</b>
	<?php echo CHtml::encode($data->time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gw_id')); ?>:</b>
	<?php echo CHtml::encode($data->gw_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('location_id')); ?>:</b>
	<?php echo CHtml::encode($data->location_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('task_id')); ?>:</b>
	<?php echo CHtml::encode($data->task_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reading')); ?>:</b>
	<?php echo CHtml::encode($data->reading); ?>
	<br />


</div>
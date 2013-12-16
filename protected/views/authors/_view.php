<?php
/* @var $this AuthorsController */
/* @var $data Authors */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('birth')); ?>:</b>
	<?php echo CHtml::encode($data->birth); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('death')); ?>:</b>
	<?php echo CHtml::encode($data->death); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('country')); ?>:</b>
	<?php echo CHtml::encode($data->country); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('biography')); ?>:</b>
	<?php echo CHtml::encode($data->biography); ?>
	<br />


</div>
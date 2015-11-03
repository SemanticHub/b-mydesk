<?php
/* @var $this CasesController */
/* @var $data Cases */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('case_summary')); ?>:</b>
	<?php echo CHtml::encode($data->case_summary); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('case_details')); ?>:</b>
	<?php echo CHtml::encode($data->case_details); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('caller_name')); ?>:</b>
	<?php echo CHtml::encode($data->caller_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('caller_mobile')); ?>:</b>
	<?php echo CHtml::encode($data->caller_mobile); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('caller_address')); ?>:</b>
	<?php echo CHtml::encode($data->caller_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('voice_path')); ?>:</b>
	<?php echo CHtml::encode($data->voice_path); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('datetime')); ?>:</b>
	<?php echo CHtml::encode($data->datetime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('priority')); ?>:</b>
	<?php echo CHtml::encode($data->priority); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_by')); ?>:</b>
	<?php echo CHtml::encode($data->created_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_time')); ?>:</b>
	<?php echo CHtml::encode($data->created_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_by')); ?>:</b>
	<?php echo CHtml::encode($data->updated_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_time')); ?>:</b>
	<?php echo CHtml::encode($data->updated_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	*/ ?>

</div>
<!--<div class="form">

<?php // $form=$this->beginWidget('CActiveForm', array(
//	'id'=>'person-form',
//	'enableAjaxValidation'=>true,
//)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php // echo $form->errorSummary($model); ?>

	<div class="row">
		<?php // echo $form->labelEx($model,'fname'); ?>
		<?php // echo $form->textField($model,'fname',array('size'=>60,'maxlength'=>64)); ?>
		<?php // echo $form->error($model,'fname'); ?>
	</div>

	<div class="row">
		<?php // echo $form->labelEx($model,'lname'); ?>
		<?php // echo $form->textField($model,'lname',array('size'=>60,'maxlength'=>64)); ?>
		<?php // echo $form->error($model,'lname'); ?>
	</div>

	<div class="row buttons">
		<?php // echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php // $this->endWidget(); ?>

</div> form -->
<div class="ajax-form">
    <div class="row">
    <?php echo CHtml::activeLabel($model,'fname'); ?>
    <?php echo CHtml::activeTextField($model,'fname',array('size'=>32,'maxlength'=>64)); ?>
    <?php echo CHtml::activeLabel($model,'lname'); ?>
    <?php echo CHtml::activeTextField($model,'lname',array('size'=>32,'maxlength'=>64)); ?>
  </div>
</div><!-- form -->
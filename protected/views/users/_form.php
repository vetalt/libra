<?php
/* @var $this UsersController */
/* @var $model Users */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'users-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation' => false,
    ));
    ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

        <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php
        echo $form->labelEx($model, 'login');
        echo $form->textField($model, 'login', array('size' => 45, 'maxlength' => 45));
        echo $form->error($model, 'login');
        ?>
    </div>

    <div class="row">
        <?php
        if ($this->action->id != 'update') {
            echo $form->labelEx($model, 'pass');
            echo $form->passwordField($model, 'pass', array('size' => 60, 'maxlength' => 255));
            echo $form->error($model, 'pass');
        }
        ?>
    </div>

    <div class="row">
        <?php
        echo $form->labelEx($model, 'role');
        echo $form->dropDownList($model, 'role', Users::getRoles());
        echo $form->error($model, 'role');
        ?>
    </div>

    <div class="row buttons">
    <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->
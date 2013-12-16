<?php
/* @var $this BookTextsController */
/* @var $model BookTexts */

$this->breadcrumbs=array(
	'Book Texts'=>array('admin'),
	'Create',
);

//$this->menu=array(
//	array('label'=>'List BookTexts', 'url'=>array('index')),
//	array('label'=>'Manage BookTexts', 'url'=>array('admin')),
//);
?>

<h1>Create</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
<?php
/* @var $this BookTextsController */
/* @var $model BookTexts */

$this->breadcrumbs=array(
	'Book Texts'=>array('admin'),
	$model->title=>array('view','id'=>$model->id),
	'Edit',
);

//$this->menu=array(
//	array('label'=>'List BookTexts', 'url'=>array('index')),
//	array('label'=>'Create BookTexts', 'url'=>array('create')),
//	array('label'=>'View BookTexts', 'url'=>array('view', 'id'=>$model->id)),
//	array('label'=>'Manage BookTexts', 'url'=>array('admin')),
//);
?>

<h1>Edit</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
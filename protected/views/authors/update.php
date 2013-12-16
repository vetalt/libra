<?php
/* @var $this AuthorsController */
/* @var $model Authors */

$this->breadcrumbs=array(
	'Authors'=>array('admin'),
	$model->name=>array('view','id'=>$model->id),
	'Edit',
);

//$this->menu=array(
//	array('label'=>'List Authors', 'url'=>array('index')),
//	array('label'=>'Create Authors', 'url'=>array('create')),
//	array('label'=>'View Authors', 'url'=>array('view', 'id'=>$model->id)),
//	array('label'=>'Manage Authors', 'url'=>array('admin')),
//);
?>

<h1>Edit</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
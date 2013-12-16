<?php
/* @var $this AuthorsController */
/* @var $model Authors */

$this->breadcrumbs=array(
	'Authors'=>array('admin'),
	'Create',
);

//$this->menu=array(
//	array('label'=>'List Authors', 'url'=>array('index')),
//	array('label'=>'Manage Authors', 'url'=>array('admin')),
//);
?>

<h1>Create</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
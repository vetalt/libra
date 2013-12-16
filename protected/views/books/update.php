<?php
/* @var $this BooksController */
/* @var $model Books */

$this->breadcrumbs=array(
	'Books'=>array('admin'),
	$model->title=>array('view','id'=>$model->id),
	'Edit',
);

//$this->menu=array(
//	array('label'=>'List Books', 'url'=>array('index')),
//	array('label'=>'Create Books', 'url'=>array('create')),
//	array('label'=>'View Books', 'url'=>array('view', 'id'=>$model->id)),
//	array('label'=>'Manage Books', 'url'=>array('admin')),
//);
?>

<h1>Edit</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
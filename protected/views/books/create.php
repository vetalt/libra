<?php
/* @var $this BooksController */
/* @var $model Books */

$this->breadcrumbs=array(
	'Books'=>array('admin'),
	'Create',
);

//$this->menu=array(
//	array('label'=>'List Books', 'url'=>array('index')),
//	array('label'=>'Manage Books', 'url'=>array('admin')),
//);
?>

<h1>Create</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
<?php
/* @var $this UsersController */
/* @var $model Users */

$this->breadcrumbs=array(
	'Users'=>array('admin'),
	'Create',
);

//$this->menu=array(
//	array('label'=>'List Users', 'url'=>array('index')),
//	array('label'=>'Manage Users', 'url'=>array('admin')),
//);
?>

<h1>Create</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
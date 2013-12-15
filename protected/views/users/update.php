<?php
/* @var $this UsersController */
/* @var $model Users */

$this->breadcrumbs=array(
	'Users'=>array('admin'),
	$model->id=>array('view','id'=>$model->id),
	'Edit',
);

$this->menu=array(
//	array('label'=>'List Users', 'url'=>array('index')),
//	array('label'=>'Create Users', 'url'=>array('create')),
//	array('label'=>'View Users', 'url'=>array('view', 'id'=>$model->id)),
//	array('label'=>'Manage Users', 'url'=>array('admin')),
);
?>

<h1>Edit User <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
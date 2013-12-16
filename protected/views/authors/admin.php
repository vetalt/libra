<?php
/* @var $this AuthorsController */
/* @var $model Authors */

$this->breadcrumbs=array(
	'Authors'
);

$this->menu=array(
//	array('label'=>'List Authors', 'url'=>array('index')),
	array('label'=>'Create', 'url'=>array('create')),
);


?>

<h1>Authors</h1>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'authors-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
		'birth',
		'death',
		'country',
//		'biography',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

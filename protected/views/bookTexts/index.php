<?php
/* @var $this BookTextsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Book Texts',
);

$this->menu=array(
	array('label'=>'Create BookTexts', 'url'=>array('create')),
	array('label'=>'Manage BookTexts', 'url'=>array('admin')),
);
?>

<h1>Book Texts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

<?php
/* @var $this BooksController */
/* @var $model Books */

$this->breadcrumbs = array(
    $model->author->name=>array('/authors/view','id'=>$model->author->id),
    $model->title,
);

$this->menu = array(
    array('label' => 'Add text', 'url' => array('bookTexts/create', 'book_id' => $model->id)),
    array('label' => 'Edit', 'url' => array('update', 'id' => $model->id)),
    array('label' => 'Delete', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
);
?>

<h1><?php echo $model->title; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'id',
        'title',
        'author.name',
    ),
));



$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'book-texts-grid',
    'dataProvider' => new CArrayDataProvider($model->bookTexts),
//    'filter' => $model,
    'columns' => array(
//        'id',
//        'book_id',
        'title',
//        'text',
        'lang',
        'published',
        array(
            'class' => 'CButtonColumn',
            'viewButtonUrl' => 'Yii::app()->createUrl("/bookTexts/view", array("id" => $data["id"]))',
            'deleteButtonUrl' => 'Yii::app()->createUrl("/bookTexts/delete", array("id" =>  $data["id"]))',
            'updateButtonUrl' => 'Yii::app()->createUrl("/bookTexts/update", array("id" =>  $data["id"]))',
        ),
    ),
));

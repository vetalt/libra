<?php
/* @var $this AuthorsController */
/* @var $model Authors */

$this->breadcrumbs = array(
    'Authors' => array('admin'),
    $model->name,
);

$this->menu = array(
    array('label' => 'Add book', 'url' => array('books/create', 'author_id' => $model->id)),
    array('label' => 'Edit', 'url' => array('update', 'id' => $model->id)),
    array('label' => 'Delete', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
);
?>

<h1><?php echo $model->name; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'id',
        'name',
        'birth',
        'death',
        'country',
        'biography',
    ),
));


$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'books-grid',
    'dataProvider' => new CArrayDataProvider($model->books),
//    'filter' => $model,
    'columns' => array(
//        'id',
        'title',
//        'author.name',
        array(
            'class' => 'CButtonColumn',
            'viewButtonUrl' => 'Yii::app()->createUrl("/books/view", array("id" => $data["id"]))',
            'deleteButtonUrl' => 'Yii::app()->createUrl("/books/delete", array("id" =>  $data["id"]))',
            'updateButtonUrl' => 'Yii::app()->createUrl("/books/update", array("id" =>  $data["id"]))',
        ),
    ),
));

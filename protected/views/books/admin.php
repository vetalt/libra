<?php
/* @var $this BooksController */
/* @var $model Books */

$this->breadcrumbs = array(
    'Books'
);

$this->menu = array(
    array('label' => 'Create', 'url' => array('create')),
);
?>

<h1>Books</h1>

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'books-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
//        'id',
        'title',
        'author.name',
        array(
            'class' => 'CButtonColumn',
        ),
    ),
));

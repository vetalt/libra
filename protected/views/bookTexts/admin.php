<?php
/* @var $this BookTextsController */
/* @var $model BookTexts */

$this->breadcrumbs = array(
    'Book Texts'
);

$this->menu = array(
    array('label' => 'Create', 'url' => array('create')),
);
?>

<h1>Book Texts</h1>

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'book-texts-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'id',
        'book_id',
        'title',
        'text',
        'lang',
        'published',
        array(
            'class' => 'CButtonColumn',
        ),
    ),
));

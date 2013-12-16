<?php
/* @var $this BookTextsController */
/* @var $model BookTexts */

$this->breadcrumbs = array(
    $model->book->author->name=>array('/authors/view','id'=>$model->book->author->id),
    $model->book->title=>array('/books/view','id'=>$model->book->id),
    $model->title,
);

$this->menu = array(
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
        'book.author.name',
        'title',
//		'text',
        'lang',
        'published',
    ),
));

echo $model->text;

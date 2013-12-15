<h1>Users</h1>

<?php
/* @var $this UsersController */
/* @var $model Users */

$this->breadcrumbs = array(
    'Users'
);

$this->menu = array(
//    array('label' => 'List Users', 'url' => array('index')),
    array('label' => 'Create', 'url' => array('create')),
);

$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'users-grid',
    'dataProvider' => $model->search(),
//	'filter'=>$model,
    'columns' => array(
        'id',
        'login',
        'role',
        array(
            'class' => 'CButtonColumn',
        ),
    ),
));


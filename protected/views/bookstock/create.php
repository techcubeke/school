<?php
/* @var $this BookstockController */
/* @var $model Bookstock */

$this->breadcrumbs=array(
	'Bookstocks'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Bookstock', 'url'=>array('index')),
	array('label'=>'Manage Bookstock', 'url'=>array('admin')),
);
?>

<h1>Create Bookstock</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
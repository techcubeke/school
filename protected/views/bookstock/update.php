<?php
/* @var $this BookstockController */
/* @var $model Bookstock */

$this->breadcrumbs=array(
	'Bookstocks'=>array('index'),
	$model->bookstockID=>array('view','id'=>$model->bookstockID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Bookstock', 'url'=>array('index')),
	array('label'=>'Create Bookstock', 'url'=>array('create')),
	array('label'=>'View Bookstock', 'url'=>array('view', 'id'=>$model->bookstockID)),
	array('label'=>'Manage Bookstock', 'url'=>array('admin')),
);
?>

<h1>Update Bookstock <?php echo $model->bookstockID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
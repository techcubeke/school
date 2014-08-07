<?php
/* @var $this VisitorpassController */
/* @var $model Visitorpass */

$this->breadcrumbs=array(
	'Visitorpasses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Visitorpass', 'url'=>array('index')),
	array('label'=>'Manage Visitorpass', 'url'=>array('admin')),
);
?>

<h1>Create Visitorpass</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
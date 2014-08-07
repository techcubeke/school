<?php
/* @var $this EventplanController */
/* @var $model Eventplan */

$this->breadcrumbs=array(
	'Eventplans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Eventplan', 'url'=>array('index')),
	array('label'=>'Manage Eventplan', 'url'=>array('admin')),
);
?>

<h1>Create Eventplan</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
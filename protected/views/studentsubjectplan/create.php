<?php
/* @var $this StudentsubjectplanController */
/* @var $model Studentsubjectplan */

$this->breadcrumbs=array(
	'Studentsubjectplans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Studentsubjectplan', 'url'=>array('index')),
	array('label'=>'Manage Studentsubjectplan', 'url'=>array('admin')),
);
?>

<h1>Create Studentsubjectplan</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
<?php
/* @var $this UserroleController */
/* @var $model Userrole */

$this->breadcrumbs=array(
	'Userroles'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Userrole', 'url'=>array('index')),
	array('label'=>'Manage Userrole', 'url'=>array('admin')),
);
?>

<h1>Create Userrole</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
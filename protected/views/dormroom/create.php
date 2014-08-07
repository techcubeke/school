<?php
/* @var $this DormroomController */
/* @var $model Dormroom */

$this->breadcrumbs=array(
	'Dormrooms'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Dormroom', 'url'=>array('index')),
	array('label'=>'Manage Dormroom', 'url'=>array('admin')),
);
?>

<h1>Create Dormroom</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
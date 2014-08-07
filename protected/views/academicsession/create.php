<?php
/* @var $this AcademicsessionController */
/* @var $model Academicsession */

$this->breadcrumbs=array(
	'Academicsessions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Academicsession', 'url'=>array('index')),
	array('label'=>'Manage Academicsession', 'url'=>array('admin')),
);
?>

<h1>Create Academicsession</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
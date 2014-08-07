<?php
/* @var $this AcademicsessionController */
/* @var $model Academicsession */

$this->breadcrumbs=array(
	'Academicsessions'=>array('index'),
	$model->academicsessionID=>array('view','id'=>$model->academicsessionID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Academicsession', 'url'=>array('index')),
	array('label'=>'Create Academicsession', 'url'=>array('create')),
	array('label'=>'View Academicsession', 'url'=>array('view', 'id'=>$model->academicsessionID)),
	array('label'=>'Manage Academicsession', 'url'=>array('admin')),
);
?>

<h1>Update Academicsession <?php echo $model->academicsessionID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
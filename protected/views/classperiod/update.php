<?php
/* @var $this ClassperiodController */
/* @var $model Classperiod */

$this->breadcrumbs=array(
	'Classperiods'=>array('index'),
	$model->name=>array('view','id'=>$model->periodID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Classperiod', 'url'=>array('index')),
	array('label'=>'Create Classperiod', 'url'=>array('create')),
	array('label'=>'View Classperiod', 'url'=>array('view', 'id'=>$model->periodID)),
	array('label'=>'Manage Classperiod', 'url'=>array('admin')),
);
?>

<h1>Update Classperiod <?php echo $model->periodID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
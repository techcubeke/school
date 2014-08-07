<?php
/* @var $this ClassperiodController */
/* @var $model Classperiod */

$this->breadcrumbs=array(
	'Classperiods'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Classperiod', 'url'=>array('index')),
	array('label'=>'Manage Classperiod', 'url'=>array('admin')),
);
?>

<h1>Create Classperiod</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
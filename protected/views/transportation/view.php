<?php
/* @var $this TransportationController */
/* @var $model Transportation */

$this->breadcrumbs=array(
	'Transportations'=>array('index'),
	$model->transportationID,
);

$this->menu=array(
	array('label'=>'List Transportation', 'url'=>array('index')),
	array('label'=>'Create Transportation', 'url'=>array('create')),
	array('label'=>'Update Transportation', 'url'=>array('update', 'id'=>$model->transportationID)),
	array('label'=>'Delete Transportation', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->transportationID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Transportation', 'url'=>array('admin')),
);
?>

<h1>View Transportation #<?php echo $model->transportationID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'transportationID',
		'studentID',
		'stopID',
		'ispaid',
	),
)); ?>

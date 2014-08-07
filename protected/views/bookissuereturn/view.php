<?php
/* @var $this BookissuereturnController */
/* @var $model Bookissuereturn */

$this->breadcrumbs=array(
	'Bookissuereturns'=>array('index'),
	$model->bookissuereturnID,
);

$this->menu=array(
	array('label'=>'List Bookissuereturn', 'url'=>array('index')),
	array('label'=>'Create Bookissuereturn', 'url'=>array('create')),
	array('label'=>'Update Bookissuereturn', 'url'=>array('update', 'id'=>$model->bookissuereturnID)),
	array('label'=>'Delete Bookissuereturn', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->bookissuereturnID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Bookissuereturn', 'url'=>array('admin')),
);
?>

<h1>View Bookissuereturn #<?php echo $model->bookissuereturnID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'bookissuereturnID',
		'schoolID',
		'bookstockID',
		'personID',
		'dateissue',
		'datereturn',
		'duedate',
		'issuedby',
		'fine',
		'isfinepaid',
		'dateadded',
		'datemodified',
	),
)); ?>

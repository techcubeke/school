<?php
/* @var $this FeepaymentController */
/* @var $model Feepayment */

$this->breadcrumbs=array(
	'Feepayments'=>array('index'),
	$model->feepaymentID,
);

$this->menu=array(
	array('label'=>'List Feepayment', 'url'=>array('index')),
	array('label'=>'Create Feepayment', 'url'=>array('create')),
	array('label'=>'Update Feepayment', 'url'=>array('update', 'id'=>$model->feepaymentID)),
	array('label'=>'Delete Feepayment', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->feepaymentID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Feepayment', 'url'=>array('admin')),
);
?>

<h1>View Feepayment #<?php echo $model->feepaymentID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'feepaymentID',
		'schoolID',
		'feereceiptID',
		'financialyearID',
		'paymentdate',
		'paymentmode',
		'paidamount',
		'adjustedamount',
		'chequedate',
		'chequenumber',
		'bankbranch',
		'remarks',
		'dateadded',
	),
)); ?>

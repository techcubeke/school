<?php
/* @var $this FeepaymentController */
/* @var $model Feepayment */

$this->breadcrumbs=array(
	'Feepayments'=>array('index'),
	$model->feepaymentID=>array('view','id'=>$model->feepaymentID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Feepayment', 'url'=>array('index')),
	array('label'=>'Create Feepayment', 'url'=>array('create')),
	array('label'=>'View Feepayment', 'url'=>array('view', 'id'=>$model->feepaymentID)),
	array('label'=>'Manage Feepayment', 'url'=>array('admin')),
);
?>

<h1>Update Feepayment <?php echo $model->feepaymentID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
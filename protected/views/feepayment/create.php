<?php
/* @var $this FeepaymentController */
/* @var $model Feepayment */

$this->breadcrumbs=array(
	'Feepayments'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Feepayment', 'url'=>array('index')),
	array('label'=>'Manage Feepayment', 'url'=>array('admin')),
);
?>

<h1>Create Feepayment</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
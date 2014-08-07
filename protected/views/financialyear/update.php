<?php
/* @var $this FinancialyearController */
/* @var $model Financialyear */

$this->breadcrumbs=array(
	'Financialyears'=>array('index'),
	$model->financialyearID=>array('view','id'=>$model->financialyearID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Financialyear', 'url'=>array('index')),
	array('label'=>'Create Financialyear', 'url'=>array('create')),
	array('label'=>'View Financialyear', 'url'=>array('view', 'id'=>$model->financialyearID)),
	array('label'=>'Manage Financialyear', 'url'=>array('admin')),
);
?>

<h1>Update Financialyear <?php echo $model->financialyearID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
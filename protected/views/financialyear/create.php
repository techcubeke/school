<?php
/* @var $this FinancialyearController */
/* @var $model Financialyear */

$this->breadcrumbs=array(
	'Financialyears'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Financialyear', 'url'=>array('index')),
	array('label'=>'Manage Financialyear', 'url'=>array('admin')),
);
?>

<h1>Create Financialyear</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
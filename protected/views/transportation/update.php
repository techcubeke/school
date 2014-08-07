<?php
/* @var $this TransportationController */
/* @var $model Transportation */

$this->breadcrumbs=array(
	'Transportations'=>array('index'),
	$model->transportationID=>array('view','id'=>$model->transportationID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Transportation', 'url'=>array('index')),
	array('label'=>'Create Transportation', 'url'=>array('create')),
	array('label'=>'View Transportation', 'url'=>array('view', 'id'=>$model->transportationID)),
	array('label'=>'Manage Transportation', 'url'=>array('admin')),
);
?>

<h1>Update Transportation <?php echo $model->transportationID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
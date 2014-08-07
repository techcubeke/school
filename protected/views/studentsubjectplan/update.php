<?php
/* @var $this StudentsubjectplanController */
/* @var $model Studentsubjectplan */

$this->breadcrumbs=array(
	'Studentsubjectplans'=>array('index'),
	$model->subjectplanID=>array('view','id'=>$model->subjectplanID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Studentsubjectplan', 'url'=>array('index')),
	array('label'=>'Create Studentsubjectplan', 'url'=>array('create')),
	array('label'=>'View Studentsubjectplan', 'url'=>array('view', 'id'=>$model->subjectplanID)),
	array('label'=>'Manage Studentsubjectplan', 'url'=>array('admin')),
);
?>

<h1>Update Studentsubjectplan <?php echo $model->subjectplanID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
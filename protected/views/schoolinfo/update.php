<?php
/* @var $this SchoolinfoController */
/* @var $model Schoolinfo */

$this->breadcrumbs=array(
	'Schoolinfos'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Schoolinfo', 'url'=>array('index')),
	array('label'=>'Create Schoolinfo', 'url'=>array('create')),
	array('label'=>'View Schoolinfo', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage Schoolinfo', 'url'=>array('admin')),
);
?>

<h1>Update Schoolinfo <?php echo $model->ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
<?php
/* @var $this BookissuereturnController */
/* @var $model Bookissuereturn */

$this->breadcrumbs=array(
	'Bookissuereturns'=>array('index'),
	$model->bookissuereturnID=>array('view','id'=>$model->bookissuereturnID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Bookissuereturn', 'url'=>array('index')),
	array('label'=>'Create Bookissuereturn', 'url'=>array('create')),
	array('label'=>'View Bookissuereturn', 'url'=>array('view', 'id'=>$model->bookissuereturnID)),
	array('label'=>'Manage Bookissuereturn', 'url'=>array('admin')),
);
?>

<h1>Update Bookissuereturn <?php echo $model->bookissuereturnID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
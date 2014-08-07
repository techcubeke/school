<?php
/* @var $this BookissuereturnController */
/* @var $model Bookissuereturn */

$this->breadcrumbs=array(
	'Bookissuereturns'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Bookissuereturn', 'url'=>array('index')),
	array('label'=>'Manage Bookissuereturn', 'url'=>array('admin')),
);
?>

<h1>Create Bookissuereturn</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
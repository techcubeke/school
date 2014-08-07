<?php
/* @var $this ExamtermController */
/* @var $model Examterm */

$this->breadcrumbs=array(
	'Examterms'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Examterm', 'url'=>array('index')),
	array('label'=>'Manage Examterm', 'url'=>array('admin')),
);
?>

<h1>Create Examterm</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
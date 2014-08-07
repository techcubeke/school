<?php
/* @var $this SchoolinfoController */
/* @var $model Schoolinfo */

$this->breadcrumbs=array(
	'Schoolinfos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Schoolinfo', 'url'=>array('index')),
	array('label'=>'Manage Schoolinfo', 'url'=>array('admin')),
);
?>

<h1>Create Schoolinfo</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
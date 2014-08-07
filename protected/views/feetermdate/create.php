<?php
/* @var $this FeetermdateController */
/* @var $model Feetermdate */

$this->breadcrumbs=array(
	'Feetermdates'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Feetermdate', 'url'=>array('index')),
	array('label'=>'Manage Feetermdate', 'url'=>array('admin')),
);
?>

<h1>Create Feetermdate</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
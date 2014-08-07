<?php
/* @var $this FeetermdateController */
/* @var $model Feetermdate */

$this->breadcrumbs=array(
	'Feetermdates'=>array('index'),
	$model->feetermdateID=>array('view','id'=>$model->feetermdateID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Feetermdate', 'url'=>array('index')),
	array('label'=>'Create Feetermdate', 'url'=>array('create')),
	array('label'=>'View Feetermdate', 'url'=>array('view', 'id'=>$model->feetermdateID)),
	array('label'=>'Manage Feetermdate', 'url'=>array('admin')),
);
?>

<h1>Update Feetermdate <?php echo $model->feetermdateID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
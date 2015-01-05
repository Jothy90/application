<?php
/* @var $this DataController */
/* @var $model Data */

$this->breadcrumbs=array(
	'Datas'=>array('index'),
	$model->primary_key=>array('view','id'=>$model->primary_key),
	'Update',
);

$this->menu=array(
	array('label'=>'List Data', 'url'=>array('index')),
	array('label'=>'Create Data', 'url'=>array('create')),
	array('label'=>'View Data', 'url'=>array('view', 'id'=>$model->primary_key)),
	array('label'=>'Manage Data', 'url'=>array('admin')),
);
?>

<h1>Update Data <?php echo $model->primary_key; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
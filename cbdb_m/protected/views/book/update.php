<?php
Yii::app()->clientScript->registerScriptFile(
	Yii::app()->request->baseUrl . '/js/book_form_ajax.js'
);

$this->breadcrumbs=array(
	'Books'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Book', 'url'=>array('index')),
	array('label'=>'Create Book', 'url'=>array('create')),
	array('label'=>'View Book', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Book', 'url'=>array('admin')),
);

?>

<h1>Update Book <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model, 'author' =>$author));?>
<?php // echo $this->renderPartial('_form', array('model'=>$model)); //author怎么冒出来的?>

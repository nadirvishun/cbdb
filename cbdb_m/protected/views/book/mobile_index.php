<?php
//$this->breadcrumbs=array(
//	'Books',
//);

$this->menu=array(
	array('label'=>'Create Book', 'url'=>array('create')),
	array('label'=>'Manage Book', 'url'=>array('admin')),
);
?>

<!--<h1>Books</h1>-->

<?php $this->widget('ext.mobile.ListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_mview',
)); ?>

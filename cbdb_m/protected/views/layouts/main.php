<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
             
              <?php Yii::app()->clientScript->registerCoreScript('jquery');
                        Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl .'/js/detectmobilebrowser.js');
                        Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl .'/js/url_param_proc.js');//处理URL，get_param_array()返回key和value的数组；build_query_string()返回请求的字符串；get_base_uri()返回基本的URL。
              ?>
        
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<div id="mainmenu">
		<?php 
                        //判断是电脑还是移动设备
//                       Yii::app()->clientScript->registerScript('detectmobilebrowser',
//                               "if(isMobileBrowser(navigator.userAgent||navigator.vendor||window.opera)){
//                               alert('Mobile');
//                               }else{
//                               alert('Non-Mobile');
//                               }",
//                               CClientScript::POS_READY);
                              
                         //未利用url_param_proc.js来判断     
                        //window.location.search用来截取URL中“？”后面的字符串,判定是否有mobile字样;是否有？有的话用加入"&mobile"没有就用"?mobile"
//                  Yii::app()->clientScript->registerScript('detectmobilebrowser',
//                        "if(isMobileBrowser(navigator.userAgent||navigator.vendor||window.opera)) {
//                            if (window.location.search.search('mobile') == -1) {
//                                if (window.location.search.length) {
//                                    window.location.replace(document.URL + '&mobile=on');
//                                }else {
//                                    window.location.replace(document.URL + '?mobile=on');
//                                }
//                            }
//                        }",
//                        CClientScript::POS_READY);
                
                //利用url_param_proc.js来判断
                Yii::app()->clientScript->registerScript('detectmobilebrowser',
                        "if (isMobileBrowser(navigator.userAgent||navigator.vendor||window.opera)) {
                            var param_array = get_param_array();
                            if (!('mobile' in param_array)) {
                                param_array['mobile'] = 'on';
                                window.location.replace(get_base_uri() +build_query_string(param_array));
                            }
                        }",
                        CClientScript::POS_READY);
                
                
                    if (Yii::app()->user->isGuest) {
                        $this->widget('zii.widgets.CMenu',array(
                            'activeCssClass' => 'active',
                            'activateParents' => true,
                            'items'=>array(
                            	array('label'=>'Home', 'url'=>array('/site/index')),
				//array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				//array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Login', 'url'=>array('/site/login')),
                            ),
                        )); 
                    } else {
                        $this->widget('zii.widgets.CMenu',array(
                            'activeCssClass' => 'active',
                            'activateParents' => true,
                            'items'=>array(
                            	array('label'=>'Home', 'url'=>array('/site/index')),
                            	array(
                                    'label'=>'Comic Books', 
                                    'url'=>array('/book'),
                                    'items' => array(
                                        array('label'=>'Publishers', 'url'=>array('/publisher')),
                                    )
                                ),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'))
                            ),
                        ));                     
                    }
            ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>

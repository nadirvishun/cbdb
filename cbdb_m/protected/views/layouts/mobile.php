<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!--CSS includes here -->
        <!--<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.3/jquery.mobile-1.4.3.min.css">-->
            <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/jquery.mobile-1.4.3.min.css" media="screen, projection" />
           
	<?php 
		Yii::app()->clientScript->registerCoreScript('jquery'); 
                             Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/jquery.mobile-1.4.3.min.js');
	?>
            <style type="text/css">
             #whatever.ui-grid-a > .ui-block-a {width:70%;}
             #whatever.ui-grid-a > .ui-block-b {width:30%;padding-left:8%;} 
           </style>
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
        
</head>

<body>
    <div data-role="page">
<!--        <div data-role="collapsible" data-theme="b">
            <h3>Main Menu</h3>-->
        
        <?php 
//                    $htmlOptions = array('data-role' => 'controlgroup','class' => 'localnav');
//                    $linkOptions = array('data-role' => 'button','data-theme' => 'b', 'rel' => 'external');
//                    $items = array();
//                    if (Yii::app()->user->isGuest) {
//                        $items[] = array('label'=>'Login','url'=>array('/site/login'), 'linkOptions' =>$linkOptions);
//                    }else {
//                        $items[] = array('label'=>'Home','url'=>array('/site/index'), 'linkOptions' =>$linkOptions);
//                        $items[] = array('label'=>'Comic Books','url'=>array('/book'), 'linkOptions'=>$linkOptions);
//                        $items[] = array('label'=>'Logout (' . Yii::app()->user->name . ')', 'url'=>array('/site/logout'),'linkOptions' => $linkOptions);
//                    }
//                    //Yii::app()->getBaseUrl(true);       => http://localhost/yii_projects
//                    //Yii::app()->getHomeUrl();           => /yii_projects/index.php
//                    //Yii::app()->getBaseUrl(false);       => /yii_projects
//                    //mixed preg_replace( mixed pattern, mixed replacement, mixed subject [, int limit ] ) =>subject中匹配的内容，用replacement来替换pattern
//                    $non_mobile_uri = preg_replace('/mobile=on/','mobile=off', /*'/site/login');*/Yii::app()->request->baseUrl);//替换;防止在baseUrl中有mobile=on
//                    $items[] = array('label'=>'Turn off mobile view','url'=>array('?mobile=off'), 'linkOptions' =>$linkOptions);
//                    $this->widget('zii.widgets.CMenu',array(
//                                                                        'activeCssClass' => 'active',
//                                                                        'activateParents' => true,
//                                                                        'htmlOptions' => $htmlOptions,
//                                                                        'items'=> $items
//                                                                        )
//                     );

        ?>
       <!--</div>collapsible -->
       
       <?php //mobile.php没有column2.php什么的，因此下面代码判断侧边栏是否存在，如果存在则折叠成Operations，感觉可以用网格来实现。
//                if (count($this->menu) > 0) {
//                    echo "<div data-role='collapsible' data-theme='b'>\n";
//                    echo "\t<h3>Operations</h3>\n";
//                    foreach ($this->menu as $key=>$item) {
//                        $this->menu[$key]['linkOptions'] = $linkOptions;
//                    }
//                    $this->BeginWidget('zii.widgets.CMenu', array(
//                                                                        'items'=>$this->menu,
//                                                                        'htmlOptions'=> $htmlOptions,
//                    ));
//                    $this->endWidget();
//                    echo "</div><!-- collapsible -->\n";
//                }
        ?>
       
<!--        <div data-role="navbar">
            <ul>
                <li><?php echo CHtml::link('Login',array('/site/login'))?></li>
                
                <li><?php echo CHtml::link('Turn off mobile view',array('?mobile=off'))//不成功?></li>
            </ul>
        </div>-->
        
<?php //利用导航来实现。zii.widgets.CMen会生成<ul><li></li></ul>格式?>
<div data-role="navbar" role="navigation" class="ui-navbar">
        <?php  //从1.4.2开始，theme默认只有黑和白两个data-theme，可以通过添加css文件来增加，不建议。现在有主题选择器来制作主题
                    $htmlOptions = array('class' => 'localnav');
                    $linkOptions = array('data-theme' => 'a', 'rel' => 'external','data-icon'=>"plus" );
                    $linkOptions1 = array('data-theme' => 'a','data-icon'=>"home");
                    $linkOptions2 = array('data-theme' => 'a', 'data-icon'=>"grid" );
                 
                    $linkOptions4 = array('data-theme' => 'a', 'rel' => 'external','data-icon'=>"minus" );
                    $linkOptions5 = array('data-theme' => 'a', 'rel' => 'external','data-icon'=>"forward" );
                    $items = array();
                    if (Yii::app()->user->isGuest) {
                        $items[] = array('label'=>'Login','url'=>array('/site/login'), 'linkOptions' =>$linkOptions);
                    }else {
                        $items[] = array('label'=>'Home','url'=>array('/site/index'), 'linkOptions' =>$linkOptions1);
                        $items[] = array('label'=>'Comic Books','url'=>array('/book'), 'linkOptions'=>$linkOptions2);
                        $items[] = array('label'=>'Logout (' . Yii::app()->user->name . ')', 'url'=>array('/site/logout'),'linkOptions' => $linkOptions4);
                    }
                    //Yii::app()->getBaseUrl(true);       => http://localhost/yii_projects
                    //Yii::app()->getHomeUrl();           => /yii_projects/index.php
                    //Yii::app()->getBaseUrl(false);       => /yii_projects
                    //mixed preg_replace( mixed pattern, mixed replacement, mixed subject [, int limit ] ) =>subject中匹配的内容，用replacement来替换pattern
                    $non_mobile_uri = preg_replace('/mobile=on/','mobile=off', /*'/site/login');*/Yii::app()->request->baseUrl);//替换;防止在baseUrl中有mobile=on
                    $items[] = array('label'=>'Turn off mobile view','url'=>array('?mobile=off'), 'linkOptions' =>$linkOptions5);
                    $this->widget('zii.widgets.CMenu',array(
//                                                                        'activeCssClass' => 'active',
//                                                                        'activateParents' => true,
                                                                        'htmlOptions' => $htmlOptions,
                                                                        'items'=> $items
                                                                        )
                     );

        ?>
</div>

<!-- 原先           <div data-role="content">-->
        
         
                  <?php //echo $content; ?>
          
                  <!--</div>-->
          <?php //利用网格来添加侧边栏
         if (count($this->menu) > 0) {
                    echo " <div class='ui-grid-a'  id='whatever'>\n";
                    echo "<div class='ui-block-a'>";
                    echo "<div data-role='content'>";
                    echo $content;
                    echo "</div>\n";
                    echo "</div>\n";
                    echo "<div class='ui-block-b'>\n";
                    echo "\t<h3>Operations</h3>\n";
                    foreach ($this->menu as $key=>$item) {
                        $this->menu[$key]['linkOptions'] = $linkOptions;
                    }
                    $this->widget('zii.widgets.CMenu', array(
                                                                        'items'=>$this->menu,
                                                                        'htmlOptions'=> $htmlOptions,
                    ));
//                    $this->endWidget();
                    echo "</div>\n";
                    echo "</div>\n";
             }else{
                 echo "<div data-role='content'>\n";
                 echo $content; 
                 echo "</div>\n";
             }
          ?>
            
        
    <div data-role="footer">
        <center>
            <?php echo Yii::powered(); ?>
        </center>
     </div><!-- footer -->
    </div><!-- page -->
</body>
</html>

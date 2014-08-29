<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends CController
{
	/**
	 * @var string the default layout for the controller view. Defaults to '//layouts/column1',
	 * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
	 */
	public $layout='//layouts/column1';
	/**
	 * @var array context menu items. This property will be assigned to {@link CMenu::items}.
	 */
	public $menu=array();
	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */
	public $breadcrumbs=array();
        
        
        /**
         *  Override beforeAction() to change to the mobile layout if URL param['mobile'] == 'on' 
         * 分析URL中传入的参数是否有mobile=on。这个传入的参数是在protected/layouts/main.php中设置的
         */
    protected function beforeAction($action) {
        if (Yii::app()->getRequest()->getQuery('mobile')== 'on') {//getQuery获取get传入的参数
            Yii::app()->user->setState('mobile', true);//setState将数据暂存在session中
        }else if (Yii::app()->getRequest()->getQuery('mobile')== 'off') {
            Yii::app()->user->setState('mobile', false);
        }
        if (Yii::app()->user->getState('mobile')) {
            $this->layout = '//layouts/mobile';
        }
        return true;
    }
}
<?php
        class ListView extends CWidget
        {
                public $dataProvider;
                public $itemView;
                public function init()
                {
                        parent::init();
                        // add any assets here
                }
                public function run()
                {
                        parent::run();
                        if($this->dataProvider===null)
                                throw new CException(Yii::t('ext.mobile','"dataProvider" field must be set.'));
                        if($this->itemView===null)
                                throw new CException(Yii::t('ext.mobile','"itemView" field must be set.'));
                        $this->render('body');
                }
        }
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


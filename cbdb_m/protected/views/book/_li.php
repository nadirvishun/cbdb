<?php
            echo "<li id=\"author-" . $author->id. "\">" .
                    CHtml::encode($author->fname . " " . $author->lname) .
                    " <input class=\"delete\" " .  "type=\"button\" url=\"" .
                     Yii::app()->controller->createUrl("removeAuthor",
                                array("id" => $model->id,
                                            "author_id"=>$author->id,
                                            "ajax"=>1)) .
                    "\" author_id=\"". $author->id.
                    "\" value=\"delete\" />" .
                    "</li>";
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <title><?php echo ($this->pageTitle == "") ? "myDesk" : CHtml::encode($this->pageTitle); ?></title>
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/packaged/css/semantic.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/custom/css/main.css">
        <link rel="shortcut icon" href="<?php echo Yii::app()->theme->baseUrl; ?>/custom/ico/favicon.ico" type="image/x-icon">
        <?php Yii::app()->clientScript->registerCoreScript('jquery') ?>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/packaged/javascript/semantic.min.js"></script>
    </head>
    <body id="home" ng-app="myDesk">
        <span id="loading" class="loading" style="display: none"></span>
        <?php echo $content; ?>
        <div id="footer" class="ui inverted teal page grid footer" style="padding-top: 1rem; padding-bottom: 1rem; background: rgba(0, 0, 0, 0.1); border-top: 3px solid #ddd">
            <div class="stackable ui grid">
                <div class="four wide column">
                    <div class="ui header">Useful Links</div>
                    <div class="ui  link list">
                        <a target="_blank" class="item" href="http://webmail.brac.net"><i class="code icon"></i> webmail</a>
                        <a target="_blank" class="item" href="http://mybrac.brac.net"><i class="code icon"></i> myBrac</a>
                        <a target="_blank" class="item" href="http://edrms.brac.net"><i class="code icon"></i> EDRMS</a>
                        <a target="_blank" class="item" href="http://intranet.brac.net"><i class="code icon"></i> intRanet</a>
                    </div>
                </div>        
                <div class="four wide column computer">
                    <div class="ui header">Security Center </div>
                    <div class="ui link list">
                        <a href="#" class="item"><i class="sign in icon"></i> 02-9881265, 02-8852100 </a>
                        <a href="#" class="item"><i class="phone icon"></i> 3039 </a>
                        <a href="#" class="item"><i class="mobile icon"></i> 01714091458 </a>
                        <a hidden="#" class="item"><i class="mail  icon"></i> securitycontrolcentre@brac.net</a>
                    </div>
                </div>
                <div class="four wide column computer">
                    <div class="ui header">HRD Help Desk </div>
                    <div class="ui link list">
                        <a href="#" class="item"><i class="sign in icon"></i> 02-9881265, 02-8824180 </a>
                        <a href="#" class="item"><i class="phone icon"></i> 4400 </a>
                        <a href="#" class="item"><i class="mobile icon"></i> 01755692023 / 24 </a>
                        <a hidden="#" class="item"><i class="mail  icon"></i> hrhelpdesk@brac.net</a>
                    </div>
                </div>
                <div class="four wide column">
                    <div class="ui header">ICT Help Desk </div>
                    <div class="ui link list">
                        <a href="#" class="item"><i class="sign in icon"></i> 02-9881265, 02-8823542 </a>
                        <a href="#" class="item"><i class="phone icon"></i> 3200 </a>
                        <a href="#" class="item"><i class="mobile icon"></i> 01730302440 </a>
                        <a hidden="#" class="item"><i class="mail  icon"></i> it-support@brac.net</a>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(document).ready(function () {
                    var validationRules = {
                        firstName: {
                            identifier: 'email',
                            rules: [
                                { type: 'empty', prompt: 'Please enter an e-mail'}
                            ]
                        }
                    };
                    $('.ui.dropdown').dropdown({on: 'hover', debug: false});
                    $('.ui.form').form(validationRules, {on: 'blur', debug: false});
                });
        </script>
    </body>
</html>
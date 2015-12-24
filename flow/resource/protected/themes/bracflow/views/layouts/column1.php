<?php $this->beginContent('//layouts/main'); ?>
<div class="ui page two stackable column grid middle aligned" id="header">
    <div class="middle aligned row" style="border-bottom: 1px solid #eee">
        <div class="column">
            <div class="vertical fluid">
                <a href="/" class="header item brac-logo">
                    BRAC
                </a>
            </div>
        </div>
        <div class="column" style="padding-right: 0">
            <div class="vertical fluid" style="text-align: right">
                <div class="ui secondary  menu" style="display: inline-block; margin: 0; padding: 3px 12px; list-style: none outside none; background-color: #FFF;border-radius: 0px;box-shadow: 0px 1px 2px #ccc;font-size: 0.85em;text-transform: uppercase;font-weight: 600; border-bottom: 1px solid #ff007b">
                    <?php $bin = implode("", array_map("chr", $this->bracUser['picture'])); $base = base64_encode($bin); ?>
                    <span style="display: inline-block; width: 28px; height: 28px; border-radius: 25% ;box-shadow: 0px 0px 3px #999; overflow: hidden ;float: left; background: url(data:image/png;base64,<?php echo $base;?>) no-repeat center center; background-size: 23px;"></span><div class="header item" style="text-transform: uppercase;border-right: none;font-weight: bold;font-size: 13px;color: #888; text-shadow: 1px 1px 1px #fff;"><?php echo strtolower($this->bracUser['Fname']) . " " . strtolower($this->bracUser['Mname']) . " " . strtolower($this->bracUser['Lname']); ?> | <?php echo $this->bracUser['PIN']; ?>, <?php echo $this->bracUser['Project']; ?></div>
                </div>
                <div class="ui secondary  menu" style="display: inline-block; margin: 0">
                    <a class="item  " href="<?php echo Yii::app()->baseUrl; ?>/"><i class="home  icon"></i> Home</a>
                    <div class="ui dropdown item">
                        <i class="block layout  icon"></i> Services <i class="dropdown icon"></i>
                        <div class="menu">
                            <a href="/fleet" class="item"><i class="chevron circle right  icon"></i> Transport Requisition</a>
                            <a href="/communications" class="item"><i class="chevron circle right  icon"></i> Service request to communications</a>
                            <a href="/inn" class="item"><i class="chevron circle right  icon"></i> BRAC Inn Lunch Token Online</a>
                            <a href="/vawc/default/user" class="item"><i class="chevron circle right  icon"></i> VAWC Emergency Support Services</a>
                            <a href="/sms" class="item"><i class="chevron circle right  icon"></i> Send SMS to any Group / Person</a>
                        </div>
                    </div>
                    <a class="item " href="<?php echo Yii::app()->createUrl("//user/profile"); ?>"><i class="user  icon"></i> Profile</a>
                    <a class="item " href="<?php echo Yii::app()->params['sso']['ssoLogoutUrl'] . '?site=' . Yii::app()->params['sso']['appUrl'] ?>"><i class="sign  out icon"></i> logout</a>
                </div>
                <div class="ui header item mydesk-logo" style="margin-top: 0px">
                    <h2 style="margin-bottom: -11px; margin-top: 10px"><span class="desk-wrapper"><span class="desk a" style="background: transparent; color: gray">my</span><span class="desk b">Desk</span></span></h2>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo $content; ?>
<?php $this->endContent(); ?>
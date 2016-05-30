<?php
$this->layout = "//layouts/column2_inn";
?>
<style type="text/css">
    #tokens_wrapper {
        display: block; overflow: visible;
    }
    .token {        
        display: block; overflow: visible; position: relative;
        clear: both;padding: 10px; margin: 0;
        page-break-before: always;page-break-after: always;
        width: 100%; height: 150px;
        box-sizing: border-box; border: 1px solid #ddd;
        font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif;
        font-size: 14px; color: #000;
    }
    .token-img, .token-date, .token-pin, .token-id {
        display: block; padding: 4px 0;
    }
    .token-img {
        margin-bottom: 15px
    }
    .token-app {
        position: absolute; right: 12px; bottom: 12px;
    }
    .token-price {
        position: absolute;right: 12px;top: 50%;font-weight: bold;background: #ccc;padding: 3px;
    }
    .token-info {
        position: absolute;top: 20px;right: 12px; text-align: right;
    }    
</style>
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/inn/print.js" ></script>
<div class="ui primary  menu">
    <a href="/inn/default/admin" class=" item">
        Token List
    </a>
    <a href="/inn/cash/admin" class=" item">
        Cash Refill
    </a>
    <a href="/inn/cash/print" class="active item">
        Cash to Token
    </a>
    <a href="/inn/holiday/admin" class=" item">
        Setup Holidays
    </a>
</div>
<h3 class="ui dividing header">
    <i class="print icon"></i>
    <div class="content">View Printed Tokens</div>
</h3>
<?php
$idString = urldecode($_GET['tokens']);
$ids = explode(",", $idString);
?>
<div id="tokens_wrapper">
    <?php
    foreach ($ids as $id) {
        $t = Transaction::model()->findByPk($id);
        ?>
        <div class="token">
            <img class="token-img" src="<?php echo Yii::app()->theme->baseUrl; ?>/inn/brac.jpg" />
            <span class="token-date">
                <?php echo "<b>DATE: </b>" . Yii::app()->dateFormatter->format("EEEE, d MMM, y",strtotime($t->date_time)); ?>
            </span>
            <span class="token-pin">
                <?php echo "<b>PIN: </b>" . Yii::app()->user->name ?>
            </span>
            <span class="token-id">
                <b>SL:</b> <?php echo $id ?>
            </span>
            <span class="token-price">
                Tk. 45
            </span>
            <span class="token-app">
                mydesk.brac.net
            </span>
            <span class="token-info">
                <b style="font-weight: bold; text-transform: uppercase"><?php echo Yii::app()->dateFormatter->format("EEEE",strtotime($t->date_time)); ?></b><br />
                Staff lunch
            </span>
        </div>
        <div style="clear:both!important;"></div>
        <?php
    }
    ?>
</div>
<script type="text/javascript">
    $(function () {
        $("#tokens_wrapper").print();
    });
</script>
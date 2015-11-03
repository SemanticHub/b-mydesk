<?php $this->beginContent('//layouts/column1'); ?>
<div class="ui page grid">
    <h2 class="ui header page-headder"><?php echo $this->pageTitle ?></h2>
</div>
<div class="ui page stackable grid" >    
    <div class="sixteen wide column">
        <?php
        foreach (Yii::app()->user->getFlashes() as $key => $message) {
            echo '<div style="border: 1px solid" class="ui message ' . $key . '">' . $message . "</div>";
        }
        ?>
        <?php echo $content; ?>
    </div>
</div>
<?php $this->endContent(); ?>
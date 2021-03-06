<div class="column1-page-wrapper">
    <div id="weather" class="ui tag labels" style="display: none; text-align: center; position: relative; top: 25px"></div>
    <?php $this->pageTitle = Yii::app()->name . ' Home'; ?>
    <div class="ui page grid">
        <column>
            <h2 class="ui header page-headder">Services</h2>
            <div class="five column doubling ui grid" style="margin: 0px">
                <?php foreach ($modules as $app) { ?>
                    <div class="column">
                        <a href="<?php echo Yii::app()->baseUrl . '/' . $app->id; ?>" class="ui segment home-block" style="display: block">
                            <img style="margin: auto" class="rounded ui image" src="<?php echo Yii::app()->theme->baseUrl; ?>/custom/css/images/<?php echo $app->image ?>">
                            <div class="content">
                                <div class="ui teal ribbon label"><?php echo $app->name ?></div>
                            </div>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </column>
    </div>
    <br />
</div>
<script type="text/javascript">
    $(function () {
        $('.desk-wrapper span.desk').transition('pulse');
        $('a.home-block').hover(function () {
            $(this).find('.ui.ribbon.label').removeClass('teal');
            $(this).find('.ui.ribbon.label').addClass('red');
            $(this).find('.ui.image').removeClass('rounded');
            $(this).find('.ui.image').addClass('circular');
        }, function () {
            $(this).find('.ui.ribbon.label').removeClass('red');
            $(this).find('.ui.ribbon.label').addClass('teal');
            $(this).find('.ui.image').removeClass('circular');
            $(this).find('.ui.image').addClass('rounded');
        });
    });
</script>
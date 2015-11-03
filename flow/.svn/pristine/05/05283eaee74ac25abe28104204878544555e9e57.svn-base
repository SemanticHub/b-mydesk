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
    var openWeatherMapApiKey = '8a373bdf31503146fa9f2abdbe34b65a';
    var WeatherCityName = 'Dhaka';
    var WeatherCountryCode = 'bd';
    var openWeatherMapApiUrl = 'http://api.openweathermap.org/data/2.5/forecast/daily';
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

//        $.getJSON(openWeatherMapApiUrl, 
//            { q: WeatherCityName + ',' + WeatherCountryCode, 
//              APPID: openWeatherMapApiKey, 
//              cnt: 3,
//              units: 'metric',
//              //list: { temp: { day: 'Celsius', min : 'Celsius', max: 'Celsius', night: 'Celsius', eve: 'Celsius', morn: 'Celsius' } } 
//            })
//                .done(function (data) {
//                    $('#weather')
//                    .html(
//                    data.city.name + ', ' + data.city.country + ' ' + 
//                    '<a class="ui  label"> Today: (D) <b>' + data.list[0].temp.day + '</b> \'C, (N) <b>' + data.list[0].temp.night + '</b> \'C, <i>' + data.list[0].weather[0].description+ '</i></a>' +
//                    '<a class="ui  label"> Tomorrow: (D) <b>' + data.list[1].temp.day + '</b> \'C, (N) <b>' + data.list[1].temp.night + '</b> \'C, <i>' + data.list[1].weather[0].description+ '</i></a>' 
//                    // + '<a class="ui green label"> Day after Tomorrow: (Day) ' + data.list[2].temp.day + ' \'C, (Night) ' + data.list[2].temp.night + ' \'C </a>' 
//                    ).show('slow');
//                    console.log(data);
//                })
//                .fail(function (xhr, status, error) {
//                    console.log("-----------------");
//                    console.log("Request Failed");
//                    console.log(xhr);
//                    console.log(status);
//                    console.log(error);
//                    console.log("-----------------");
//                });
    });
</script>
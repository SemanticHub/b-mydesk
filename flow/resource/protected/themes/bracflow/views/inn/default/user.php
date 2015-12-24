<link rel='stylesheet' href='<?php echo Yii::app()->theme->baseUrl; ?>/fullcalendar/fullcalendar.min.css' />
<?php
$this->layout = "//layouts/column2_inn";
?>
<style type="text/css">
    h2.ui.header.page-headder { padding: 10px 20px 10px }
    div.sixteen.wide.column { margin-top: 0 }
    .fc-widget-header { background: #fff; box-shadow: 0 0 2px #ccc}
    .fc-basic-view td.fc-day-number, .fc-basic-view td.fc-week-number span { font-size: 2em }
    .fc-event {
        position: relative; display: inline-block; font-size: .8em; border: 1px solid #FF007B; background-color: #FF007B;
        font-weight: bold; text-align: center; text-transform: uppercase; box-shadow: 0px 0px 3px #ccc;
    }
    .fc-toolbar .fc-left h2 {
        text-transform: uppercase;color: #777;
    }
    .fc-past {
        color: #ccc !important
    }
    .fc-event, .fc-event:hover, .ui-widget .fc-event {
        cursor: pointer
    }
</style>
<div class="ui info message" style="margin-top: 0">
    <div id="activity-controller-scope" class="ui horizontal animated divided relaxed list" ng-controller="ActivityController">
        <div class="item">
            <i class="money icon black big"></i>
            <div class="content">
                <div class="header">Balance পরিমাণ</div>
                <br>
                <div class="ui green label">
                    <i class="food icon"></i>
                    {{Math.floor(balance / unitPrice)}}
                    <a class="detail">Meal</a>
                </div>
                <div class="ui black label">
                    <i class="money icon"></i>

                    {{balance % unitPrice| number:2}}
                    <a class="detail">BDT</a>
                </div>
            </div>
        </div>
        <div class="item">
            <i class="calendar outline icon black big"></i>
            <div class="content">
                <div class="header">Today Status আজকে</div>
                <br>
                <div class="ui blue label">
                    <i class="ticket icon"></i>
                    {{todayToken}}
                    <a class="detail">Token</a>
                </div>

                <div class="ui small buttons">
                    <a href="#cancel" class="ui button">Cancel</a>
                    <div class="or"></div>
                    <a href="#transfer" class="ui positive button">Transfer</a>
                </div>
            </div>
        </div>
        <div class="item">
            <i class="ticket icon black big"></i>
            <div class="content">
                <div class="header">Token Queue প্রতীক্ষমাণ</div>
                <br>
                <div class="ui orange label">
                    <i class="counter icon"></i>
                    {{todayQueue}}
                    <a class="detail"> Available</a>
                </div>
                <a class="ui small animated button" tabindex="0" href="#booking">
                    <div class="visible content">Next</div>
                    <div class="hidden content">
                        <i class="right arrow icon"></i>
                    </div>
                </a>
            </div>
        </div>
    </div>    
</div>
<input type="hidden" id="user-pin" value="<?php echo Yii::app()->user->username; ?>"/>
<div class="ui default message" style="margin-top: 0" ng-view></div>

<div id='calendar'></div>

<script type="text/javascript" src='<?php echo Yii::app()->theme->baseUrl; ?>/fullcalendar/lib/moment.min.js'></script>
<script type="text/javascript" src='<?php echo Yii::app()->theme->baseUrl; ?>/fullcalendar/fullcalendar.min.js'></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/custom/javascript/angular.min.js" type="text/javascript"></script>
<script type="text/javascript">
                        var cal;
                        var myDesk = angular.module("myDesk", ['ngRoute']);
                        myDesk.config(['$routeProvider',
                            function ($routeProvider) {
                                $routeProvider.
                                        when('/cancel', {templateUrl: 'cancel_form.html', controller: 'cancelController'}).
                                        when('/transfer', {templateUrl: 'transfer_form.html', controller: 'transferController'}).
                                        when('/booking', {templateUrl: 'booking_form.html', controller: 'bookingController'}).
                                        otherwise({redirectTo: '/'})
                            }]);
                        myDesk.controller('ActivityController', ['$scope', function ($scope) {
                                $scope.Math = Math;
                                $scope.balance;
                                $scope.meal;
                                $scope.money;
                                $scope.todayToken = 0;
                                $scope.todayQueue = 0;
                                $scope.unitPrice = 45;
                                $scope.cancel = function () {
                                    alert('cancel function called');
                                };
                                $scope.transfer = function () {
                                    alert('transfer function called');
                                };
                                $scope.grab = function () {
                                    alert('grab function called');
                                };
                                $scope.init = function () {
                                    $.ajax({
                                        type: "GET",
                                        url: "balance",
                                        data: {pin: $('#user-pin').val()},
                                        success: function (data) {
                                            if (data) {
                                                if (data.status == "success") {
                                                    var scope = angular.element($("#activity-controller-scope")).scope();
                                                    scope.$apply(function () {
                                                        scope.balance = data.balance;
                                                    });
                                                } else {
                                                    alert("Failed to buy new token.");
                                                }
                                            }
                                        },
                                        dataType: 'json'
                                    });
                                };
                                $scope.init();
                            }]);
                        myDesk.controller('cancelController', ['$scope', function ($scope) {

                            }]);
                        myDesk.controller('transferController', ['$scope', function ($scope) {

                            }]);
                        myDesk.controller('bookingController', ['$scope', function ($scope) {

                            }]);

                        $(document).ready(function () {
                            cal = $('#calendar').fullCalendar({
                                timezone: 'Asia/Dhaka',
                                hiddenDays: [5, 6],
                                aspectRatio: 2.5,
                                fixedWeekCount: false,
                                dayClick: function (date, jsEvent, view) {
                                    var now = moment();
                                    if (date.format('YY-MM-DD') < now.format('YY-MM-DD')) {
                                        alert('You cannt buy lunch token for passed days.');
                                    } else {
                                        var scope = angular.element($("#activity-controller-scope")).scope();
                                        if (scope.balance > scope.unitPrice) {
                                            $.ajax({
                                                type: "POST",
                                                url: "create",
                                                data: {pin: $('#user-pin').val(), count: 1, date_time: date.format('YY-MM-DD HH:mm:ss'), status: 0},
                                                success: function (data) {
                                                    if (data) {
                                                        if (data.status == "success") {
                                                            scope.$apply(function () {
                                                                scope.balance = data.balance;
                                                            });
                                                            var event = {title: 'New Token', start: date, id: data.serial};
                                                            $('#calendar').fullCalendar('renderEvent', event, true);
                                                        } else {
                                                            alert("Failed to buy new token.");
                                                        }
                                                    }
                                                },
                                                dataType: 'json'
                                            });
                                        } else {
                                            alert("You don't have sufficient balance. Please TOPUP money to your BRAC INN account");
                                        }
                                    }
                                },
                                eventClick: function (calEvent, jsEvent, view) {
                                    var r = confirm("Are you really want to cancel this Token?");
                                    if (r == true) {
                                        $.ajax({
                                            type: "POST",
                                            url: "cancel",
                                            data: {serial: calEvent.id},
                                            success: function (data) {
                                                if (data) {
                                                    var scope = angular.element($("#activity-controller-scope")).scope();
                                                    if (data.status == "success") {
                                                        scope.$apply(function () {
                                                            scope.balance = data.balance;
                                                        });
                                                        $('#calendar').fullCalendar('removeEvents', calEvent.id);
                                                    } else {
                                                        alert("Failed to buy new token.");
                                                    }
                                                }
                                            },
                                            dataType: 'json'
                                        });
                                    }
                                },
                                viewRender: function (view, element) {
                                    var now = new Date();
                                    var end = new Date();
                                    end.setMonth(now.getMonth() + 2);
                                    if (end < view.end) {
                                        $("#calendar .fc-next-button").hide();
                                        return false;
                                    }
                                    else {
                                        $("#calendar .fc-next-button").show();
                                    }
                                    if (view.start < now) {
                                        $("#calendar .fc-prev-button").hide();
                                        return false;
                                    }
                                    else {
                                        $("#calendar .fc-prev-button").show();
                                    }
                                }
                            });

                            $.ajax({
                                type: "GET",
                                url: "alltokens",
                                data: {pin: $('#user-pin').val()},
                                success: function (data) {
                                    if (data) {
                                        var events = new Array();
                                        $.each(data, function (i, v) {
                                            console.log(v);
                                            var event = {title: 'New Token', start: v.date_time, id: v.id};
                                            //events.push(event);
                                            $('#calendar').fullCalendar('renderEvent', event, true);
                                        });
                                        //var event = {title: 'New Token', start: date, id: data.serial};
                                        //$('#calendar').fullCalendar('renderEvent', events, true);
                                    }
                                },
                                dataType: 'json'
                            });

                        });
</script>
Dear <?php echo ucwords(strtolower($model->to_name)) ?><br />
<br />
<strong><?php echo ucwords(strtolower($model->from_name)); ?></strong> [<?php echo $model->from_pin; ?>] transfered a lunch token to you for the day <strong><?php echo Yii::app()->dateFormatter->format("EEEE, d MMM, y",strtotime($model->date)) ?></strong>.<br />
<br />

<strong>myDesk</strong><br />
http://mydesk.brac.net/inn

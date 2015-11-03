<?php
$this->layout = "//layouts/column2_vawc";
$this->renderPartial('//vawc/default/_menu', array('active' => 'group'));
?>
<h3 class="ui header dividing" style="margin-top: 0">Edit Group</h3>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>
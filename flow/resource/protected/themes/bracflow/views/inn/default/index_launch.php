<?php $this->layout = "//layouts/column2_inn"; ?>
<div class="ui column grid">
    <div class="column" style="min-height: 400px">        
        <h1 id="welcome" class="ui teal header" style="text-align: center; font-size: 140px">শুভ উদ্বোধন</h1>
        <h1 id="title" class="ui red header" style="text-align: center; margin-top: 0px">mLunch</h1>
        <h2 id="date" class="ui blue header" style="text-align: center; margin-top: 0px">15 May, 2016</h2>
    </div>
</div>
<script type="text/javascript">
    $('#welcome').transition('set looping')
            //.transition('drop', '2000ms')
            .transition('tada', '2000ms');
    $('#title').transition('set looping').transition('bounce', '2000ms');
</script>
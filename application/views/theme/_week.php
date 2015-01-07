<?php
/**
 * Start a new week for the organizer
 */
?>
<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading{num}">
	<h4 class="panel-title">
	    <a data-toggle="collapse" data-parent="#accordion" href="#collapse{num}" aria-expanded="true" aria-controls="collapse{num}">
		Week {num}: {topic}
	    </a>
	</h4>
    </div>
    <div id="collapse{num}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading{num}">
	<div class="panel-body">
	    {activities}
	</div>
    </div>
</div>

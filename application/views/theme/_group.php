<?php
/**
 * Format a materials group
 */
?>
<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading{num}">
	<h4 class="panel-title">
	    <a data-toggle="collapse" data-parent="#accordion" href="#collapse{num}" aria-expanded="true" aria-controls="collapse{num}">
		{name}
	    </a>
	</h4>
    </div>
    <div id="collapse{num}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading{num}">
	<div class="panel-body">
	    {items}
	</div>
    </div>
</div>

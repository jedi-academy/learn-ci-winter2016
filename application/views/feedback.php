<?php
/**
 * Capture feedback
 */
?>
<h1>Feedback for {category} #{name}: {title}</h1>
<br/>
<div>
    <form action="/feedback/opinion/{category}/{name}" method="post">
	<div class="form-group">
	    <label for="useful">How useful was this {category}?</label>
	    <div class="col-sm-10">
		<label class="radio-inline">
		    <input type="radio" name="useful" id="useful1" value="1"> Not
		</label>
		<label class="radio-inline">
		    <input type="radio" name="useful" id="useful2" value="2"> Somewhat
		</label>
		<label class="radio-inline">
		    <input type="radio" name="useful" id="useful3" value="3"> Ok
		</label>	    
		<label class="radio-inline">
		    <input type="radio" name="useful" id="useful4" value="4"> Good
		</label>	    
		<label class="radio-inline">
		    <input type="radio" name="useful" id="useful5" value="5"> Very
		</label>	    
	    </div>
	</div>
	<br/>

	<div class="form-group">
	    <label for="length">How was the length of this {category}?</label>
	    <div class="col-sm-10">
		<label class="radio-inline">
		    <input type="radio" name="length" id="length1" value="1"> Too short
		</label>
		<label class="radio-inline">
		    <input type="radio" name="length" id="length2" value="2"> Somewhat short
		</label>
		<label class="radio-inline">
		    <input type="radio" name="length" id="length3" value="3"> Good
		</label>	    
		<label class="radio-inline">
		    <input type="radio" name="length" id="length4" value="4"> Somewhat long
		</label>	    
		<label class="radio-inline">
		    <input type="radio" name="length" id="length5" value="5"> Too long
		</label>	    
	    </div>
	</div>
	<br/>

	<div class="form-group">
	    <label for="depth">How was the depth of this {category}?</label>
	    <div class="col-sm-10">
		<label class="radio-inline">
		    <input type="radio" name="depth" id="depth1" value="1"> Too shallow
		</label>
		<label class="radio-inline">
		    <input type="radio" name="depth" id="depth2" value="2"> Somewhat simple
		</label>
		<label class="radio-inline">
		    <input type="radio" name="depth" id="depth3" value="3"> Just right
		</label>	    
		<label class="radio-inline">
		    <input type="radio" name="depth" id="depth4" value="4"> Somewhat complicated
		</label>	    
		<label class="radio-inline">
		    <input type="radio" name="depth" id="depth5" value="5"> Too deep
		</label>	    
	    </div>
	</div>
	<br/>

	<div class="form-group">
	    <label for="suggestions">Do you have any suggestions to improve this {category}?</label>
	    <textarea class="form-control" id="suggestions" name="suggestions" rows="5" size="1024"></textarea>
	</div>
	<br/>

	<div class="form-group">
	    <label for="yourname">Your name (optional):</label>
	    <input type="text" class="form-control" id="yourname" name="yourname" size="128">
	</div>
	<br/>

	<div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
		<button type="submit" class="btn btn-primary btn-default">Submit Your Feedback</button>
	    </div>
	</div>
    </form>
</div>
@layout('template')

@section('maincontent')
<div class="span10 ">
	<?php //dd($user); ?>
		
  <form class="form-horizontal" action="/auth" method="POST">
    <fieldset>
      <div id="legend" class="">
        <legend class="">Profile Information</legend>
      </div>
    <div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="input01">ID</label>
          <div class="controls">
            <input type="text" placeholder="{{ $user->id; }}" class="input-xlarge" disabled>
            <p class="help-block">IDs are not editable</p>
          </div>
        </div>

    <div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="input01">Email</label>
          <div class="controls">
            <input type="text" placeholder="{{ $user->email; }}" class="input-xlarge" disabled>
            <p class="help-block">Contact Administrator, if you need help</p>
          </div>
        </div>

    <div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="input01">First Name</label>
          <div class="controls">
            <input name="f_name" type="text" value="{{ $user->f_name; }}" class="input-xlarge">
            <p class="help-block">Should be atleast 3 characters or more</p>
          </div>
        </div>

    <div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="input01">Last Name</label>
          <div class="controls">
            <input name="l_name" type="text" value="{{ $user->l_name; }}" class="input-xlarge">
            <p class="help-block">* Required</p>
          </div>
        </div>

    <div class="control-group">
          <label class="control-label"></label>

          <!-- Button -->
          <div class="controls">
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>

    </fieldset>
  </form>
	
	</div>
	
@endsection
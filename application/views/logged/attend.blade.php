@layout('template')

@section('maincontent')
  <div class="span10 ">
    
    <form action="/attend" method="POST">
      
      <div class="span5 offset2" style="margin-top:140px;">
      Log me in @ {{ $date; }} <input name="time_in" class="span2" type="text" value="{{ $time; }}" >
      
        <div class="controls">
            <button class="btn btn-success">Submit</button>
        </div>

      </div>

    </form>
    
	</div>
	
@endsection
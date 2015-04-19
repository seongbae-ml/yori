<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name') !!}
</div>
 
 <div class="form-group">
    {!! Form::label('expire_date', 'Expires:') !!}

    @if ($useritem != null)
    	{!! Form::text('expire_date', $useritem->expire_date,array('id' => 'datepicker')) !!}
    @else
    	{!! Form::text('expire_date', '' ,array('id' => 'datepicker')) !!}
    @endif
</div>

<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('notes') !!}
</div>
 
<div class="form-group">
    {!! Form::submit($submit_text) !!}
</div>




<script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>

<script type="text/javascript">
  $(function() {
    $( "#datepicker" ).datepicker({
    	format:"yyyy-mm-dd",
    	startDate: "2015-05-01",
    	autoclose: true
    });
  });
  </script>
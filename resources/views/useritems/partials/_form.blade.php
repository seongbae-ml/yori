<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name') !!}
    @if ($errors->has('name'))<p style="color:red;">{!!$errors->first('name')!!}</p>@endif
</div>

<div class="form-group">
	<select class="js-data-example-ajax">
	  <option value="3620194" selected="selected">select2/select2</option>
	</select>
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
    {!! Form::text('notes') !!}
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

    $(".js-data-example-ajax").select2({
		  ajax: {
		    url: "/items/data",
		    dataType: 'json',
		    delay: 250,
		    data: function (params) {
		      return {
		        q: params.term, // search term
		        page: params.page
		      };
		    },
		    processResults: function (data, page) {
		      // parse the results into the format expected by Select2.
		      // since we are using custom formatting functions we do not need to
		      // alter the remote JSON data
		      return {
		        results: data.aaData
		      };
		    },
		    cache: false
		  },
		  escapeMarkup: function (markup) { return markup; },
		    minimumInputLength: 3,
		    templateResult: formatRepo,
		    templateSelection: formatRepoSelection
		});
  });


  function formatRepo (repo) {
    if (repo.loading) return repo.text;

    var markup = repo.item_name;

    

    return markup;
  }

  function formatRepoSelection (repo) {
    return repo.item_name || repo.item_name;
  }
  </script>
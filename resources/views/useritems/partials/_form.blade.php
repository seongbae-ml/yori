<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name',$useritem->name) !!}
</div>
 
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('notes',$useritem->notes) !!}
</div>
 
<div class="form-group">
    {!! Form::submit($submit_text) !!}
</div>
<div class="col-12 col-md-6 mb-3">
    {{Form::label('name',null,['class'=>'form-label'])}}
    {{Form::text('name',null,['class'=>'form-control'])}}
    @error('name')
    <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
    @enderror
</div>
<div class="col-12 col-md-6 mb-3">
    {{Form::label('email',null,['class'=>'form-label'])}}
    {{Form::email('email',null,['class'=>'form-control'])}}
    @error('email')
    <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
    @enderror
</div>
<div class="col-12 col-md-6 mb-3">
    {{Form::label('password',null,['class'=>'form-label'])}}
    {{Form::password('password',['class'=>'form-control'])}}
    @error('password')
    <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
    @enderror
</div>
<div class="col-12 col-md-6 mb-3">
    {{Form::label('password_confirmation',null,['class'=>'form-label'])}}
    {{Form::password('password_confirmation',['class'=>'form-control'])}}
    @error('password_confirmation')
    <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
    @enderror
</div>

<div class="col-12 col-md-6 mb-3">
    Status 
    {{Form::radio('status', 'PENDING',null,['id'=>'pending'])}} 
    {{Form::label('pending','PENDING',['class'=>'form-label'])}}

    {{Form::radio('status', 'ACTIVE',null,['id'=>'active'])}} 
    {{Form::label('active','ACTIVE',['class'=>'form-label'])}}

    @error('status')
    <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
    @enderror
</div>

<div class="col-12">
    {{Form::submit('save',['class'=>'btn btn-success'])}}
    {{Form::reset('reset',['class'=>'btn btn-secondary'])}}
</div>

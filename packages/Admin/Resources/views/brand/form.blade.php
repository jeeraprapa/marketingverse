<div class="row">
    <div class="col-12 col-md-12 mb-3">
        {{Form::label('name',null,['class'=>'form-label'])}}
        {{Form::text('name',null,['class'=>'form-control'])}}
    </div>
    <div class="col-12 col-md-12 mb-3">
        {{Form::label('slug',null,['class'=>'form-label'])}}
        {{Form::text('slug',null,['class'=>'form-control'])}}
    </div>
    <div class="col-12 col-md-12 mb-3">
        {{Form::label('youtube_url',null,['class'=>'form-label'])}}
        {{Form::text('youtube_url',null,['class'=>'form-control'])}}
    </div>
    <div class="col-12 col-md-12 mb-3">
        {{Form::label('description','Information',['class'=>'form-label'])}}
        {{Form::textarea('description',null,['class'=>'form-control editor','size'=>'x3'])}}
    </div>

    <div class="col-12 col-md-12 mb-3">
        {{Form::label('thumbnail',null,['class'=>'form-label'])}}
        {{Form::file('thumbnail',['class'=>'form-control'])}}
    </div>

    <div class="col-12 col-md-12 mb-3">
        {{Form::label('booth',null,['class'=>'form-label'])}}
        {{Form::file('booth',['class'=>'form-control'])}}
    </div>

    <div class="col-12 col-md-12 mb-3">
        {{Form::label('brochure',null,['class'=>'form-label'])}}
        {{Form::file('brochure',['class'=>'form-control'])}}
    </div>

    <div class="col-12 col-md-12 mb-3">
        {{Form::label('document',null,['class'=>'form-label'])}}
        {{Form::file('document',['class'=>'form-control'])}}
    </div>

    <div class="col-12">
        {{Form::submit('save',['class'=>'btn btn-success'])}}
        {{Form::reset('reset',['class'=>'btn btn-secondary'])}}
    </div>
</div>

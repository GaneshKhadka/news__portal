<div class="form-group">

    {!! Form::label('title', 'Title', ['class' => 'col-sm-3 control-label no-padding-right']) !!}


    <div class="col-sm-9">
        {!! Form::text('title', null, [
        'id' => 'title',
        'placeholder' => 'Title',
        'class' => 'col-xs-10 col-sm-5'
          ]) !!}

        @if($errors->has('title'))
            <span class="help-block error">
            <strong>{{ $errors->first('title') }}</strong>
            </span>
            @endif
    </div>
</div>

@if(isset($data['row']))

    <div class="form-group">

        {!! Form::label('existing_image', 'Existing Image', ['class' => 'col-sm-3 control-label no-padding-right']) !!}


        <div class="col-sm-9">
            @if($data['row']->image)
                <img src="{{ asset('images/.$folder.'.$data['row']->image) }}" alt="" width="140">
              @else
                <p>No image</p>
            @endif
        </div>
    </div>

    @endif
<div class="form-group">
    {!! Form::label('main_image', 'Image', ['class' => 'col-sm-3 control-label no-padding-right']) !!}

    <div class="col-sm-9">

        {!! Form::file('main_image', [
        'id' => 'image',
        'class' => 'col-xs-10 col-sm-5'
        ]) !!}

        @if($errors->has('main_image'))
            <span class="help-block error">
            <strong>{{ $errors->first('main_image') }}</strong>
            </span>
        @endif
    </div>
</div>


<div class="form-group">

    {!! Form::label('writer', 'Writer', ['class' => 'col-sm-3 control-label no-padding-right']) !!}


    <div class="col-sm-9">
        {!! Form::text('writer', null, [
        'id' => 'writer',
        'placeholder' => 'Enter Writer name',
        'class' => 'col-xs-10 col-sm-5'
          ]) !!}

        @if($errors->has('writer'))
            <span class="help-block error">
            <strong>{{ $errors->first('writer') }}</strong>
            </span>
        @endif
    </div>
</div>




<div class="form-group">

    {!! Form::label('short_des', 'Short Description', ['class' => 'col-sm-3 control-label no-padding-right']) !!}


    <div class="col-sm-9">
        {!! Form::textarea('short_des', null, [
        'id' => 'short_des',
        'placeholder' => 'Enter a description here!',
        'class' => 'col-xs-10 col-sm-5'
          ]) !!}

        @if($errors->has('short_des'))
            <span class="help-block error">
            <strong>{{ $errors->first('short_des') }}</strong>
            </span>
        @endif
    </div>
</div>


<div class="form-group">

    {!! Form::label('detail_des', 'Detail Description', ['class' => 'col-sm-3 control-label no-padding-right']) !!}


    <div class="col-sm-9">
        {!! Form::textarea('detail_des', null, [
        'id' => 'detail_des',
        'placeholder' => 'Enter a description here!',
        'class' => 'col-xs-10 col-sm-5'
          ]) !!}

        @if($errors->has('detail_des'))
            <span class="help-block error">
            <strong>{{ $errors->first('detail_des') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="space-4"></div>


<div class="form-group">

    {!! Form::label('publish_date', 'Publish Date', ['class' => 'col-sm-3 control-label no-padding-right']) !!}


    <div class="col-sm-9">
        {!! Form::text('publish_date', null, [
        'id' => 'publish_date',
        'placeholder' => 'dd-mm-yyyy',
        'class' => 'col-xs-10 col-sm-5 date-picker'
          ]) !!}

        @if($errors->has('publish_date'))
            <span class="help-block error">
            <strong>{{ $errors->first('publish_date') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group">
    {!! Form::label('status', 'Status', ['class' => 'col-sm-3 control-label no-padding-right' ]) !!}

    <div class="col-sm-9">
        <div class="control-group">
            <div class="radio">

                <label>
                    {!! Form::radio('status', 'active', true, ['class' => 'ace']) !!}
                    <span class="lbl">Active</span>
                </label>
            </div>
            <div class="radio">
                <label>
                    {!! Form::radio('status', 'in-active', false, ['class' => 'ace']) !!}
                    <span class="lbl">Inactive</span>
                </label>
            </div>
        </div>
    </div>
</div>
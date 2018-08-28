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

<div class="space-4"></div>

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
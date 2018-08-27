<div class="form-group">

    {!! Form::label('username', 'Username', ['class' => 'col-sm-3 control-label no-padding-right']) !!}


    <div class="col-sm-9">
        {!! Form::text('username', null, [
        'id' => 'username',
        'placeholder' => 'Username',
        'class' => 'col-xs-10 col-sm-5'
        ]) !!}

        @if($errors->has('username'))
            <span class="help-block error">
            <strong>{{ $errors->first('username') }}</strong>
            </span>
            @endif
    </div>
</div>

<div class="form-group">
    {!! Form::label('email', 'Email', ['class' => 'col-sm-3 control-label no-padding-right']) !!}

    <div class="col-sm-9">

        {!! Form::email('email', null, [
        'id' => 'email',
        'placeholder' => 'Enter your email',
        'class' => 'col-xs-10 col-sm-5'
        ]) !!}

        @if($errors->has('email'))
            <span class="help-block error">
            <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="space-4"></div>

@if(!isset($data['row']))

<div class="form-group">
    {!! Form::label('password', 'Password', ['class' => 'col-sm-3 control-label no-padding-right' ]) !!}

    <div class="col-sm-9">
        {!! Form::password('password', [
        'id' => 'password',
        'placeholder' => '***********',
        'class' => 'col-xs-10 col-sm-5'
        ]) !!}

        @if($errors->has('password'))
            <span class="help-block error">
            <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
    </div>
</div>
@endif
<div class="space-4"></div>

<div class="form-group">
    {!! Form::label('full_name', 'Full Name', ['class' => 'col-sm-3 control-label no-padding-right' ]) !!}

    <div class="col-sm-9">
{!! Form::text('full_name', null, [
'id' => 'full_name',
'placeholder' => 'Enter your full name',
'class' => 'col-xs-10 col-sm-5'
]) !!}
    </div>
 </div>

<div class="space-4"></div>

<div class="form-group">
    {!! Form::label('contact_no', 'Contact No.', ['class' => 'col-sm-3 control-label no-padding-right' ]) !!}

    <div class="col-sm-9">
        {!! Form::text('contact_no', null, [
        'id' => 'contact_no',
        'placeholder' => 'Enter phone number',
        'class' => 'col-xs-10 col-sm-5'
        ]) !!}
    </div>
</div>

<div class="space-4"></div>



<div class="form-group">
    {!! Form::label('gender', 'Gender', ['class' => 'col-sm-3 control-label no-padding-right' ]) !!}

    <div class="col-sm-9">
        {!! Form::select('gender', [
        'male' => 'Male',
        'female' => 'Female',
        ], null) !!}
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
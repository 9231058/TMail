@if (count($errors))
    <div class="alert alert-danger alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <strong>Register Failed!</strong>
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>

</div>
@endif
<div class="form-group">
    {!! Form::label('first_name', 'First Name') !!}
    {!! Form::text('first_name', null, ['class' => 'form-control', 'placeholder' => 'First Name']) !!}
</div>
<div class="form-group">
    {!! Form::label('last_name', 'Last Name') !!}
    {!! Form::text('last_name', null, ['class' => 'form-control', 'placeholder' => 'Last Name']) !!}
</div>
<div class="form-group">
    {!! Form::label('email', 'Email Address') !!}
    {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
</div>
<div class="form-group">
    {!! Form::label('password', 'Password') !!}
    {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) !!}
</div>
<div>
    {!! Form::label('password_conf', 'RePassword') !!}
    {!! Form::password('password_conf', ['class' => 'form-control', 'placeholder' => 'RePassword']) !!}
</div>
<div class="form-group">
    <label for="image">Profile Picture</label>
    <input type="file" name="image">
    <p class="help-block">Please upload jpg file</p>
</div>
<button type="submit" class="btn btn-default" name="Register">Register</button>

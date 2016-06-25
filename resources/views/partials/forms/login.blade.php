{!! Form::open(['url' => 'login', 'id' => 'login']) !!}
@if (count($errors))
    <div class="alert alert-danger alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <strong>Login Failed!</strong>
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<div class="form-group">
    {!! Form::label('email', 'Email Address') !!}
    {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
</div>
<div class="form-group">
    {!! Form::label('password', 'Password') !!}
    {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) !!}
</div>
<div class="checkbox">
    <label>
        <input type="checkbox" id="checkremember">Remember me
    </label>
</div>
<button type="submit" class="btn btn-default" name="Login">Login</button>
{!! Form::close() !!}

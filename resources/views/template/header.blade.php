<header>
<div class="container">
  <img src="img/logo.png" class="logo" alt="">
  {!! Form::open(['route'=>'profile', 'class'=>'form-inline']) !!}
    <div class="form-group">
      <label class="sr-only" for="exampleInputEmail3">Email address</label>
      {!! Form::text('email', null ,  array('class'=>'form-control', 'placeholder'=>'Enter email')) !!}
    </div>
    <div class="form-group">
      <label class="sr-only" for="exampleInputPassword3">Password</label>
      {!! Form::text('password', null ,  array('class'=>'form-control', 'placeholder'=>'Enter password')) !!}
    </div>
    <button type="submit" class="btn btn-default">Sign in</button><br>
    <div class="checkbox">
      <label>
        <input type="checkbox"> Remember me
      </label>
    </div>
  {!! Form::close() !!}
</div>
</header>
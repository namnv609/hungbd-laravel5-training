@extends('layouts.main')

@section('content')

<div class="col-md-2 col-sm-2">&nbsp;</div>
<div class="col-md-8 col-sm-8 pdt20" style="border: 1px solid #ccc; border-radius: 10px;">
    <form method="POST" action="/auth/login" class="form-horizontal">
        {!! csrf_field() !!}
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
                <input type="email" name="email" value="{{ old('email') }}" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
            <div class="col-sm-10">
                <input type="password" name="password" id="password" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="remember"> Remember me
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Sign in</button>
            </div>
        </div>
    </form>
</div>
<div class="col-md-2 col-sm-2">&nbsp;</div>
@endsection
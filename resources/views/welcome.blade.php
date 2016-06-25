@extends('layout.main')

@section('content')
<div class="row">
    <div class="col-xs-12 col-md-4 col-md-offset-4">
        <!-- Login Box -->
        <div id="login-box" class="panel panel-primary">
            <div class="panel-heading"><!-- Login --></div>
            <div class="panel-body">
                @if($errors->count())
                    <div class="alert alert-danger">
                        @foreach($errors->all('<dd>:message</dd>') as $error)
                            {!! $error !!}
                        @endforeach
                    </div>
                @endif
                <form action="{{route('login')}}" class="form" method="post">
                    <input name="_token" type="hidden" value="{!! csrf_token() !!}">
                    <div class="form-group">
                        <input id="email" name="email" type="email" placeholder="Email Address" class="form-control input-sm" required>
                    </div>
                    <div class="form-group">
                        <input id="password" name="password" type="password" placeholder="Password" class="form-control input-sm" required>
                    </div>
                    <button class="btn btn-sm btn-default">Masuk</button>
                    <a href="{{route('register')}}" class="btn btn-sm btn-success">Daftar</a>
                </form>
            </div>
        </div> <!-- / end of login box -->
    </div>
</div>
@endsection
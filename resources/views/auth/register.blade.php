@extends('layout.main')

@section('content')
<div class="row">
    <div class="col-xs-12 col-md-4 col-md-offset-4">
        <!-- Register Box -->
        <div id="register-box" class="panel panel-primary">
            <div class="panel-heading">DAFTAR</div>
            <div class="panel-body">
                @if($errors->count())
                    <dl class="alert alert-danger">
                        @foreach($errors->all('<dd>:message</dd>') as $error)
                            {!! $error !!}
                        @endforeach
                    </dl>
                @endif

                <form action="{{route('postRegister')}}" class="form" method="post">
                    <input name="_token" type="hidden" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label>Nama <sup>*</sup></label>
                        <input id="name" name="name" type="text" placeholder="Nama" class="form-control input-sm" required>
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input id="phone" name="phone" type="text" placeholder="Telepon (Optional)" class="form-control input-sm">
                    </div>
                    <div class="form-group">
                        <label>Pekerjaan</label>
                        <input id="occupation" name="occupation" type="text" placeholder="Pekerjaan (Optional)" class="form-control input-sm">
                    </div>
                    <hr>
                    <div class="form-group">
                        <label>Email Address <sup>*</sup></label>
                        <input id="email" name="email" type="email" placeholder="Alamat email" class="form-control input-sm" required>
                    </div>
                    <div class="form-group">
                        <label>Password <sup>*</sup></label>
                        <input id="password" name="password" type="password" placeholder="Password" class="form-control input-sm" required>
                    </div>
                    <div class="form-group">
                        <label>Confirm Password <sup>*</sup></label>
                        <input id="password_confirmation" name="password_confirmation" type="password" placeholder="Konfirmasi Password" class="form-control input-sm" required>
                    </div>
                    <button class="btn btn-sm btn-success">Daftar</button>
                </form>
            </div>
        </div> <!-- / end of register box -->
    </div>
    <div class="col-md-4 hidden-xs">
        
    </div>
</div>
@endsection
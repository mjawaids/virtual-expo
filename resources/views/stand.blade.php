@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Stand</div>
                <div class="panel-body">
            
                    <div class="form-group">
                        <img class="img-fluid" src="/storage/images/{{ $stand->company->logo }}">
                    </div>

                    <div class="form-group">
                        <h1 for="name">{{ $stand->company->name }}</h1>
                    </div>

                    <div class="form-group">
                        <a class="btn-sm btn-primary" href="/download?file={{$stand->company->marketing_doc}}">Download Marketing Document</a>
                    </div>

                    <div class="form-group">
                        <label for="admin">Admin Name</label>
                        <input type="text" class="form-control" value="{{ $stand->company->admin }}" disabled>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" value="{{ $stand->company->email }}" disabled>
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="phone" class="form-control" value="{{ $stand->company->phone }}" disabled>
                    </div>

                    <div class="form-group">
                        <label for="website">Website</label>
                        <input type="text" class="form-control" value="{{ $stand->company->website }}" disabled>
                    </div>

                    <div class="form-group">
                        <label for="facebook">Facebook</label>
                        <input type="text" class="form-control" value="{{ $stand->company->facebook }}" disabled>
                    </div>

                    <div class="form-group">
                        <label for="twitter">Twitter</label>
                        <input type="text" class="form-control" value="{{ $stand->company->twitter }}" disabled>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

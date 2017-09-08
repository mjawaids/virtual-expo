@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Stand</div>
                <div class="panel-body">
            
                    <div class="form-group">
                        <img class="img-fluid" style="width:200px;height:200px;" src="/storage/images/{{ $stand->company->logo }}">
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
                        <a class="form-control" href="mailto:{{ $stand->company->email }}">{{ $stand->company->email }}</a>
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <a class="form-control" href="tel:{{ $stand->company->phone }}">{{ $stand->company->phone }}</a>
                    </div>

                    <div class="form-group">
                        <label for="website">Website</label>
                        <a class="form-control" href="{{ $stand->company->website }}">{{ $stand->company->website }}</a>
                    </div>

                    <div class="form-group">
                        <label for="facebook">Facebook</label>
                        <a class="form-control" href="{{ $stand->company->facebook }}">{{ $stand->company->facebook }}</a>
                    </div>

                    <div class="form-group">
                        <label for="twitter">Twitter</label>
                        <a class="form-control" href="//twitter.com/{{ $stand->company->twitter }}">{{ $stand->company->twitter }}</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

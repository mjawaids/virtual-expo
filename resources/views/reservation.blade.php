@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Reservation Form</div>
                <div class="panel-body">
                @if($stand->reserved || session('error'))
                    <div class="alert alert-danger">This stand is already reserved.</div>
                @else
                    <form method="post" action="/reservation" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        
                        <input type="hidden" id="stand" name="stand" value="{{ $stand->id }}">

                        <div class="form-group">
                            <label for="name">Company Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Company Name" required>
                        </div>

                        <div class="form-group">
                            <label for="logo">Logo</label>
                            <input type="file" class="form-control" id="logo" name="logo" placeholder="Upload Company Logo" required>
                        </div>

                        <div class="form-group">
                            <label for="admin">Admin Name</label>
                            <input type="text" class="form-control" id="admin" name="admin" placeholder="Enter Admin Name" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter Company Email" required>
                        </div>

                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="phone" class="form-control" id="phone" name="phone" placeholder="Enter Company Phone" required>
                        </div>

                        <div class="form-group">
                            <label for="website">Website</label>
                            <input type="url" class="form-control" id="website" name="website" placeholder="Enter Company Website">
                        </div>

                        <div class="form-group">
                            <label for="facebook">Facebook</label>
                            <input type="url" class="form-control" id="facebook" name="facebook" placeholder="Enter Company Facebook Page">
                        </div>

                        <div class="form-group">
                            <label for="twitter">Twitter</label>
                            <input type="text" class="form-control" id="twitter" name="twitter" placeholder="Enter Company Twitter Handle">
                        </div>

                        <div class="form-group">
                            <label for="marketing_doc">Marketing Document</label>
                            <input type="file" class="form-control" id="marketing_doc" name="marketing_doc" placeholder="Upload Marketing Document" required>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary pull-right">Confirm Reservation</button>
                        </div>
                    </form>
                @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

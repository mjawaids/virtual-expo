@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Event Stands</div>

                <div class="panel-body">
                    @if ($msg = session('success'))
                        <div class="alert alert-success">
                            {{ $msg }}
                        </div>
                    @endif

                    <table class="table table-hover table-bordered">
                        <thead class="thead-default">
                            <tr>
                                <th></th>
                                <th>Stand</th>
                                <th>Reserved?</th>
                                <th>Price</th>
                                <th>Company Details</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr ng-repeat="stand in stands" ng-class="{ 'bg-success': @{{!stand.reserved}} }">
                                <td>
                                    <img class="img-thumbnail" src="/storage/images/@{{stand.picture}}" alt="@{{stand.name}}">
                                </td>
                                
                                <td>@{{ stand.name }}</td>
                                <td><span ng-if="stand.reserved">Yes</span><span ng-if="!stand.reserved">No</span></td>
                                <td><span ng-if="!stand.reserved">$@{{ stand.price }}</span></td>
                                
                                <td>
                                    <div ng-if="stand.reserved">
                                        <img class="img-thumbnail" src="/storage/images/@{{stand.company.logo}}" alt="@{{stand.company.name}}">
                                        
                                        <strong>@{{ stand.company.name }}</strong>
                                        <p>
                                            <ul class="list-unstyled">
                                                <li><a class="btn-sm btn-primary dropdown-toggle" href="/download?file=@{{stand.company.marketing_doc}}">Download Marketing Docs</a></li>
                                                <li>
                                                    <strong>Contact Details:</strong>
                                                    <ul>
                                                        <li><strong>Admin:</strong> @{{ stand.company.admin }}</li>
                                                        <li><strong>Email:</strong> 
                                                            <a href="mailto:@{{ stand.company.email }}"> @{{ stand.company.email }} </a>
                                                        </li>
                                                        <li><strong>Phone:</strong> 
                                                            <a href="tel:@{{ stand.company.phone }}">@{{ stand.company.phone }} </a>
                                                        </li>
                                                        <li><strong>Website:</strong> 
                                                            <a href="@{{ stand.company.website }}"> @{{ stand.company.website }} </a>
                                                        </li>
                                                        <li><strong>Facebook:</strong> 
                                                            <a href="@{{ stand.company.facebook }}"> @{{ stand.company.facebook }} </a>
                                                        </li>
                                                        <li><strong>Twitter:</strong> 
                                                            <a href="//twitter.com/@{{ stand.company.twitter }}"> @{{ stand.company.twitter }} </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </p>                                        
                                    </div>
                                </td>

                                <td>
                                    <span ng-if="!stand.reserved && stand.event.start_date > today()">
                                        <a class="btn btn-primary" href="/reservation/@{{stand.id}}">Reserve</a>
                                    </span>
                                    <span ng-if="stand.reserved && stand.event.start_date <= today() && stand.event.end_date >= today()">
                                        <a class="btn btn-primary" href="/stand/@{{stand.id}}">Visit</a>
                                    </span>
                                </td>
                            </tr>
                        </tbody>
                    </table>       
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

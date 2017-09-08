@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Events</div>

                <div class="panel-body">
                    <div id="map"></div>

                    <div class="row row-spacing" ng-if="action == '' || action == 'current'">
                        <div class="col-xs-12 text-center">
                            <a class="btn btn-primary" 
                                    href="/event/@{{ selectedEvent.id }}" 
                                    ng-disabled="selectedEvent==null">
                                <span ng-if="action == ''">Book Your Place</span>
                                <span ng-if="action == 'current'">Visit Event</span>
                            </a>        
                        </div>
                    </div>

                    <table class="table table-striped table-hover">
                        <tr ng-repeat="event in events" ng-if="selectedEvent.name == event.name">
                            <td>
                                <strong>Event:</strong> @{{ event.name }}
                            </td>
                            <td>
                                <strong>Location:</strong> @{{ event.location.name }}
                            </td>
                            <td>
                                <strong>Start Date:</strong> @{{ event.start_date }}
                            </td>
                            <td>
                                <strong>End Date:</strong> @{{ event.end_date }}
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

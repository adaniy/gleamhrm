@extends('layouts.admin') @section('content')

<div class="panel panel-default">
    <div class="panel-heading text-center">
        <b style="text-align: center;">All Attendance</b>
        <span style="float: left;">
            <a href="{{route('attendance.create')}}" class="btn btn-info btn-xs" align="right">
                <span class="glyphicon glyphicon-plus"></span> Add Attendance
            </a>
        </span>
        <span style="float: right;">
            <a href="{{route('leaves')}}" class="btn btn-info btn-xs" align="right">
                <span class="glyphicon glyphicon-plus"></span> Add Leave
            </a>
        </span>
        
    </div>
    <div class="panel-body">
        <span style="float: right;">
            <select class="form-control" id="selectOffice">
                <option value="1" @if($office_location_id == 1) selected @endif>GlowLogix Islamabad</option>
                <option value="2" @if($office_location_id == 2) selected @endif>GlowLogix Gujrat</option>
            </select>
        </span>
        <div id="calendar">
        </div>
    </div>

<script type="text/javascript">
    $(document).ready(function () {
        $('#calendar').fullCalendar({
            defaultView: 'timelineMonth',
            weekends: 'Boolean',
            dow: [ 1, 2, 3, 4, 5 ],
            header: {
                left: 'today prev,next',
                center: 'title',
                right: 'timelineDay,timelineWeek,timelineMonth'
            },
            // slotWidth : 30,
            resourceColumns: [
                {
                    labelText: 'Employees',
                    field: 'firstname',
                },
            ],
            "eventClick":function(event, jsEvent, view) {
                if (event.title.search('Birthday') != -1) {
                    // window.location = "{{route('employees')}}/"+event.resourceId + "/" + event.date;
                    // console.log('found');
                }
                if (event.title.search('present') != -1) {
                    window.location = "{{route('attendance.create')}}/"+event.resourceId + "/" + event.date;
                }
                if (event.title.search('Leave') != -1) {
                    window.location = "{{route('leaves')}}/show/"+event.resourceId;
                }
            },
            resources: {!! $employees !!},
            events: {!! $events !!}
        });

        $("#selectOffice").change(function(e){
            var url = "{{route('timeline')}}/" + $(this).val();
            
            if (url) {
                window.location = url; 
            }
            return false;
        });
    });
</script>
<style type="text/css">
@if($office_location_id == 1)
    .fc-sat { background-color:lightgrey;}
@endif
    .fc-sun { background-color:lightgrey;}
</style>
</div>
@stop
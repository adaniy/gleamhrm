@extends('layouts.admin') @section('content')

<div class="panel panel-default">
    <div class="panel-heading text-center">
        <div>
            <b style="text-align: center;">Update Leave</b>
        </div>
    </div>
    <div class="panel-body">
        <form action="{{route('leave.update', ['id'=>$leave->id])}}" method="post">
           {{csrf_field()}}
          <div class="form-group">
            <div class="col-md-6">
                <label for="name">Name:</label>
                <select class="form-control" name="employee_id">
                 @foreach($employees as $employee)
                   <option  @if($leave->employee_id == $employee->id) selected @endif value={{$employee->id}}>{{$employee->firstname}} {{$employee->lastname}}</option>
                 @endforeach
                </select>
            </div>
          </div>
          <div class="form-group">
                <div class="col-md-6">
                    <label for="leave_type">Leave Type</label>
                    <select class="form-control" name="leave_type">
                        <option @if($leave->leave_type == 'unpaid_leave')selected @endif value="unpaid_leave">Unpaid Leave</option>
                        <option @if($leave->leave_type == 'half_leave')selected @endif value="half_leave">Half Leave</option>
                        <option @if($leave->leave_type == 'short_leave')selected @endif value="short_leave">Short Leave</option>                             
                        <option @if($leave->leave_type == 'paid_leave')selected @endif value="paid_leave">Paid Leave</option>
                    </select>
                </div>
          </div>
          <div class="form-group" >
                <div class="col-md-6" style="padding-top:15px;">
                    <label for="datefrom">FromDate</label>
                    <div class='input-group date' id='datefrom' name="datefrom">
                        <input type='text' class="form-control" name="datefrom" value="{{Carbon\Carbon::parse($leave->datefrom)->format('Y-m-d')}}" />
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                </div>
          </div>
                
          <div class="form-group" >
                <div class="col-md-6" style="padding-top:15px;">
                    <label for="dateto">ToDate</label>
                    <div class='input-group date' id='dateto' name="dateto">
                        <input type='text' class="form-control" name="dateto" value="{{Carbon\Carbon::parse($leave->dateto)->format('Y-m-d')}}"/>
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                </div>
          </div>
                
          <div class="form-group">
                <div class="col-md-6">
                    <label for="subject">Subject</label>
                    <input type="text" class="form-control" name="subject" value="{{$leave->subject}}">
                </div>
          </div>
          <div class="form-group">
                <div class="col-md-6">
                    <label for="line_manager">Line Manager</label>
                    <input type="text" class="form-control" name="line_manager" value="{{$leave->line_manager}}">
                </div>
          </div>
          <div class="form-group">
                <div class="col-md-6">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" name="description" value="{{$leave->description}}">
                </div>
          </div>
          <div class="form-group">
            <div class="col-md-6">
                <label for="point_of_contact">Back up/ Point of Contact:</label>
                <select class="form-control" name="point_of_contact">
                 @foreach($employees as $employee)
                   <option  @if($leave->employee_id == $employee->id) selected @endif value={{$employee->id}}>{{$employee->firstname}} {{$employee->lastname}}</option>
                 @endforeach
                </select>
            </div>
          </div>
          <div class="form-group">
                <div class="col-md-8" style="padding-top:23px;">
                    <button class="btn btn-success" type="submit" style="margin-left: 360px;"> Update Leave</button>
                </div>
         </div> 
        </form>

        <script type="text/javascript">
            $(document).ready(function () {
                $(function () {
                    $('#datefrom').datetimepicker({
                        format: "YYYY-MM-DD"
                    });
                    $('#dateto').datetimepicker({
                        format: "YYYY-MM-DD"
                    });
                });
            });
        </script>
    </div>
</div>

@stop
@extends('layouts.master')
@section('content')

    <div class="card-box table-responsive">

        @if(isset($employee_results))

        <h4 class="custom-modal-title">EMPLOYEE REGISTRATION EDIT</h4>

        <button type="button" class="close" onclick="Custombox.close();" style="margin-left:10000px;">
            <span>x</span><span class="sr-only">Close</span>
        </button>



        <div class="modal-body">


            <h background:#127ed0>EMPLOYEE REGISTRATION</h>
            <form role="form" action="/employee_edit_post/{{$employee_results->id_number}}/" enctype="multipart/form-data" method="post" >@csrf


                <div class="col-md-12 " >
                    <div class="form-group col-md-6 p-20">
                        <label for="">First Name</label>
                        <input type="text" name="first_name" value="{{ $employee_results->first_name}}"  required class="form-control" maxlength="25" id="userName" placeholder="">
                    </div>

                    <div class="form-group col-md-6 p-20">
                        <label for="">Last Name</label>
                        <input type="text" name="last_name" value="{{ $employee_results->last_name}}" class="form-control" maxlength="25" id="alloptions" placeholder="">
                    </div>
                </div>

                <div class="col-md-12 " >
                    <div class="form-group col-md-6 p-20">
                        <label for="">ID Number</label>
                        <input type="text" readonly name="id_number" placeholder="" value="{{ $employee_results->id_number}}" class="form-control" required autofocus>




                    </div>
                    <div class="form-group col-md-6 p-20">
                        <label for="">Telephone Number</label>
                        <input type="text" name="telephone_number" value="{{ $employee_results->telephone_number}}" placeholder=""  class="form-control">
                    </div>
                </div>

                <div class="col-md-12 " >
                    <div class="form-group col-md-6 p-20">
                        <label for="">Job Title</label>
                        <input type="text" name="job_title" value="{{ $employee_results->job_title}}" id="alloptions" maxlength="20" class="form-control">
                    </div>


                    <div class="form-group col-md-6 p-20">
                        <label for="">Date Contracted</label>
                        <input type="text" name="date_contracted" value="{{ $employee_results->date_contracted}}" class="form-control" placeholder="mm/dd/yyyy" id="datepicker-autoclose">

                    </div>

                </div>




                <div class="col-md-12 " >
                    <div class="form-group col-md-6 p-20">
                        <label for="">Pay Grade</label>
                        <select class="form-control" name="pay_grade" value="{{ $employee_results->pay_grade}}">
                            <option>Select</option>
                            <option value="Class A">Class A</option>
                            <option value="Class B">Class B</option>
                            <option value="Class C">Class C</option>
                            <option value="Class D">Class D</option>
                            <option value="Class E">Class E</option>
                            <option value="Class F">Class F</option>
                            <option value="Class G">Class G</option>
                            <option value="Class H">Class H</option>
                              <option value="{{ $employee_results->pay_grade}}" selected>{{ $employee_results->pay_grade}}</option>
                        </select>

                    </div>


                    <div class="form-group col-md-6 p-20">
                        <label for="">Salary Per Month</label>
                        <input type="text" name="salary" value="{{ $employee_results->salary}}" placeholder="" data-mask="Ksh.999,999.99" class="form-control">


                    </div>

                </div>







                <div>

                    <button type="submit" class="btn btn-info btn-lg"  data-toggle="modal" data-target="#myModal">Save</button>
                </div>
            </form>
        </div>
@endif

    </div>



@endsection
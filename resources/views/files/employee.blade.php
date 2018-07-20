@extends('layouts.master')
@section('content')
    <!-- Title & Breadcrumbs-->
    <div class="row page-titles">
        <div class="col-md-12 align-self-center">
            <h4 class="theme-cl">EMPLOYEE RECORDS</h4>
        </div>
    </div>
    <a href="#custom-modal" class="btn btn-primary waves-effect waves-light m-r-5 m-b-10" data-animation="flip" data-plugin="custommodal"
       data-overlaySpeed="100" data-overlayColor="#36404a">EMPLOYEE REGISTRATION FORM</a>



        @if ($errors->has('id_number'))
            <div class="alert alert-danger" role="alert">
            <span class="invalid-feedback">
                <strong>{{ $errors->first('id_number') }}</strong>
            </span>
          </div>
        @endif




<div class="card-box table-responsive">
    <table class="table table-striped table-bordered " id="example" style="width:100%">
        <thead>
        <tr>
            <th>FIRST NAME</th>
            <th>LAST NAME</th>
            <th>ID NUMBER</th>
            <th>TELEPHONE NUMBER</th>
            <th>JOB TITLE</th>
            <th>DATE CONTRACTED</th>
            <th>PAY GRADE</th>
            <th>SALARY PER MONTH</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>
        </thead>
        <tbody>
        @if(isset($employee_results))
            @foreach($employee_results as $employee_result)
                <tr>
                    <td>{{ $employee_result->first_name}}</td>
                    <td>{{ $employee_result->last_name}}</td>
                    <td>{{ $employee_result->id_number}}</td>
                    <td>{{ $employee_result->telephone_number}}</td>
                    <td>{{ $employee_result->job_title}}</td>
                    <td>{{ $employee_result->date_contracted}}</td>
                    <td>{{ $employee_result->pay_grade}}</td>
                    <td>{{ $employee_result->salary}}</td>
                    <td><a class="btn btn-info btn-lg" href = 'employee_edit/{{$employee_result->id_number }}'>Edit</a></td>
                    <td>

                        <form role="form" action="/employee_delete/{{$employee_result->id_number}}" enctype="multipart/form-data" method="post" >@csrf

                            <div>
                                <button type="submit" class="btn btn-info btn-lg"  data-toggle="modal" data-target="#myModal">Delete</button>
                            </div>
                        </form>



                    </td>
                </tr>
            @endforeach
        @endif
        </tbody>





        <tfoot>
        <tr>
            <th>FIRST NAME</th>
            <th>LAST NAME</th>
            <th>ID NUMBER</th>
            <th>TELEPHONE NUMBER</th>
            <th>JOB TITLE</th>
            <th>DATE CONTRACTED</th>
            <th>PAY GRADE</th>
            <th>SALARY PER MONTH</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>
        </tfoot>

    </table>

</div>
















    <div id="custom-modal" class="modal-demo">

        <h4 class="custom-modal-title">EMPLOYEE REGISTRATION</h4>

        <button type="button" class="close" onclick="Custombox.close();" style="margin-left:10000px;">
            <span>x</span><span class="sr-only">Close</span>
        </button>



        <div class="modal-body">


            <h background:#127ed0>EMPLOYEE REGISTRATION</h>
                <form role="form" action={{route('employee_post')}} enctype="multipart/form-data" method="post" >@csrf


                    <div class="col-md-12 " >
                    <div class="form-group col-md-6 p-20">
                        <label for="">First Name</label>
                        <input type="text" name="first_name" required class="form-control" maxlength="25" id="userName" placeholder="">
                    </div>

                    <div class="form-group col-md-6 p-20">
                        <label for="">Last Name</label>
                        <input type="text" name="last_name" class="form-control" maxlength="25" id="alloptions" placeholder="">
                    </div>
                    </div>

                    <div class="col-md-12 " >
                        <div class="form-group col-md-6 p-20">
                            <label for="">ID Number</label>
                            <input type="text" name="id_number"  placeholder="" data-mask="9999999999" class="form-control{{ $errors->has('id_number') ? ' is-invalid' : '' }}" value="{{ old('id_number') }}" required autofocus>
                            @if ($errors->has('id_number'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('id_number') }}</strong>
                                    </span>
                            @endif


                        </div>
                        <div class="form-group col-md-6 p-20">
                            <label for="">Telephone Number</label>
                            <input type="text" name="telephone_number" placeholder="" data-mask="(999) 999-999-999" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-12 " >
                        <div class="form-group col-md-6 p-20">
                            <label for="">Job Title</label>
                            <input type="text" name="job_title" id="alloptions" maxlength="20" class="form-control">
                        </div>


                        <div class="form-group col-md-6 p-20">
                            <label for="">Date Contracted</label>
                            <input type="text" name="date_contracted" class="form-control" placeholder="mm/dd/yyyy" id="datepicker-autoclose">

                        </div>

                    </div>




                    <div class="col-md-12 " >
                        <div class="form-group col-md-6 p-20">
                            <label for="">Pay Grade</label>
                            <select class="form-control" name="pay_grade">
                                <option>Select</option>
                                    <option value="Class A">Class A</option>
                                    <option value="Class B">Class B</option>
                                    <option value="Class C">Class C</option>
                                    <option value="Class D">Class D</option>
                                    <option value="Class E">Class E</option>
                                    <option value="Class F">Class F</option>
                                    <option value="Class G">Class G</option>
                                    <option value="Class H">Class H</option>

                            </select>

                        </div>


                        <div class="form-group col-md-6 p-20">
                            <label for="">Salary Per Month</label>
                            <input type="text" name="salary" placeholder="" data-mask="Ksh.999,999.99" class="form-control">


                        </div>

                    </div>







                    <div>
                        <button type="submit" class="btn btn-info btn-lg"  data-toggle="modal" data-target="#myModal">Save</button>
                    </div>
</form>
        </div>


</div>






    @endsection
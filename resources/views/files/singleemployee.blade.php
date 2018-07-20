@extends('layouts.master')
@section('content')
    <!-- Title & Breadcrumbs-->

    <div class="card-box table-responsive">

            @if(isset($employee_results))

                    <h4 class="custom-modal-title">PAYMENT </h4>


                    <div class="modal-body">


                        <h background:#127ed0>PAYMENT</h>
                        <form role="form" action={{route('payments_post')}} enctype="multipart/form-data" method="post" >@csrf


                            <div class="col-md-12 " >
                                <div class="form-group col-md-6 p-20">
                                    <label for="">First Name</label>
                                    <input type="text" readonly name="first_name" value="{{ $employee_results->first_name}}" required class="form-control" maxlength="25" id="userName" placeholder="">
                                </div>

                                <div class="form-group col-md-6 p-20">
                                    <label for="">Last Name</label>
                                    <input type="text" readonly name="last_name" value="{{ $employee_results->last_name}}" class="form-control" maxlength="25" id="alloptions" placeholder="" autofocus>
                                </div>
                            </div>

                            <div class="col-md-12 " >
                                <div class="form-group col-md-6 p-20">
                                    <label for="">ID Number</label>
                                    <input type="text" readonly name="id_number" placeholder="" value="{{ $employee_results->id_number}}" class="form-control" required autofocus>

                                </div>
                                <div class="form-group col-md-6 p-20">
                                    <label for="">Salary(in KSh.)</label>
                                    <input type="number" name="salary" placeholder="" maxlength="15" required autofocus class="form-control">


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

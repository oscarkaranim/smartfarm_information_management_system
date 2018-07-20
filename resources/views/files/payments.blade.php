@extends('layouts.master')
@section('content')
    <!-- Title & Breadcrumbs-->


    <div class="row page-titles">
        <div class="col-md-12 align-self-center">
            <h4 class="theme-cl">PAYMENT RECORDS MADE</h4>
        </div>
    </div>

    <div class="card-box table-responsive">
        <table class="table table-striped table-bordered " id="example" style="width:100%">
            <thead>
            <tr>
                <th>DATE/TIME</th>
                <th>FIRST NAME</th>
                <th>LAST NAME</th>
                <th>ID NUMBER</th>
                <th>AMOUNT PAID</th>

            </tr>
            </thead>
            <tbody>
            @if(isset($salary_results))
                @foreach($salary_results as $salary_result)
                    <tr>
                        <td>{{ $salary_result->created_at}}</td>
                        <td>{{ $salary_result->first_name}}</td>
                        <td>{{ $salary_result->last_name}}</td>
                        <td>{{ $salary_result->id_number}}</td>
                        <td>{{ $salary_result->salary}}</td>


                    </tr>
                @endforeach
            @endif
            </tbody>





            <tfoot>
            <tr>
                <th>DATE/TIME</th>
                <th>FIRST NAME</th>
                <th>LAST NAME</th>
                <th>ID NUMBER</th>
                <th>AMOUNT PAID</th>
            </tr>
            </tfoot>

        </table>

    </div>




    <div class="row page-titles">
        <div class="col-md-12 align-self-center">
            <h4 class="theme-cl">EMPLOYEES LISTING</h4>
        </div>
    </div>







    <div class="card-box table-responsive">
        <table class="table table-striped table-bordered " id="example1" style="width:100%">
            <thead>
            <tr>
                <th>FIRST NAME</th>
                <th>LAST NAME</th>
                <th>ID NUMBER</th>
                <th>TELEPHONE NUMBER</th>
                <th>JOB TITLE</th>
                <th>DATE CONTRACTED</th>
                <th>PAY GRADE</th>
                <th>DATE/TIME</th>
                <th>~PAY~</th>
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
                        <td>{{ $employee_result->created_at}}</td>
                        <td><a class="btn btn-info btn-lg" href = 'singleemployee/{{$employee_result->id_number }}'>Pay</a></td>
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
                <th>DATE/TIME</th>
                <th>~PAY~</th>
            </tr>
            </tfoot>

        </table>
    </div>




















@endsection
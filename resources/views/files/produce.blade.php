@extends('layouts.master')
@section('content')

    <div class="row page-titles">
        <div class="col-md-12 align-self-center">
            <h4 class="theme-cl">PRODUCE RECORDS</h4>
        </div>
    </div>
    <a href="#custom-modal" class="btn btn-primary waves-effect waves-light m-r-5 m-b-10" data-animation="flip" data-plugin="custommodal"
       data-overlaySpeed="100" data-overlayColor="#36404a">ADD PRODUCE RECORD</a>






    <div class="card-box table-responsive">
        <table class="table table-striped table-bordered " id="example" style="width:100%">
            <thead>
            <tr>

                <th>DATE RECORDED</th>
                <th>PRODUCE NAME</th>
                <th>QUANTITY IN STORES</th>
                <th>EDIT</th>
                <th>DELETE</th>

            </tr>
            </thead>
            <tbody>
            @if(isset($produce_results))
                @foreach($produce_results as $produce_result)
                    <tr>
                        <td>{{ $produce_result->date}}</td>
                        <td>{{ $produce_result->produce_name}}</td>

                        <td>{{ $produce_result->quantity}}</td>
                        <td><a class="btn btn-info btn-lg" href = 'produce_edit/{{$produce_result->id }}'>Edit</a></td>
                        <td>
                            <form role="form" action="/produce_delete/{{$produce_result->id}}" enctype="multipart/form-data" method="post" >@csrf

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
                <th>DATE RECORDED</th>
                <th>PRODUCE NAME</th>
                <th>QUANTITY IN STORES</th>
                <th>EDIT</th>
                <th>DELETE</th>
            </tr>
            </tfoot>
        </table>

    </div>
















    <div id="custom-modal" class="modal-demo">

        <h4 class="custom-modal-title">PRODUCE RECORD</h4>

        <button type="button" class="close" onclick="Custombox.close();" style="margin-left:10000px;">
            <span>x</span><span class="sr-only">Close</span>
        </button>



        <div class="modal-body">


            <h background:#127ed0>PRODUCE RECORD</h>
            <form role="form" action={{route('produce_post')}} enctype="multipart/form-data" method="post" >@csrf

                <div class="col-md-12 " >

                    <label for="">Date RECORDED</label>
                    <input type="text" name="date" class="form-control" placeholder="mm/dd/yyyy" id="datepicker-autoclose">
                </div>
                <div class="col-md-12 " >


                    <div class="form-group col-md-6 p-20">
                        <label for="">Produce Name</label>
                        <input type="text" name="produce_name" required class="form-control" maxlength="25" id="userName" placeholder="">
                    </div>

                    <div class="form-group col-md-6 p-20">
                        <label for="">Quantity(in Kgs)</label>
                        <input type="text" name="quantity" placeholder=""  class="form-control">
                    </div>

                </div>





                <div>
                    <button type="submit" class="btn btn-info btn-lg"  data-toggle="modal" data-target="#myModal">Save</button>
                </div>
            </form>
        </div>


    </div>



@endsection
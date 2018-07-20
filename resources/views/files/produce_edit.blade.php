@extends('layouts.master')
@section('content')



    <div class="card-box table-responsive">

        @if(isset($produce_results))


            <h4 class="custom-modal-title">PRODUCE RECORD</h4>

            <button type="button" class="close" onclick="Custombox.close();" style="margin-left:10000px;">
                <span>x</span><span class="sr-only">Close</span>
            </button>

            <div class="modal-body">




                <h background:#127ed0>PRODUCE RECORD</h>
                <form role="form" action="/produce_edit_post/{{$produce_results->id}}/" enctype="multipart/form-data" method="post" >@csrf

                    <div class="col-md-12 " >

                        <label for="">Date RECORDED</label>
                        <input type="text" name="date" class="form-control" value="{{ $produce_results->date}}" placeholder="mm/dd/yyyy" id="datepicker-autoclose">
                    </div>
                    <div class="col-md-12 " >


                        <div class="form-group col-md-6 p-20">
                            <label for="">Produce Name</label>
                            <input type="text" name="produce_name" value="{{ $produce_results->produce_name}}" required class="form-control" maxlength="25" id="userName" placeholder="">
                        </div>

                        <div class="form-group col-md-6 p-20">
                            <label for="">Quantity(in Kgs)</label>
                            <input type="text" name="quantity" value="{{ $produce_results->quantity}}" placeholder=""  class="form-control">
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
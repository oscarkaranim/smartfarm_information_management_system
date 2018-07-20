@extends('layouts.master')
@section('content')
    <div class="row page-titles">
        <div class="col-md-12 align-self-center">
            <h4 class="theme-cl">SALES RECORDS</h4>
        </div>
    </div>
    <a href="#custom-modal" class="btn btn-primary waves-effect waves-light m-r-5 m-b-10" data-animation="flip" data-plugin="custommodal"
       data-overlaySpeed="100" data-overlayColor="#36404a">ADD SALES RECORD</a>






    <div class="card-box table-responsive">
        <table class="table table-striped table-bordered " id="example" style="width:100%">
            <thead>
            <tr>
                <th>BUYERS CONTACT</th>
                <th>DATE</th>
                <th>PRODUCE NAME</th>
                <th>QUANTITY</th>
                <th>UNIT SELLING PRICE</th>
                <th>TOTAL AMOUNT</th>
            </tr>
            </thead>
            <tbody>
            @if(isset($sales_results))
                @foreach($sales_results as $sales_result)
                    <tr>
                        <td>{{ $sales_result->buyer_contact}}</td>
                        <td>{{ $sales_result->date}}</td>
                        <td>{{ $sales_result->produce_name}}</td>
                        <td>{{ $sales_result->quantity}}</td>
                        <td>{{ $sales_result->unit_price}}</td>
                        <td>{{ $sales_result->total_amount}}</td>

                    </tr>
                @endforeach
            @endif




            </tbody>
            <tfoot>
            <tr>
                <th>BUYERS CONTACT</th>
                <th>DATE</th>
                <th>PRODUCE NAME</th>
                <th>QUANTITY</th>
                <th>UNIT SELLING PRICE</th>
                <th>TOTAL AMOUNT</th>
            </tr>
            </tfoot>
        </table>

    </div>
















    <div id="custom-modal" class="modal-demo">

        <h4 class="custom-modal-title">SALES RECORD</h4>

        <button type="button" class="close" onclick="Custombox.close();" style="margin-left:10000px;">
            <span>x</span><span class="sr-only">Close</span>
        </button>



        <div class="modal-body">


            <h background:#127ed0>SALES RECORD</h>
            <form role="form" action={{route('sales_post')}} enctype="multipart/form-data" method="post" >@csrf

                <div class="col-md-12 " >

                    <label for="">Buyer Contact</label>
                    <input type="text" name="buyer_contact" placeholder="phone number/address" maxlength="60" class="form-control">
                </div>
                <div class="col-md-12 " >


                    <div class="form-group col-md-6 p-20">
                        <label for="">Date</label>
                        <input type="text" name="date" class="form-control" placeholder="mm/dd/yyyy" id="datepicker-autoclose">

                    </div>
                    <div class="form-group col-md-6 p-20">
                        <label for="">Produce Name</label>
                        <input type="text" name="produce_name" required class="form-control" maxlength="25" id="userName" placeholder="">
                    </div>

                </div>

                <div class="col-md-12 " >

                    <div class="form-group col-md-6 p-20">
                        <label for="">Quantity</label>
                        <input type="number" name="quantity" placeholder="" maxlength="8" id="quantity" class="form-control">
                    </div>

                    <div class="form-group col-md-6 p-20">
                        <label for="">Unit Selling Price</label>
                        <input onmouseleave="multiply()" type="number"  name="unit_price" placeholder=""  id="unit_price"  maxlength="8" class="form-control">
                    </div>

                </div>

                <div class="col-md-12 " >
                        <label for="">Total Amount</label>
                    <label id="total" onclick="multiply()" hidden ></label>
                    <input class="form-control" readonly name="total_amount" id="input" value="">
                </div>





                <div>
                    <button type="submit" class="btn btn-info btn-lg"  data-toggle="modal" data-target="#myModal">Save</button>
                </div>
            </form>
        </div>


    </div>





@endsection




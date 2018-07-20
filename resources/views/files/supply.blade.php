@extends('layouts.master')
@section('content')
    <div class="row page-titles">
        <div class="col-md-12 align-self-center">
            <h4 class="theme-cl">SUPPLIES RECORDS</h4>
        </div>
    </div>
    <a href="#custom-modal" class="btn btn-primary waves-effect waves-light m-r-5 m-b-10" data-animation="flip" data-plugin="custommodal"
       data-overlaySpeed="100" data-overlayColor="#36404a">ADD SUPPLY RECORD</a>






    <div class="card-box table-responsive">
        <table class="table table-striped table-bordered " id="example" style="width:100%">
            <thead>
            <tr>
                <th>SUPPLIER CONTACT</th>
                <th>SUPPLIER NAME</th>
                <th>DATE</th>
                <th>COMMODITY</th>
                <th>QUANITITY</th>
                <th>UNIT PRICE</th>
                <th>TOTAL AMOUNT</th>

            </tr>
            </thead>
            <tbody>
            @if(isset($supply_results))
                @foreach($supply_results as $supply_result)
                    <tr>
                        <td>{{ $supply_result->supplier_contact}}</td>
                        <td>{{ $supply_result->supplier_name}}</td>

                        <td>{{ $supply_result->date}}</td>
                        <td>{{ $supply_result->commodity}}</td>
                        <td>{{ $supply_result->quantity}}</td>
                        <td>{{ $supply_result->unit_price}}</td>
                        <td>{{ $supply_result->total_amount}}</td>

                    </tr>
                @endforeach
            @endif
            </tbody>
            <tfoot>
            <tr>
                <th>SUPPLIER CONTACT</th>
                <th>SUPPLIER NAME</th>
                <th>DATE</th>
                <th>COMMODITY</th>
                <th>QUANITITY</th>
                <th>UNIT PRICE</th>
                <th>TOTAL AMOUNT</th>
            </tr>
            </tfoot>
        </table>

    </div>
















    <div id="custom-modal" class="modal-demo">

        <h4 class="custom-modal-title">SUPPLY RECORD</h4>

        <button type="button" class="close" onclick="Custombox.close();" style="margin-left:10000px;">
            <span>x</span><span class="sr-only">Close</span>
        </button>



        <div class="modal-body">


            <h background:#127ed0>SUPPLY RECORD</h>
            <form role="form" action={{route('supply_post')}} enctype="multipart/form-data" method="post" >@csrf

                <div class="col-md-12 " >

                    <label for="">Supplier Contact</label>
                    <input type="text" required name="supplier_contact" placeholder="phone number/address" maxlength="60" class="form-control">
                </div>
                <div class="col-md-12 " >
                    <div class="form-group col-md-6 p-20">
                        <label for="">Supplier Name</label>
                        <input type="text" name="supplier_name" required class="form-control" maxlength="25" id="userName" placeholder="">
                    </div>

                    <div class="form-group col-md-6 p-20">
                        <label for="">Date</label>
                        <input type="text" name="date" class="form-control" placeholder="mm/dd/yyyy" id="datepicker-autoclose">

                    </div>

                </div>

                <div class="col-md-12 " >
                    <div class="form-group col-md-6 p-20">
                        <label for="">Commodity</label>
                        <input type="text" name="commodity" required placeholder="" maxlength="20" class="form-control">
                    </div>
                    <div class="form-group col-md-6 p-20">
                        <label for="">Quantity(Kgs)</label>
                        <input type="text" name="quantity" placeholder="" maxlength="7" id="quantity" class="form-control">
                    </div>
                </div>

                <div class="col-md-12 " >
                    <div class="form-group col-md-6 p-20">
                        <label for="">Unit Price(Ksh)</label>
                        <input onmouseleave="multiply()" type="text"  name="unit_price" placeholder=""  id="unit_price"  maxlength="11" class="form-control">
                    </div>


                    <div class="form-group col-md-6 p-20">
                        <label >Total Amount(Ksh)</label><br>
                        <label id="total" onclick="multiply()" hidden ></label>
                        <input class="form-control" name="total_amount" id="input" value="">

                    </div>

                </div>





                <div>
                    <button type="submit" class="btn btn-info btn-lg"  data-toggle="modal" data-target="#myModal">Save</button>
                </div>
            </form>
        </div>


    </div>





@endsection
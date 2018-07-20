<?php

namespace App\Http\Controllers;


use App\employee;
use App\payment;
use App\produce;
use App\sale;
use App\supply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Validation\Validator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function welcome()
    {
        return view('welcome');
    }
    public function index()
    {
        return view('welcome');
    }
    public function profile()
    {
        return view(' files.profile');
    }


    public function employee()
    {
        $employee_results= DB::table('employees')->latest() ->get();
        return view('files.employee',['employee_results'=>$employee_results]);

    }
    public function employee_post(Request $request)
    {
        $validated_data = $request->validate([
            'id_number' => 'required|string|unique:employees|max:255'
        ]);

        $employee = new employee(Input::all());
        $employee->save();
        return redirect(route('employee'));

    }
    public function payments()
    {
        $employee_results= DB::table('employees')->latest() ->get();

        $salary_results= DB::table('payments')->latest() ->get();

        return view('files.payments',['salary_results'=>$salary_results,'employee_results'=>$employee_results]);

    }
    public function payments_post()
    {
        $payments = new payment(Input::all());
        $payments->save();
        return redirect(route('payments'));

    }
    public function supply()
    {
        $supply_results= DB::table('supplies')->latest() ->get();
        return view('files.supply',['supply_results'=>$supply_results]);

    }
    public function supply_post()
    {
        $supply = new supply(Input::all());
        $supply->save();
        return redirect(route('supply'));

    }

    public function produce()
    {
        $produce_results= DB::table('produces')->latest() ->get();
        return view('files.produce',['produce_results'=>$produce_results]);

    }
    public function produce_edit($id) {
        $produce_results= DB::table('produces')->where('id', $id)->first();

        return view('files.produce_edit',['produce_results'=>$produce_results]);
    }
    public function produce_edit_post(Request $request, $id) {
        $produce_results = produce::where('id', $id)->first();

        $produce_results->date= $request->input('date');
        $produce_results->produce_name= $request->input('produce_name');
        $produce_results->quantity= $request->input('quantity');


        $produce_results->save();
        return redirect(route('produce'));
    }
    public function produce_post()
    {
        $produce = new produce(Input::all());
        $produce->save();
        return redirect(route('produce'));
    }
    public function sales()
    {
        $sales_results= DB::table('sales')->latest() ->get();
        return view('files.sales',['sales_results'=>$sales_results]);

    }
    public function sales_post()
    {
        $sales = new sale(Input::all());
        $sales->save();
        return redirect(route('sales'));
    }
    public function statistics()
    {
        return view('files.statistics');
    }

    public function singleemployee($id_number) {
        $employee_results= DB::table('employees')->where('id_number', $id_number)->first();

        return view('files.singleemployee',['employee_results'=>$employee_results]);
    }
    public function employee_edit($id_number) {
        $employee_results= DB::table('employees')->where('id_number', $id_number)->first();

        return view('files.employee_edit',['employee_results'=>$employee_results]);
    }
    public function employee_edit_post(Request $request, $id_number) {
        $employee_results = employee::where('id_number', $id_number)->first();

        $employee_results->first_name= $request->input('first_name');
        $employee_results->last_name= $request->input('last_name');
        $employee_results->id_number= $request->input('id_number');
        $employee_results->telephone_number= $request->input('telephone_number');
        $employee_results->job_title= $request->input('job_title');
        $employee_results->date_contracted= $request->input('date_contracted');
        $employee_results->pay_grade= $request->input('pay_grade');
        $employee_results->salary= $request->input('salary');

        $employee_results->save();
        return redirect(route('employee'));
    }
    public function employee_delete(Request $request, $id_number) {
        $employee_results = employee::where('id_number', $id_number);

        $employee_results->delete();
        return redirect(route('employee'));
    }
    public function produce_delete(Request $request, $id) {
        $produce_results = produce::where('id', $id);

        $produce_results->delete();
        return redirect(route('produce'));
    }

}

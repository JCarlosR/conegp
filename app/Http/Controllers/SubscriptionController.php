<?php

namespace App\Http\Controllers;

use App\Suscriber;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class SubscriptionController extends Controller
{
    public function index()
    {
        return view('subscription');
    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'first_name' => 'required|max:50',
            'last_name' => 'required|max:50',

            'identity_card' => 'required|digits:8',
            'birth_date' => 'date_format:d/m/Y',

            'email' => 'required|email|confirmed',

            'phone' => 'required|min:9',
            'gender' => 'required',

            'address' => 'min:5',
            'city' => 'required|min:4|max:25',

            'occupation' => 'required',
            'workplace' => 'required|min:3',

            'validation_document' => 'file',


            'operation_number' => 'required',
            'payment_date' => 'required|date_format:d/m/Y',
            'validation_voucher' => 'required|image|max:512'
        ]);


        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        /*DB::beginTransaction();

        Suscriber::create($request->only(
            'first_name', 'last_name',
            'identity_card', 'birth_date',
            'email',
            'phone', 'gender',
            'address', 'city',
            'occupation', 'workplace',
            'validation_document',
            'operation_number', 'payment_date',
            'validation_voucher'
        ));*/

        // target folder
        $destinationPath = 'vouchers';
        // image extension
        $extension = $request->file('validation_voucher')->getClientOriginalExtension();
        // use the suscriber id to make the file name
        // $fileName = $suscriber->id . '.' . $extension;
        // uploading file to given path
        Input::file('image')->move($destinationPath, 'test.jpg');

        // sending back with message
        return back()->with('notification', 'Usted se ha inscrito correctamente !');

        // var_dump( $request->file('validation_voucher')->getClientOriginalExtension() );
        // var_dump( $request->file('validation_voucher')->getSize() );

    }
}

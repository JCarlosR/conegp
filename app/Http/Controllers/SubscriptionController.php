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

            'validation_document' => 'image',


            'operation_number' => 'required',
            'payment_date' => 'required|date_format:d/m/Y',
            'validation_voucher' => 'required|image|max:512'
        ]);

        $validator->after(function ($validator) use ($request) {
            if ($request->get('occupation') != 'profesional' && ! $request->hasFile('validation_document')) {
                $validator->errors()->add('validation_document', 'Usted no ha adjuntado una imagen de su documento.');
            }
        });

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        DB::beginTransaction();

        try {
            $subscriber = Suscriber::create($request->only(
                'first_name', 'last_name',
                'identity_card', 'birth_date',
                'email',
                'phone', 'gender',
                'address', 'city',
                'occupation', 'workplace',
                // 'validation_document',
                'operation_number', 'payment_date'
                // 'validation_voucher'
            ));

            if ($request->file('validation_document')) {
                $documentsPath = 'documents';
                $extension = $request->file('validation_document')->getClientOriginalExtension();
                $fileName = $subscriber->id . '.' . $extension;
                $request->file('validation_document')->move($documentsPath, $fileName);
                $subscriber->validation_document = $fileName;
            }

            $vouchersPath = 'vouchers';
            $extension = $request->file('validation_voucher')->getClientOriginalExtension();
            $fileName = $subscriber->id . '.' . $extension;
            $request->file('validation_voucher')->move($vouchersPath, $fileName);
            $subscriber->validation_voucher = $fileName;

            $subscriber->save();
            DB::commit();
            return back()->with('notification', 'Usted se ha inscrito correctamente !');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->withErrors([
                'unknown' => 'Ocurrió un error inesperado. Si tiene dudas contacte con el administrador.'
                //'unknown' => $e->getMessage()
            ])->withInput();;
        }
    }
        // var_dump( $request->file('validation_voucher')->getClientOriginalExtension() );
        // var_dump( $request->file('validation_voucher')->getSize() );

}

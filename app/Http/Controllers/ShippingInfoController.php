<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ShippingInfoRequest;
use App\Models\ShippingInfo;
use Illuminate\Support\Facades\Validator;


class ShippingInfoController extends Controller
{
    public function index()
    {
        // return view('main.address);
    }

    public function create()
    {
        if (session()->has('backUrl')) {
            session()->keep('backUrl');
        }

        return view('main.address.create', [
            'title' => 'Create Address'
        ]);
    }

    public function store(ShippingInfoRequest $request, ShippingInfo $shippingInfo)
    {
        if (session()->has('backUrl')) {
            session()->keep('backUrl');
        }
        $validator = Validator::make($request->all(), $request->rules());
        if ($validator->stopOnFirstFailure()->fails()) {
            return redirect()->back();
        }
        $validated = $validator->validate();

        $shippingInfo->create($validated);

        return ($url = session()->get('backUrl'))
            ? redirect()->to($url)
            : redirect()->route('address.index');
    }
}

<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\CustomerResource;
use App\Models\Customer;
use http\Env\Response;
use Illuminate\Http\Request;
use const Grpc\STATUS_OK;

class CustomerController extends Controller
{
    protected $customer;

    /**
     * @param $customer
     */
    public function __construct(Customer $customer)
    {
        $this->customer = $customer;
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customer = $this->customer->paginate(5);
        $customerResource = CustomerResource::collection($customer) -> response() -> getData(true);
        return response() -> json([
            'data' => $customerResource
        ], STATUS_OK);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

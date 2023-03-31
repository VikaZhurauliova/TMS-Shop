<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateDeliveryRequest;
use App\Models\Delivery;

use Illuminate\Http\Request;

class DeliveryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $deliveries = Delivery::all();
        return view('admin.deliveries.index', [
            'deliveries' => $deliveries
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.deliveries.create', [
            'deliveries' => Delivery::query()->where('is_active', 1)->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateDeliveryRequest $request)
    {
        Delivery::query()->create($request->validated());
        session()->flash('success', 'Delivery has been successfully created.');
        return redirect()->route('admin.deliveries.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
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
    public function destroy(Delivery $delivery)
    {
        $delivery->delete();
        session()->flash('success', 'Delivery has been successfully deleted.');
        return back();
    }
}

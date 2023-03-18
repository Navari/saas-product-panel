<?php

namespace App\Http\Controllers;

use App\Http\Requests\Brand\StoreRequest;
use App\Http\Requests\Brand\UpdateRequest;
use App\Models\Brand;
use App\Services\BrandService;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class BrandController extends Controller
{

    public function __construct(
        private readonly BrandService $brandService
    ){}

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.brands.index');
    }

    /**
     * Display a listing of the resource.
     */
    public function list(){
        return DataTables::eloquent(Brand::query())
            ->addColumn('sync_statuses', function (Brand $brand) {
                return view('admin.brands.sync-statuses', compact('brand'));
            })
            ->addColumn('actions', function ($brand) {
                return view('admin.brands.table-buttons', compact('brand'));
            })
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request): \Illuminate\Http\JsonResponse
    {
        $this->brandService->create($request->validated());
        return response()->json([
                'message' => 'Brand created successfully',
                'status' => 'success'
            ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Brand $brand)
    {
        return response()->json();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brand $brand): \Illuminate\Http\JsonResponse
    {
        return response()->json([
            'data' => $this->brandService->get($brand->id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Brand $brand): \Illuminate\Http\JsonResponse
    {
        $this->brandService->update($request->validated(), $brand->id);
        return response()->json([
            'message' => 'Brand updated successfully',
            'status' => 'success'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand): \Illuminate\Http\JsonResponse
    {
        $this->brandService->delete($brand->id);
        return response()->json([
            'message' => 'Brand deleted successfully',
            'status' => 'success'
        ]);
    }
}

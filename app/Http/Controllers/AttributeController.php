<?php

namespace App\Http\Controllers;

use App\Http\Requests\Attribute\StoreRequest;
use App\Http\Requests\Attribute\UpdateRequest;
use App\Models\Attribute;
use App\Services\AttributeService;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Yajra\DataTables\Facades\DataTables;

class AttributeController extends Controller
{

    public function __construct(
        private readonly AttributeService $attributeService
    ){}

    public function index(): View
    {
        return view('admin.attributes.index');
    }

    public function list(): \Illuminate\Http\JsonResponse
    {
        return DataTables::eloquent(Attribute::query())
            ->addColumn('actions', function (Attribute $attribute) {
                return view('admin.attributes.table-buttons', compact('attribute'));
            })
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.attributes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $this->attributeService->create($request->validated());
        return response()->json([
            'message' => 'Attribute created successfully',
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Attribute $attribute)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Attribute $attribute)
    {
        return response()->json([
            'data' => $this->attributeService->get($attribute->id),
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Attribute $attribute): \Illuminate\Http\JsonResponse
    {
        $this->attributeService->update($request->all(), $attribute->id);
        return response()->json([
            'message' => 'Attribute updated successfully',
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Attribute $attribute)
    {
        $this->attributeService->delete($attribute->id);
        return response()->json([
            'message' => 'Attribute deleted successfully',
        ], 200);
    }
}

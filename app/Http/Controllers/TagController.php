<?php

namespace App\Http\Controllers;

use App\Http\Requests\Tag\StoreRequest;
use App\Http\Requests\Tag\UpdateRequest;
use App\Models\Tag;
use App\Services\TagService;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Yajra\DataTables\Facades\DataTables;

class TagController extends Controller
{

    public function __construct(
        private readonly TagService $tagService
    ){}

    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('admin.tags.index');
    }

    public function list()
    {
        return DataTables::eloquent(Tag::query())
            ->addColumn('actions', function ($tag) {
                return view('admin.tags.table-buttons', compact('tag'));
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
    public function store(StoreRequest $request)
    {
        $this->tagService->create($request->validated());
        return response()->json([
                'message' => 'Tag created successfully',
                'status' => 'success'
            ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Tag $tag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tag $tag)
    {
        return response()->json([
            'data' => $this->tagService->get($tag->id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Tag $tag)
    {
        $this->tagService->update($request->validated(), $tag->id);
        return response()->json([
            'message' => 'Tag updated successfully',
            'status' => 'success'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tag $tag)
    {
        $this->tagService->delete($tag->id);
        return response()->json([
            'message' => 'Tag deleted successfully',
            'status' => 'success'
        ]);
    }
}

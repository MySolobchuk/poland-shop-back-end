<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\JsonResponse as JsonResponseAlias;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponseAlias
     */
    public function index()
    {
        return response()->json(['data' => ['index' => 'success']],200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     */
    public function store(Request $request)
    {
        return response()->json(['data' => ['store' => 'success', 'type' => $request->type, 'name' => $request->name ]],201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return JsonResponseAlias
     */
    public function show($id): JsonResponseAlias
    {
        return response()->json(['data' => ['show' => $id]],200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return JsonResponseAlias
     */
    public function update(Request $request, $id): JsonResponseAlias
    {
        return response()->json(['data' => ['update' => $id]],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return JsonResponseAlias
     */
    public function destroy($id): JsonResponseAlias
    {
        return response()->json(['data' => ['destroy' => $id]],200);
    }
}

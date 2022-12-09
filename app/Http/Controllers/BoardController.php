<?php

namespace App\Http\Controllers;

use App\Models\Board;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;

/**
 * @OA\Info(title="My First API", version="0.1")
 */
class BoardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * @OA\Get(
     *     path="/api/Board",
     *     @OA\Response(response="200", description="An example endpoint")
     * )
     *
     */
    public function index()
    {
        //
        $boards = Board::all();
        //return $boards;
        return view('index', compact(['boards']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        Board::create($request->toArray());
        $result = ["code"=>"1"];
        return response($result, Response::HTTP_OK);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Board  $board
     * @return \Illuminate\Http\Response
     */
    public function show(Board $board)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Board  $board
     * @return \Illuminate\Http\Response
     */
    public function edit(Board $board)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Board  $board
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Board $board)
    {
        //
        // $board->delete();
        $arr = $request->toArray();
        //Board
        return $board;
    }

    // public function delete(Request $request, Board $board)
    // {
    //     //
    //     // $board->delete();
    //     $arr = $request->toArray();
    //     //Board
    //     return $board;
    // }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Board  $board
     * @return \Illuminate\Http\Response
     */
    public function destroy(Board $board)
    {
        //
        $board->delete();
        $result = ["code"=>"1"];
        return response($result, Response::HTTP_OK);
    }
}

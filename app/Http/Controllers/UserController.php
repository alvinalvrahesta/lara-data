<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

use function Termwind\render;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $users = User::limit(10000)->get();
        // return DataTables::of(User::limit())->make(true);
        return view('dashboard');
    }

    public function json()
    {
        $users = User::limit(10);
        return DataTables::of($users)
            // ->addColumn('email_verified_at', function ($row) {
            //     return isset($row->email_verified_at) ? $row->email_verified_at->format('d/m/y H:i:s') : ''; // Customize the date format as you need
            // })
            // ->addColumn('created_at', function ($row) {
            //     return isset($row->created_at) ? $row->created_at->format('d/m/y H:i:s') : ''; // Customize the date format as you need
            // })
            // ->addColumn('updated_at', function ($row) {
            //     return isset($row->updated_at) ? $row->updated_at->format('d/m/y H:i:s') : ''; // Customize the date format as you need
            // })
            ->make(true);

        // $query = DB::table('users')->orderBy('user_id');
        // return DataTables::queryBuilder($query)->toJson();
        // return DataTables::queryBuilder($users)->toJson();
        // return view('dashboard', ['users' => $users]);
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
    public function destroy(string $id)
    {
        //
    }
}

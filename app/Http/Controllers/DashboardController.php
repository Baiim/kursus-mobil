<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\Notice;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Form::count();
        $notice = Notice::count();

        return view('pages.admin.dashboard',[
            'user' => $user,
            'notice' => $notice,
        ]);
    }
    public function form(Request $request)
    {
        if ($request->ajax()) {
            $data = Form::latest()->get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($item){
                        return '
                            <div  aria-labelledby="action' .  $item->id . '">
                                <form action="' . route('form.destroy', $item->id) . '" method="POST">
                                    ' . method_field('delete') . csrf_field() . '
                                    <button type="submit" class="btn btn-primary btn-sm">
                                        Delete
                                    </button>
                                </form>
                            </form>
                            </div>';
                    })
                    ->editColumn('ktp', function ($item) {
                        return $item->ktp ? '<img src="' . Storage::url($item->ktp) . '" style="max-height: 60px;"/>' : '';
                    })
                    ->rawColumns(['action','ktp'])
                    ->make(true);
        }
        return view('pages.admin.form-kursus');
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}

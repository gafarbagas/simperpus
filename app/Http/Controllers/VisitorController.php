<?php

namespace App\Http\Controllers;

use App\Models\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Maatwebsite\Excel\Facades\Excel;
use Yajra\DataTables\Facades\DataTables;

class VisitorController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Visitor::orderBy('id', 'desc')->get();
            return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                        return $this->getActionColumn($row);
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('pages.admin.visitors.index');
    }

    public function getActionColumn($row)
    {
        $id = Crypt::encrypt($row->id);
        $showUrl = route('admin.visitor.show', $id);

        return "
            <a class='btn btn-sm btn-secondary' href='$showUrl'><i class='fa fa-eye'></i></a>
            <button type='button' class='btn btn-sm btn-danger btn-delete' data-id='$id'><i class='fa fa-trash'></i></button>";
    } 

    public function show($id)
    {
        $id = Crypt::decrypt($id);
        $visitor = Visitor::find($id);
        if ($visitor) {
            return view('pages.admin.visitors.show', compact('visitor'));
        } else {
            return back()->with('error', 'Data pengunjung tidak ditemukan.');
        }
    }

    public function destroy($id)
    {
        $id = Crypt::decrypt($id);
        $item = Visitor::find($id);
        if ($item) {
            $item->delete();
            return response()->json(['success' => 'Item deleted successfully.']);
        } else {
            return back()->with('error', 'Data pengunjung tidak ditemukan.');
        }
    }
}

<?php
namespace App\Http\Controllers;

use App\Bookkeeping;
use App\Transaction;
use Illuminate\Http\Request;
use Excel;

class ImportBookkeepingController extends Controller
{

    public function importExport()
    {
        return view('importExport');
    }

    public function downloadExcel(Request $request, $type)
    {
        $data = Transaction::get()->toArray();
        return Excel::create('itsolutionstuff_example', function($excel) use ($data) {
            $excel->sheet('mySheet', function($sheet) use ($data)
            {
                $sheet->fromArray($data);
            });
        })->download($type);
    }

    public function importExcel(Request $request)
    {
        try {
            Excel::load($request->file('import_file')->getRealPath(), function ($reader) {

                foreach ($reader->toArray() as $row) {
                    Transaction::firstOrCreate($row);
                }
            });
            \Session::flash('success', 'Bookkeeping uploaded successfully.');
            return redirect()->back();
        } catch (\Exception $e) {
            \Session::flash('error', $e->getMessage());
            return redirect()->back();
        }
    }

}
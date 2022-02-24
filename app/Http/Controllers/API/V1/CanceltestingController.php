<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CanceltestingModel;

class CanceltestingController extends Controller
{
    public function get_all()
    {
        $test = CanceltestingModel::all();
        return response(
            [
                'status' => true,
                'message' => 'Daftar Cancel',
                'data' => $cancel
            ], 200
        );
    }

    public function create(request $request)
    {
        $cancel = new Canceltesting;
        $cancel->id_reservation = $request->id_reservation;
        $cancel->reason = $request->reason;
        $cancel->description = $request->description;
        $cancel->save();

        return "Berhasil di Cancel";
    }
}

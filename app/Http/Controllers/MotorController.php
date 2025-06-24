<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Motor;
use App\Models\Specification;

class MotorController extends Controller
{
    public function index()
    {
        $motors = Motor::all();
        return view('motors.index', compact('motors'));
    }

    public function show($id)
    {
        $motor = Motor::findOrFail($id);
        $specification = Specification::where('motor_id', $id)->firstOrFail(); // Ambil spesifikasi tunggal
        return view('motors.show', compact('motor', 'specification'));
    }
}

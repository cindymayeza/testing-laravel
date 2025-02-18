<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    public function index()
    {
        $data = Employees::all();
        return response()->json([
            'status' => 'success',
            'data' => $data
        ]);

    }
    public function store(Request $request)
    {

        $data = new Employees();
        $data->fullname = $request->fullname;
        $data->email = $request->email;
        $data->mobile_phone = $request->mobile_phone;
        $data->date_of_birth = $request->date_of_birth;
        $data->address = $request->address;
        $data->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Employee added successfully',
            'data' => $data
        ]);
    }
    public function update(Request $request, $id)
    {
        $data = Employees::findOrFail($id);
        $data->fullname = $request->fullname;
        $data->email = $request->email;
        $data->mobile_phone = $request->mobile_phone;
        $data->date_of_birth = $request->date_of_birth;
        $data->address = $request->address;
        $data->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Employee updated successfully',
            'data' => $data
        ]);


    }
    public function destroy($id)
    {
        $data = Employees::findOrFail($id);
        $data->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Employee deleted successfully',
        ]);
    }

    public function fetch_employee($id)
    {
        $data = Employees::where('id', $id)->first();
        if (!$data) {
            return response()->json(['status' => 'error', 'message' => 'Data not found.'], 404);
        }

        return response()->json([
            'status' => 'success',
            'data' => $data
        ]);

    }

}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Solution extends Controller
{
    private $apiUrl = 'https://script.google.com/macros/s/AKfycbwuHrCyKTGDRfRtJztyeFLYIfK5OO7YdXa14psV3u8WONWkwpRM2xA4ZstqLNMR6RZF/exec';

    public function index()
    {
        $response = Http::post($this->apiUrl, ['action' => 'read6']);
        $data = json_decode($response->body(), true);
        return view('admin.solution', compact('data'));
    }
    public function storedata()
    {
        $response = Http::post($this->apiUrl, ['action' => 'read6']);
        $data = json_decode($response->body(), true);
        return view('admin.addsolution', compact('data'));
    }
    public function store(Request $request)
    {
        Http::post($this->apiUrl, [
            'action' => 'create6',
            'laptoptype' => $request->laptoptype,
            'empcode' => $request->empcode,
            'empemailid' => $request->empemailid,
            'contactnumber' => $request->contactnumber,
            'employname' => $request->employname,
            'designation' => $request->designation,
            'deviceidname' => $request->deviceidname,
            'adopterno' => $request->adopterno,
            'adapterbrand' => $request->adapterbrand,
            'productid' => $request->productid,
            'laptopmodel' => $request->laptopmodel,
            'extra' => $request->extra,   
        ]);
        return redirect()->route('solution.index')->with('success', 'Record Added');
    }

    public function edit($row)
    {
        $response = Http::post($this->apiUrl, ['action' => 'read6']);
        $data = json_decode($response->body(), true);

        if (!isset($data[$row - 1])) {
            return redirect()->route('admin.solution')->with('error', 'Record not found.');
        }

        $record = $data[$row - 1]; // Get specific row
        return view('admin.editsolution', compact('record', 'row'));
    }

    public function update(Request $request, $row)
    {
        Http::post($this->apiUrl, [
            'action' => 'update6',
            'row' => $row,
            'laptoptype' => $request->laptoptype,
            'empcode' => $request->empcode,
            'empemailid' => $request->empemailid,
            'contactnumber' => $request->contactnumber,
            'employname' => $request->employname,
            'designation' => $request->designation,
            'deviceidname' => $request->deviceidname,
            'adopterno' => $request->adopterno,
            'adapterbrand' => $request->adapterbrand,
            'productid' => $request->productid,
            'laptopmodel' => $request->laptopmodel,
            'extra' => $request->extra,            
        ]);

        return redirect()->route('solution.index')->with('success', 'Record Updated');
    }

    public function toggleStatus($row)
    {
        $response = Http::post($this->apiUrl, [
            'action' => 'toggle_status6',
            'row' => $row,
        ]);
        return redirect()->route('solution.index')->with('success', 'Status Updated');
    }
}
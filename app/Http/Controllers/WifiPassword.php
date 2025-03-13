<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WifiPassword extends Controller
{
    private $apiUrl = 'https://script.google.com/macros/s/AKfycbzRRbJfYPi4xtzePdf2_7ssjI8GWUZDnmXRMjUbj_daCHhBKibsWSNCW4PcpdG_X07o/exec';

    public function index()
    {
        $response = Http::post($this->apiUrl, ['action' => 'read1']);
        $data = json_decode($response->body(), true);
        return view('admin.wifipassword', compact('data'));
    }
    public function storedata()
    {
        $response = Http::post($this->apiUrl, ['action' => 'read1']);
        $data = json_decode($response->body(), true);
        return view('admin.addwifipassword', compact('data'));
    }
    public function store(Request $request)
    {
        Http::post($this->apiUrl, [
            'action' => 'create1',
            'laptoptype' => $request->laptoptype,
            'empcode' => $request->empcode,
            'empemailid' => $request->empemailid,
            'contactnumber' => $request->contactnumber,
            'employname' => $request->employname,
            'designation' => $request->designation,
              
        ]);
        return redirect()->route('wifipassword.index')->with('success', 'Record Added');
    }

    public function edit($row)
    {
        $response = Http::post($this->apiUrl, ['action' => 'read1']);
        $data = json_decode($response->body(), true);

        if (!isset($data[$row - 1])) {
            return redirect()->route('admin.wifipassword')->with('error', 'Record not found.');
        }

        $record = $data[$row - 1]; // Get specific row
        return view('admin.editwifipassword', compact('record', 'row'));
    }

    public function update(Request $request, $row)
    {
        Http::post($this->apiUrl, [
            'action' => 'update1',
            'row' => $row,
            'laptoptype' => $request->laptoptype,
            'empcode' => $request->empcode,
            'empemailid' => $request->empemailid,
            'contactnumber' => $request->contactnumber,
            'employname' => $request->employname,
            'designation' => $request->designation,
                    
        ]);

        return redirect()->route('wifipassword.index')->with('success', 'Record Updated');
    }

    public function toggleStatus($row)
    {
        $response = Http::post($this->apiUrl, [
            'action' => 'toggle_status1',
            'row' => $row,
        ]);
        return redirect()->route('wifipassword.index')->with('success', 'Status Updated');
    }
}
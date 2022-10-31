<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;

class AdminClientController extends Controller
{
    public function index()
    {
        $all_client = Client::orderBy('id', 'desc')->get();
        return view('Admin.client_show', compact('all_client'));
    }

    public function client_create()
    {
        return view('Admin.client_create');
    }

    public function client_store(Request $request)
    {
        $request->validate([
           'photo' => 'required|image|mimes:jpg,png,jpeg,svg,gif'
        ]);

        $client = new Client();

        $now = time();
        $ext = $request->file('photo')->extension();
        $final_name = 'client_photo_'. $now . '-' . $ext;
        $request->file('photo')->move(public_path('uploads/'), $final_name);
        $client->photo = $final_name;

        $client->url = $request->url;
        $client->save();

        return redirect()->route('admin_client_show')->with('success', 'Client Saved Successfully.');

    }

    public function client_edit($id)
    {
        $client_single = Client::where('id', $id)->first();
        return view('Admin.client_edit', compact('client_single'));
    }

    public function client_update(Request $request, $id)
    {


        $client = Client::where('id', $id)->first();

        if ($request->hasFile('photo')) {

            $request->validate([
                'photo' => 'image|mimes:jpg,png,jpeg,svg,gif'
            ]);

            if (file_exists(public_path('uploads/' . $client->photo)) && $client->photo != NULL) {
                unlink(public_path('uploads/' . $client->photo));
            }

            $now = time();
            $ext = $request->file('photo')->extension();
            $final_name = 'client_photo_'. $now . '-' . $ext;
            $request->file('photo')->move(public_path('uploads/'), $final_name);
            $client->photo = $final_name;
        }

        $client->url = $request->url;
        $client->update();

        return redirect()->route('admin_client_show')->with('success', 'Client Updated Successfully.');

    }

    public function client_delete($id)
    {
        $client_delete = Client::where('id', $id)->first();
        unlink(public_path('uploads/' . $client_delete->photo));
        $client_delete->delete();

        return redirect()->route('admin_client_show')->with('success', 'Client Deleted Successfully.');

    }
}

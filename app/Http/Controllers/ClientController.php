<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Http\Requests\ClientRequest;
use DataTables;

class ClientController extends Controller
{
    public function index()
    {
        return view('backend.client.index');
    }

    public function getClients(Request $request)
    {
        dd("HERE");
        if ($request->ajax()) {
            $data = Client::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }

    public function create()
    {
        return view('backend.client.form');
    }

    public function store(ClientRequest $request)
    {

        $request->validate([

        ]);

        $newclient = new Client();

        $newclient->clientname = $request->clientname;
        $newclient->details = $request->details;
        $newclient->images = $request->images;

        $newclient->save();

        return redirect()->route('client.index');
    }

    public function edit(Client $client)
    {
        return view('backend.client.form')->with(compact('client'));
    }

    public function update(ClientRequest $request,Client $client)
    {
        $request->validate([

        ]);

        $client->clientname = $request->clientname;
        $client->details = $request->details;
        $client->images = $request->images;

        $client->update();

        return redirect()->route('client.index');
    }

    public function destroy(Client $client)
    {
        $res=Client::where('id',$client->id)->delete();
        if($res){

        }else{

        }
    }
}

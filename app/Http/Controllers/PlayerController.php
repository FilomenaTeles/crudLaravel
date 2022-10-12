<?php

namespace App\Http\Controllers;

use App\Country;
use App\Exports\PlayersExport;
use App\Imports\PlayersImport;
use App\Player;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;

class PlayerController extends Controller
{

    public function index()
    {
        return view('pages.players.index',['players' => Player::paginate(15),'countries' =>Country::with('player') ->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *

     */
    public function create()
    {
        return view('pages.players.create',['countries' =>Country::with('player') ->get()]);
    }

    /**
     * Store a newly created resource in storage.

     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'        => 'required',
            'country_id'  => 'required',
            'address'     => 'required',
            'description' => 'required',
            'retired'     => 'required',
            'image'       => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            ]);

        //Player::create($request->all()); /*pega em td que vem do form e faz o dicionario faz equivalencia direta*/

        $player              = new Player();
        $player->name        = $request->name;
        $player->country_id  = $request->country_id;
        $player->address     = $request->address;
        $player->description = $request->description;
        $player->retired     = $request->retired;
        $player->save();

        if ($request->file('image')) {
            // Get Image File
            $imagePath = $request->file('image');
            // Define Image Name
            $imageName = $player->id . '_' . time() . '_' . $imagePath->getClientOriginalName();
            // Save Image on Storage
            $path = $request->file('image')->storeAs('images/players/' . $player->id, $imageName, 'public');
            //Save Image Path
            $player->image = $path;
        }

        $player->save();

        return redirect('players')->with('status','Item created successfully!');
    }

    /**
     * Display the specified resource.
     *

     */
    public function show(Player $player)
    {
        return view('pages.players.show', ['player' => $player,'countries' =>Country::with('player') ->get()]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     *
     */
    public function edit(Player $player)
    {
        return view('pages.players.edit', ['player' => $player,'countries' =>Country::with('player') ->get()]);
    }

    /**
     * Update the specified resource in storage.
     *
     */
    public function update(Request $request, Player $player)
    {
        $player->update($request->all());
        return redirect('players')->with('status','Item edited successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     *
     */
    public function destroy(Player $player)
    {
        Storage::deleteDirectory('public/images/players/' . $player->id);
        //Storage::delete('public/' . $player->image);

        $player->delete();

        return redirect('players')->with('status','Item deleted successfully!');
    }

    public function export()
    {
        return Excel::download(new PlayersExport, 'players.xlsx');
    }

    public function importForm()
    {

        return view('pages.players.import');
    }

    public function import()
    {
        Excel::import(new PlayersImport, request()->file('import-form'));

        return redirect('players')->with('success', 'Item import successfully!');
    }
}

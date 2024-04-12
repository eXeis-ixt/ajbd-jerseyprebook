<?php

namespace App\Http\Controllers;

use App\Models\Batman;
use App\Models\Home;
use App\Models\Jersey;
use App\Models\Preorder;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $home = Home::where('satus', 1)->orderBy('created_at', 'ASC')->take(1)->get();
        // $home = Home::all();
        $jersey = Jersey::all();
        return view('home', [
            'home' => $home,
            'jersey' => $jersey

        ]);

    }

    public function store(Request $request){

        $request->validate([
            'name' => 'required|max:32',
            'back_name' => 'required|string|required|max:255',
            'email' => 'required|email',
            'number' => 'required|max:413',
            'address' => 'required|string|required|max:255',
            'city' => 'required|string|required|max:255',
            'size' => 'required|string|required|max:255',
            'jersey' => 'string|max:255',
            'sleeve' => 'required|string|required|max:255',
            // 'collar' => 'required|string|required|max:255',
        ]);
        $newBatman = new Batman();
        $newBatman->name = $request->input('name');
        $newBatman->back_name = $request->input('back_name');
        $newBatman->email = $request->input('email');
        $newBatman->number = $request->input('number');
        $newBatman->address = $request->input('address');
        $newBatman->city = $request->input('city');
        $newBatman->size = $request->input('size');
        $newBatman->sleeve = $request->input('sleeve');
        $newBatman->jersey = $request->input('jersey');
        $newBatman->save();
        return redirect('/')->with('success', 'Pre ordered  successfully!');

        // dd($request);

    }


}

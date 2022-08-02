<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnimalsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        $read = DB::select('select * from zoos, animals
        where animals.animals_id = zoos.id;');
        print_r($read);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        DB::insert('insert into zoos (name, adress) values (?, ?)', ['central', 'moscow']);
        DB::insert('insert into zoos (name, adress) values (?, ?)', ['biggest', 'new-york']);
        DB::insert('insert into animals (heigt, weight, age) values (?, ?, ?)', [1.2 , 115, 10]);
        DB::insert('insert into animals (heigt, weight, age) values (?, ?, ?)', [2.1 , 160, 7]);

    }

    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB::update('update users set adress = moscow, name = central', ['london', 'south']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        DB::statement('delete from zoos where id = ?', [1]);
    }
}

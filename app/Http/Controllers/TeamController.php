<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data[] = [
            'nombre'    => 'Club Regatas de Santa Fe',
            'entrenador'=> 'Danny Rand',
            'asistente' => 'Luke Cage',
            'email'     => 'regatas@mail.com'
        ];
        $data[] = [
            'nombre'    => 'Argentinos Junior',
            'entrenador'=> 'Diego Maradona',
            'asistente' => 'Claudio Cannigia',
            'email'     => 'regatas@mail.com'
        ];

        return $data;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function datos_contacto($user_id)
    {
        $data = [
            'entrenador' => ['nombre' => 'Danny Rand', 'email' => 'ironfist@marvel.com', 'telefono' => '11 12341234'],
            'asistente' => ['nombre' => 'Luke Cage', 'email' => 'powerman@marvel.com', 'telefono' => '11 43214321'],
            'direccion' => 'Beverly Hills 90210',
            'ligas' => ['Liga Metro A', 'Liga Metro B'],
            'notas' => 'My brothers. And you will know My name is the Lord when I lay My vengeance upon thee.'
        ];
//        return $data;
        if( $user_id == 1 )
        {
            $data = ['nombre' => 'Danny Rand', 'email' => 'ironfist@marvel.com', 'telefono' => '11 12341234'];
        } elseif ( $user_id == 2)
        {
            $data = ['nombre' => 'Luke Cage', 'email' => 'powerman@marvel.com', 'telefono' => '11 43214321'];
        } else
        {
            return response('NotFound', 404);
        }
        return $data;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Event;
use App\EventAttribute;
use App\Game;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Mockery\CountValidator\Exception;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $games = Game::all();

        foreach ($games as $game) {
            foreach ($game->events as $event){
                foreach($event->event_attributes as $attribute){
                    $format = "%s - %s - %s - %s <br>";
                    echo sprintf($format, $game->session_id,$event->event_name,$attribute->name,$attribute->value);
                }
            }
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $obj = $request->json();
        $game_data = $obj->all()[0];
        $game = new Game();
        $game->session_id= $game_data['sessionId'];
        $game->user_id= $game_data['userId'];
        $game->save();

        $events = $game_data['events'];

        foreach ($events as $item) {


            $event = new Event();
            $event->event_name = $item['eventName'];

            $game->events()->save($event);

            if(array_key_exists('attributes',$item)){

$arr_attribs = $item['attributes'];
foreach($arr_attribs as $arr_attrib){

                $attributes = new EventAttribute();
                $attributes->name = $arr_attrib['name'];
                $attributes->value = $arr_attrib['value'];

                $event->event_attributes()->save($attributes);

}


//                $attributes = new EventAttribute();
//                $attributes->name = $item['attributes']['name'];
//                $attributes->value = $item['attributes']['value'];
//
//                $event->event_attributes()->save($attributes);

            }
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

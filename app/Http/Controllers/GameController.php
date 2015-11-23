<?php

namespace App\Http\Controllers;

use App\Event;
use App\Game;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
//        $game = new Game();
//        $game->session_id = "somelongstringwithadate";
//        $game->user_id = "somelongstring";
//        $game->save();

        $json = '
        [
        {"sessionId" : "f3e6f1f5e2898ffe61b650e319e527a4-2015.11.22-15.39.39","userId" : "f3e6f1f5e2898ffe61b650e319e527a4",
        "events" : [
{ "eventName" : "SessionStart", "attributes" : { "name" : "StartTime", "value" : "0.0" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Cube119", "value" : "13.481924" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Cube119", "value" : "13.552299" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Cube119", "value" : "13.552299" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Cube119", "value" : "13.641773" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Cube119", "value" : "13.641773" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Cube119", "value" : "13.641773" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Floor6", "value" : "13.641773" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Cube120", "value" : "13.70808" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Cube120", "value" : "13.70808" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Cube120", "value" : "13.800197" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Cube120", "value" : "13.800197" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Cube120", "value" : "13.864681" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Cube120", "value" : "13.864681" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Cube121", "value" : "13.990599" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Ramp", "value" : "29.66526" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Ramp", "value" : "29.66526" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Ramp", "value" : "29.704729" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Ramp", "value" : "29.704729" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Floor4", "value" : "36.455978" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "smaug_4", "value" : "42.598011" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Floor4", "value" : "42.598011" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "smaug_4", "value" : "42.598011" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "smaug_4", "value" : "42.598011" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "smaug_4", "value" : "42.648235" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "smaug_4", "value" : "42.648235" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "smaug_4", "value" : "42.648235" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "smaug_4", "value" : "42.648235" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "smaug_4", "value" : "42.697319" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "smaug_4", "value" : "42.697319" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "smaug_4", "value" : "42.771606" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "smaug_4", "value" : "42.771606" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "smaug_4", "value" : "42.771606" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "smaug_4", "value" : "42.771606" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "smaug_4", "value" : "42.823513" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "smaug_4", "value" : "42.823513" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "smaug_4", "value" : "42.823513" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "smaug_4", "value" : "42.823513" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "smaug_4", "value" : "42.872272" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "smaug_4", "value" : "42.872272" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "smaug_4", "value" : "42.922844" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "smaug_4", "value" : "42.922844" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "smaug_4", "value" : "42.922844" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "smaug_4", "value" : "42.922844" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "smaug_4", "value" : "42.973499" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "smaug_4", "value" : "42.973499" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "smaug_4", "value" : "42.973499" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "smaug_4", "value" : "42.973499" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "smaug_4", "value" : "43.023762" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "smaug_4", "value" : "43.023762" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "smaug_4", "value" : "43.023762" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "smaug_4", "value" : "43.023762" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "smaug_4", "value" : "43.096897" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "smaug_4", "value" : "43.096897" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "smaug_4", "value" : "43.096897" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "smaug_4", "value" : "43.096897" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "smaug_4", "value" : "43.149269" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "smaug_4", "value" : "43.149269" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "smaug_4", "value" : "43.149269" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "smaug_4", "value" : "43.149269" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "smaug_4", "value" : "43.199665" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "smaug_4", "value" : "43.199665" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "smaug_4", "value" : "43.199665" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "smaug_4", "value" : "43.199665" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "smaug_4", "value" : "43.250084" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "smaug_4", "value" : "43.250084" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "smaug_4", "value" : "43.250084" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "smaug_4", "value" : "43.250084" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "smaug_4", "value" : "43.299362" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "smaug_4", "value" : "43.299362" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "smaug_4", "value" : "43.34972" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "smaug_4", "value" : "43.34972" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "smaug_4", "value" : "43.34972" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "smaug_4", "value" : "43.34972" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "smaug_4", "value" : "43.400467" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "smaug_4", "value" : "43.400467" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "smaug_4", "value" : "43.400467" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "smaug_4", "value" : "43.400467" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "smaug_4", "value" : "43.476582" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "smaug_4", "value" : "43.476582" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "smaug_4", "value" : "43.476582" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "smaug_4", "value" : "43.476582" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "smaug_4", "value" : "43.525932" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "smaug_4", "value" : "43.525932" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "smaug_4", "value" : "43.57642" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "smaug_4", "value" : "43.57642" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "smaug_4", "value" : "43.57642" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "smaug_4", "value" : "43.57642" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "smaug_4", "value" : "43.628792" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "smaug_4", "value" : "43.628792" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "smaug_4", "value" : "43.628792" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "smaug_4", "value" : "43.628792" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "smaug_4", "value" : "43.678844" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "smaug_4", "value" : "43.678844" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "smaug_4", "value" : "43.678844" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "smaug_4", "value" : "43.678844" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "smaug_4", "value" : "43.730247" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "smaug_4", "value" : "43.730247" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "smaug_4", "value" : "43.730247" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "smaug_4", "value" : "43.730247" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "smaug_4", "value" : "43.815041" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "smaug_4", "value" : "43.815041" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "smaug_4", "value" : "43.815041" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "smaug_4", "value" : "43.815041" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "smaug_4", "value" : "43.861328" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "smaug_4", "value" : "43.861328" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "smaug_4", "value" : "43.908531" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "smaug_4", "value" : "43.908531" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "smaug_4", "value" : "43.954506" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "smaug_4", "value" : "43.954506" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "smaug_4", "value" : "43.996895" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "smaug_4", "value" : "43.996895" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "smaug_4", "value" : "44.040489" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "smaug_4", "value" : "44.040489" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "smaug_4", "value" : "44.107735" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "smaug_4", "value" : "44.107735" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "smaug_4", "value" : "44.149891" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Physic_Cube_3", "value" : "53.451324" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Physic_Cube_3", "value" : "53.451324" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Physic_Cube_3", "value" : "53.515621" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Physic_Cube_3", "value" : "53.515621" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Physic_Cube_3", "value" : "53.515621" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "fLOOR", "value" : "53.515621" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "wheelchairAI_C_1", "value" : "54.194832" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "wheelchairAI_C_1", "value" : "54.194832" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "wheelchairAI_C_1", "value" : "54.194832" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "wheelchairAI_C_1", "value" : "54.194832" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "wheelchairAI_C_1", "value" : "54.194832" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "wheelchairAI_C_1", "value" : "54.194832" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Cube372", "value" : "56.245209" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Cube372", "value" : "56.245209" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "fLOOR", "value" : "56.245209" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Physic_Cube_4", "value" : "60.213585" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Physic_Cube_4", "value" : "60.213585" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Physic_Cube_4", "value" : "60.273582" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Physic_Cube_4", "value" : "60.273582" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "fLOOR", "value" : "60.273582" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Physic_Cube_4", "value" : "60.273582" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Physic_Cube_4", "value" : "60.273582" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "fLOOR", "value" : "60.273582" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Physic_Cube_7", "value" : "65.398193" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Physic_Cube_7", "value" : "65.398193" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Floor2", "value" : "65.398193" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Physic_Cube_7", "value" : "65.398193" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Physic_Cube_7", "value" : "65.398193" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Floor2", "value" : "65.398193" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Physic_Cube_7", "value" : "65.475288" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Physic_Cube_7", "value" : "65.475288" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Floor2", "value" : "65.475288" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Physic_Cube_7", "value" : "65.475288" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Physic_Cube_7", "value" : "65.475288" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Floor2", "value" : "65.475288" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "76.895226" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "76.895226" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Floor3", "value" : "76.895226" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "76.957695" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "76.957695" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Floor3", "value" : "76.957695" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "76.957695" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "76.957695" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Floor3", "value" : "76.957695" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "77.031303" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "77.031303" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Floor3", "value" : "77.031303" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "77.031303" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "77.031303" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Floor3", "value" : "77.031303" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "77.122078" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "77.122078" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Floor3", "value" : "77.122078" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "77.122078" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "77.122078" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Floor3", "value" : "77.122078" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "77.185547" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "77.185547" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Floor3", "value" : "77.185547" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "77.185547" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "77.185547" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Floor3", "value" : "77.185547" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "77.249001" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "77.249001" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Floor3", "value" : "77.249001" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "77.249001" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "77.249001" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Floor3", "value" : "77.249001" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "77.312401" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "77.312401" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Floor3", "value" : "77.312401" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "77.312401" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "77.312401" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Floor3", "value" : "77.312401" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "77.374237" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "77.374237" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Floor3", "value" : "77.374237" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "77.374237" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "77.374237" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Floor3", "value" : "77.374237" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "77.46447" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "77.46447" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Floor3", "value" : "77.46447" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "77.46447" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "77.46447" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Floor3", "value" : "77.46447" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "77.525742" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "77.525742" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Floor3", "value" : "77.525742" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "77.525742" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "77.525742" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Floor3", "value" : "77.525742" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "77.586647" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "77.586647" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Floor3", "value" : "77.586647" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "77.586647" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "77.586647" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Floor3", "value" : "77.586647" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "77.646835" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "77.646835" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Floor3", "value" : "77.646835" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "77.646835" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "77.646835" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Floor3", "value" : "77.646835" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "77.706825" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "77.706825" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Floor3", "value" : "77.706825" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "77.706825" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "77.706825" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Floor3", "value" : "77.706825" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "77.791946" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "77.791946" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Floor3", "value" : "77.791946" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "77.791946" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "77.791946" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Floor3", "value" : "77.791946" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "77.851082" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "77.851082" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Floor3", "value" : "77.851082" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "77.851082" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "77.851082" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Floor3", "value" : "77.851082" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "77.909897" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "77.909897" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Floor3", "value" : "77.909897" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "77.909897" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "77.909897" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Floor3", "value" : "77.909897" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "77.96862" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "77.96862" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Floor3", "value" : "77.96862" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "77.96862" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "77.96862" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Floor3", "value" : "77.96862" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "78.027649" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "78.027649" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Floor3", "value" : "78.027649" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "78.027649" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "78.027649" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Floor3", "value" : "78.027649" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "78.109673" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "78.109673" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Floor3", "value" : "78.109673" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "78.109673" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "78.109673" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Floor3", "value" : "78.109673" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "78.169868" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "78.169868" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Floor3", "value" : "78.169868" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "78.169868" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "78.169868" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Floor3", "value" : "78.169868" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "78.228508" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "78.228508" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Floor3", "value" : "78.228508" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "78.228508" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "78.228508" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Floor3", "value" : "78.228508" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "78.287521" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "78.287521" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Floor3", "value" : "78.287521" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "78.287521" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "78.287521" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Floor3", "value" : "78.287521" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "78.346382" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "78.346382" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Floor3", "value" : "78.346382" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "78.346382" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "78.346382" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Floor3", "value" : "78.346382" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "87.023247" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "87.023247" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "87.023247" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "87.023247" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "87.101074" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "87.101074" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "91.89537" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "91.89537" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Physic_Cube_9", "value" : "103.814667" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Physic_Cube_9", "value" : "103.814667" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Floor4", "value" : "103.814667" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Physic_Cube_9", "value" : "103.860123" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Physic_Cube_9", "value" : "103.860123" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Floor4", "value" : "103.860123" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Cube274", "value" : "103.953011" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Cube274", "value" : "104.002045" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Cube273", "value" : "104.280914" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Cube273", "value" : "104.372025" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Cube273", "value" : "104.436707" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Cube273", "value" : "104.436707" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Cube273", "value" : "104.482162" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Floor4", "value" : "104.482162" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Physic_Cube_9", "value" : "106.214615" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Cube252", "value" : "109.303459" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Cube252", "value" : "109.303459" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Floor4", "value" : "109.303459" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Cube252", "value" : "109.344963" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Cube252", "value" : "109.344963" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Floor4", "value" : "109.344963" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Cube252", "value" : "109.384735" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Cube252", "value" : "109.384735" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Floor4", "value" : "109.384735" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Physic_Cube_5", "value" : "177.889633" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Physic_Cube_5", "value" : "177.889633" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "fLOOR", "value" : "177.889633" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Physic_Cube_5", "value" : "177.935089" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Physic_Cube_5", "value" : "177.935089" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "fLOOR", "value" : "177.935089" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Physic_Cube_6", "value" : "180.225113" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Physic_Cube_6", "value" : "180.225113" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Floor2", "value" : "180.225113" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Physic_Cube_6", "value" : "180.225113" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Physic_Cube_6", "value" : "180.225113" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Floor2", "value" : "180.225113" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Physic_Cube_6", "value" : "180.280685" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Physic_Cube_6", "value" : "180.280685" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Physic_Cube_6", "value" : "180.280685" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Floor2", "value" : "180.280685" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Cube335", "value" : "186.264511" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Cube335", "value" : "186.264511" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Cube335", "value" : "186.322327" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Cube335", "value" : "186.322327" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Cube335", "value" : "186.382156" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Cube335", "value" : "186.382156" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "Cube335", "value" : "186.465149" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "205.070358" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "205.070358" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "205.070358" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "205.070358" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "205.15477" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "205.15477" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "205.15477" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "205.15477" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "205.210587" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "205.210587" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "205.210587" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "205.210587" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "205.267349" } } ,
{ "eventName" : "Collision", "attributes" : { "name" : "RoughTerrain_StaticMesh_4", "value" : "205.267349" } } ,
{ "eventName" : "Quit" } ,
{ "eventName" : "SessionEnd", "attributes" : { "name" : "EndTime", "value" : "214.600021" } }
            ]
	             }]';


        $obj = json_decode($json, true);


        dump($obj);

//        $game = new Game();
//        $game->session_id= $obj['sessionId'];
//        $game->user_id= $obj['userId'];
//        echo $game;
        //$game->save();

        dump(Game::all());


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
        //
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

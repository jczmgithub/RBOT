<?php

namespace App\Http\Controllers;

use DeepCopy\Filter\KeepFilter;
use Illuminate\Http\Request;
use App\datosRobot;
use Illuminate\Support\Facades\Input;

class RobotController extends Controller
{
    public function dataRobot(Request $request ){

        $robot=Input::get('selecRobot');
        $motor=Input::get('selecMotor');
        $pasos=request()->get('pasos');
        $velocidad=request()->get('velocidad');

        $datosRobot = new datosRobot();

        $datosRobot->robot=$robot;
        $datosRobot->motor=$motor;
        $datosRobot->pasos=$pasos;
        $datosRobot->velocidad=$velocidad;

        $file=fopen('../storage/app/datos.json','w');
        fwrite($file,json_encode($datosRobot));
        fclose($file);

        return(view('home'));


    }
}

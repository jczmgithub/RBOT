<?php

namespace App\Http\Controllers;

//use DeepCopy\Filter\KeepFilter;
use App\Models\UserRobot;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\DatosRobot;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;

class RobotController extends Controller
{
//    public function dataRobot(Request $request ){
//
//        $robot=Input::get('selecRobot');
//        $motor=Input::get('selecMotor');
//        $pasos=request()->get('pasos');
//        $velocidad=request()->get('velocidad');
//
//        $datosRobot = new DatosRobot();
//
//        $datosRobot->robot=$robot;
//        $datosRobot->motor=$motor;
//        $datosRobot->pasos=$pasos;
//        $datosRobot->velocidad=$velocidad;
//
//        switch($request->submit) {
//
//            case 'enviar':
//                $file=fopen('../storage/app/datos.json','w+');
//                //enviar contenido de formulario
//                fwrite($file,"");
//                fclose($file);
//                break;
//
//            case 'guardar':
//                $file=fopen('../storage/app/datos.json','a+');
//                fwrite($file,json_encode($datosRobot).PHP_EOL);
//                fclose($file);
//                break;
//        }
//
//        return back();
//
//    }
    public function guardarFila(Request $request) {
        $robot=request()->get('robot');
        $motor=request()->get('motor');
        $pasos=request()->get('pasos');
        $velocidad=request()->get('velocidad');
        $fichero=request()->get('fichero');

        $datosRobot = new DatosRobot();

        $datosRobot->robot=$robot;
        $datosRobot->motor=$motor;
        $datosRobot->pasos=$pasos;
        $datosRobot->velocidad=$velocidad;

//        $file=fopen('../storage/app/'.$fichero.'.txt','a+');
//        fwrite($file,json_encode($datosRobot).PHP_EOL);
//        fclose($file);

        Storage::disk('s3')->put('Secuencias/'.$fichero.'.txt', json_encode($datosRobot).PHP_EOL);

    }
    public function addFila(){
        return view('user.includes.filaNueva', ['modelos' => DB::table('user_robot')
            ->join('robots', 'user_robot.robot_id', '=', 'robots.id')
            ->select('user_robot.user_id' ,'robots.modelo')
            ->where('user_robot.user_id', '=', Auth::user()->id)
            ->get()]);
    }
    public function formRobot(){
        return view('user.pages.registrarRobot');
    }
    public function verRobot(){
        return view('user.pages.verRobots', ['robots' => DB::table('user_robot')
            ->join('robots', 'user_robot.robot_id', '=', 'robots.id')
            ->select('user_robot.user_id' ,'robots.modelo', 'robots.host', 'robots.id')
            ->where('user_robot.user_id', '=', Auth::user()->id)
            ->get()]);
    }
    public function tablaRobot(){
        //TODO Cambiar la query BBDD relacionado
        return view('user.includes.tablaRobots', ['robots' => DB::table('user_robot')
            ->join('robots', 'user_robot.robot_id', '=', 'robots.id')
            ->select('user_robot.user_id' ,'robots.modelo', 'robots.host', 'robots.id')
            ->where('user_robot.user_id', '=', Auth::user()->id)
            ->get()]);
    }
    public function eliminarRobot(){
        DB::table('robots')->where('id', '=', $_POST["id"])->delete();
        DB::table('user_robot')->where('robot_id', '=', $_POST["id"])->delete();
    }
    public function verRobotUser(){
        return view('user.pages.verRobotUser', ['users' => DB::table('users')->get()->where('owner', '=', Auth::user()->id), 'robots' => DB::table('user_robot')
            ->join('robots', 'user_robot.robot_id', '=', 'robots.id')
            ->select('user_robot.user_id' ,'robots.modelo', 'robots.host', 'robots.id')
            ->where('user_robot.user_id', '=', Auth::user()->id)
            ->get()]);

    }
    public function asignarRobot(Request $request){
        $userid = DB::table("users")->where('name', "=", $request->input('selectUser'))->first();
        $robotid = DB::table("robots")->where('modelo', "=", $request->input('selectRobot'))->first();
        $idU= $userid->id;
        $idR = $robotid->id;
        DB::table('user_robot')->insert(
           ['user_id' => $idU, 'robot_id' => $idR]
            );


        return redirect (route('user.verRobotUser'))->with('status', 'Se ha asignado correctamente');
    }


}

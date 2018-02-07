<?php

namespace App\Http\Controllers;

//use DeepCopy\Filter\KeepFilter;
use App\Models\Robot;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class RobotController extends Controller
{
    public function guardarFila(Request $request) {
        $filas=request()->get('filas');
        $fichero=request()->get('fichero');

        Storage::disk('s3')->put('/'.$fichero, $filas);

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
    public function tablaRobot(){
        return view('user.pages.verRobots', [
            'robots' => Auth::user()->robots
            ]);
    }
    public function eliminarRobot(){
        DB::table('robots')->where('id', '=', $_POST["id"])->delete();
        DB::table('user_robot')->where('robot_id', '=', $_POST["id"])->delete();
    }
    public function verRobotUser(){
        return view('user.pages.verRobotUser', ['users' => DB::table('users')->get()->where('owner', '=', Auth::user()->id), 'robots' => DB::table('user_robot')
            ->join('robots', 'user_robot.robot_id', '=', 'robots.id')
            ->select('user_robot.user_id' ,'robots.modelo', 'robots.host', 'robots.id', 'robots.name')
            ->where('user_robot.user_id', '=', Auth::user()->id)
            ->get()]);
    }
    public function asignarRobot(Request $request){
        $userid = DB::table("users")->where('name', "=", $request->input('selectUser'))->first();
        $robotid = DB::table("robots")->where('name', "=", $request->input('selectRobot'))->first();
        $idU= $userid->id;
        $idR = $robotid->id;
        DB::table('user_robot')->insert(
           ['user_id' => $idU, 'robot_id' => $idR]
            );


        return redirect (route('user.verRobotUser'))->with('status', 'Se ha asignado correctamente');
    }
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255|unique:robots',
            'modelo' => 'required|string|max:255',
            'host' => 'required|string',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return Robot::create([
            'name' => $data['name'],
            'modelo' => $data['modelo'],
            'host' => $data['host'],
            'user_id' => Auth::user()->id
        ]);
    }
    protected function registrarRobot(Request $request){
        $input = $request -> all();
        $validator =  $this->validator($input);

        if($validator->passes()){
            $data = $this ->create($input)->toArray();
            $userID = Auth::user()->id;
            $robotID = $data['id'];
            DB::table('user_robot')->insert(
                ['user_id' => $userID, 'robot_id' => $robotID]
            );
            return redirect(route('user.formRobot'))->with('status', 'Robot registrado.');
        } else{
            return back()->with('errors',$validator->errors());
        }

    }

    public function listadoS3(){
        $files=Storage::files('/');
        return $files;
    }

    public function mostrarValores(){

        $selFichero = $_POST["fichero"];

        $contenido = Storage::get($selFichero);

        return $contenido;
    }

    public function domotekSend(){
            echo $_POST["robot"]."; ".$_POST["motor"]."; ".$_POST["pasos"]."; ".$_POST["velocidad"];
    }

    public function domotekStop(){
            echo "Parada de Emergencia exitosa";
    }

    public function domotekHome(){
             echo "Ha vuelto a la posición de orígen";
    }

}

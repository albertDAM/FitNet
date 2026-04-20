<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MacrosRequest;

class MacrosController extends Controller
{
    public function show(){
        return view('macros');
    }


    public function calcularTMB(MacrosRequest $request){
        //recogemos los datos

        $validacion = $request->validate([
            'peso' => 'required',
            'altura' => 'required',
            'edad' => 'required',
            'sexo' => 'required',
            'actividad' => 'required',
            'objetivo' => 'required',
            

        ]);

            $peso = $request->input('peso');
            $altura = $request->input('altura');
            $edad = $request->input('edad');
            $sexo = $request->input('sexo');
            $actividad = $request->input('actividad');
            $objetivo = $request->input('objetivo');

            if($request->input('sexo') == 'hombre'){

                $tmb = ($validacion['peso'] * 10) + ($validacion['altura'] * 6.25) - ($validacion['edad']*5) +5;
            } else{
                $tmb = ($validacion['peso'] * 10) + ($validacion['altura'] * 6.25) - ($validacion['edad']*5) -161;
                
            }
            //return $tmb;
            

            //calcular tdee a partir del tmb 
            if($request->input('actividad') == 'sedentario'){
                $tdee = $tmb *1.2;
            }else if($request->input('actividad') == 'ligero'){
                $tdee = $tmb *1.375;  
            }else if($request->input('actividad') == 'moderado'){
                $tdee = $tmb *1.55;
            }else if($request->input('actividad') == 'fuerte'){
                $tdee = $tmb *1.725;
            }else if($request->input('actividad') == 'muyfuerte'){
                $tdee = $tmb *1.9;
            }

            //return $tdee;
            if($request->input('objetivo') == 'perder'){
                $tdee = $tdee -400;
                return $this->calcularMacros($peso, $tdee);
                //return "es:" . $caloriasprot . "proteina" . $grasas . "carbo" . $carbo;

            }else if($request->input('objetivo') == 'ganar'){
                $tdee = $tdee +400;
                return $this->calcularMacros($peso, $tdee);
            }else if($request->input('objetivo') == 'mantenimiento'){
               return $this->calcularMacros($peso, $tdee);
            }

    } 

    public function calcularMacros($peso, $tdee){
            $proteina = $peso *2;
            $caloriasprot = $proteina *4;
            $grasas = $tdee *0.25;
            $grasasgr = $grasas /9;
            $carbo = $tdee - ($caloriasprot + $grasas);
            $carbogr = $carbo /4;
            
            return "TDEE: " .$tdee . "  PROTEINA: " . $caloriasprot . " GRASAS: " . $grasas . " CARBO: " . $carbo;
            }

   

}

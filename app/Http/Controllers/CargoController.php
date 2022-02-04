<?php

namespace App\Http\Controllers;

use App\Models\Cargo;
use Illuminate\Http\Request;


class CargoController extends Controller
{

    public function index()
    {
   
		
	  // $datos=Cargo::paginate(5);
      // return view('cargo.index',$datos);
		$datos=Cargo::all();
        return view('cargo.index')->with('cargos',$datos);
    }

	public function messages()
	{
		return [
			'descripcion.required' => 'La descripcion es obligatoria !!!',
			'salario.required' => 'El Salario es obligatorio',
		];
	}
    public function create()
    {
        return view('cargo.create');
    }


    public function store(Request $request)
    {
		
		$this->validate($request, [
            'descripcion' => 'required|max:50|min:5',
            'salario' => 'required',
			'salario' => 'integer'
	
           
        ]);
	
        //
		//$datosEmpleado=request()->all(); //recibe todo los enviado en el formulario incluyendo el token
		$datosCargo=request()->except('_token');
		//if($request->hasFile('Foto')){// para saber si viene un archivo o imagen
		//	$datosEmpleado['Foto']=$request->file('Foto')->store('uploads','public');//almacena la foto en esrta ruta
		//}
		Cargo::insert($datosCargo);
		//Alert::success('Congrats', 'You\'ve Successfully Registered');
		$datos['cargo']=Cargo::paginate(5);
		return redirect('/cargo');
    }

 
    public function show(Cargo $cargo)
    {
        //
    }


    public function edit(Cargo $cargo)
    {
        //
    }


    public function update(Request $request, Cargo $cargo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cargo  $cargo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete=Cargo::destroy($id);
        return redirect('/cargo')->with('eliminar','ok');
    }
}

<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{


    public function index()
    {
        $usuarios=User::paginate(25);
        return view('usuarios',['usuarios'=>$usuarios]);
    }


    public function destroy($id)
    {
        $usuario=User::where('id', $id)->first();
        $usuario->delete();
        return redirect()->route('usuarios');
        
    }

    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $usuario=User::where('id', $id)->first();
        

        return view('forms.editusuario',compact('usuario'));
    }

    public function update(Request $request, $id)
    {
        $usuario=User::where('id', $id)->first();

        $usuario->rol = $request->rol;     

        $usuario->save();
        return redirect()->route('usuarios');
    }
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'apellidos' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'dni' => ['required', 'string', 'max:255'],
            'edad' => ['required', 'integer'],
            'telefono' => ['nullable', 'string', 'max:255'],
            'direccion' => ['nullable', 'string', 'max:255'],
            'ciudad' => ['nullable', 'string', 'max:255'],
            
        ]);

        $user = User::create([
            'name' => $request->name,
            'apellidos' => $request->apellidos,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'dni' => $request->dni,
            'edad' => $request->edad,
            'telefono' => $request->telefono,
            'direccion' => $request->direccion,
            'ciudad' => $request->ciudad,
            'rol' => 'Asistente',
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}

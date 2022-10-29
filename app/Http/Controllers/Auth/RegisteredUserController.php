<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules;
use Illuminate\Support\Str;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name'  => 'required|string|max:255',
            'email'      => 'required|string|email|max:255|unique:users',
            'password'   => ['required', 'confirmed', Rules\Password::defaults()],
            'pref' => 'required|string|max:255',
            'zip1'   => 'required|string|min:3|max:3',
            'zip2'   => 'required|string|min:4|max:4',
            'address1'   => 'required|string|max:255',
            'address2'   => 'nullable|string|max:255',
        ]);

        $user = User::create([
            'first_name' => $request->first_name,
            'last_name'  => $request->last_name,
            'email'      => $request->email,
            'password'   => Hash::make($request->password),
            'prefecture' => $request->pref,
            'zip_code'   => $request->zip1 . '-' . $request->zip2,
            'address1'   => $request->address1,
            'address2'   => $request->address2,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }


    /**
     * Handle an incoming api registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function apiStore(Request $request)
    {
        $validated = Validator::make($request->all(), [
            'name' => 'required|string|min:3|max:100',
            'email'      => 'required|string|email|max:100|unique:users',
            'password'   => 'required|string|min:8|max:100',
            'company_name' => 'required|string|min:3|max:100',
            'prefecture' => 'required|string|min:3|max:100',
            'county' => 'required|string|min:3|max:100',
            'town' => 'required|string|min:3|max:100',
            'building_name' => 'required|string|min:3|max:100',
            'phone_number' => 'required|string|min:3|max:100',
            'fax_number' => 'required|string|min:3|max:100',
            'home_page' => 'required|string|min:3|max:100',
            'department' => 'required|string|min:3|max:100',
            'name_furigana' => 'required|string|min:3|max:100',
            'emergency_phone' => 'required|string|min:3|max:100',
        ]);

        if ($validated->fails()) {
            return Response::json([
                'status' => false,
                'message' => $validated->errors()->first(),
            ], 400);
        }

        $user = User::create([
            'name' => $request->name,
            'email'      => $request->email,
            'password'   => Hash::make($request->password),
            'company_name' => $request->company_name,
            'prefecture' => $request->prefecture,
            'county' => $request->county,
            'town' => $request->town,
            'building_name' => $request->building_name,
            'phone_number' => $request->phone_number,
            'fax_number' => $request->fax_number,
            'home_page' => $request->home_page,
            'department' => $request->department,
            'name_furigana' => $request->name_furigana,
            'emergency_phone' => $request->emergency_phone,
            'api_token' => Hash::make(Str::random(60)),
        ]);

        return Response::json([
            'user' => $user,
            'success' => true,
        ], 200);
    }
}

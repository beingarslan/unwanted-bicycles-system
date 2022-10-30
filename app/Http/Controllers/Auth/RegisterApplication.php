<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Notifications\RegisterApplicationNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class RegisterApplication extends Controller
{
    public function registerForApplication(Request $request)
    {

        $validated = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255|unique:users',
        ]);

        if ($validated->fails()) {
            Alert::error('エラー', '既に登録されているメールアドレスです。');
            return redirect()->back()->withInput();
        }

        $password = Str::random(8);
        $user = User::create([
            'email' => $request->email,
            'password' => Hash::make($password),
            'api_token' => Hash::make($password),
            'status' => false
        ]);

        Notification::send($user, new RegisterApplicationNotification($user, $password));

        Alert::success('登録申請が完了しました。');
        return redirect()->back();
    }

    public function registerApplication(Request $request, $email)
    {
        $validated = Validator::make($request->all(), [
            'token' => 'required|exists:users,api_token|string',
        ]);

        if ($validated->fails()) {
            abort(404);
        }

        $user = User::where('email', $email)->where('api_token', $request->token)->where('status', false)->first();
        if (!$user) {
            abort(404);
        }

        return view('auth.register', compact('user'));
    }
}

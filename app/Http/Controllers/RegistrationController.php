<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class RegistrationController extends Controller
{
    function register(Request $request) {
        
        $email = $request->email;
        $user_exists = User::where('email', '=', $email)->count();

        if($user_exists > 0){
            return response()->json([
                'status' => "User Exists!"
            ]);
        }else{
            $profile_picture = $request->profile_picture;
            $profile_picture = str_replace('data:image/jpeg;base64,', '', $profile_picture);
            $profile_picture = str_replace(' ', '+', $profile_picture);
            $decoded_profile_picture = base64_decode($profile_picture);
            $image_name = $email . "." . "jpg";
            Storage::disk('public')->put('profile_pictures/' . $image_name, $decoded_profile_picture);

            $user = new User;
            $user->name = $request->input('name');
            $user->age = $request->input('age');
            $user->gender_id = $request->input('gender_id');
            $user->location = $request->input('location');
            $user->email = $request->input('email');
            $user->password = Hash::make($request->input('password'));
            $user->profile_picture = 'profile_pictures/' . $image_name;
            $user->save();

            return response()->json([
                'status' => "User Added!"
            ]);
        }

    }
}

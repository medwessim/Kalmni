<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Notifications;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getUsers(){
        $users=User::where("role_number",0)->get();
        return response()->json(["data"=>$users],200);
    }

    public function deleteUSer($id){
        $users=User::find($id);
        $message ="";
        if($users==null){
            $message="user with $id not found";
            return response()->json(["message"=>$message],404);
        }
        else{
            $users->delete();
            return response()->json(["message"=>"user deleted"],200);
        }
    }

    public function getUserById($id){
        $users=User::find($id);
        return response()->json(["data"=>$users],200);
    }

    public function GetNotif($id){
        $notifs=Notifications::where("user_id",$id)->get();
        return response()->json(["data"=>$notifs],200);
    }

   
    public function UpdateUser(Request $request, $id){
        
        $users=User::find($id);
        $users->update([
            "nom"=>$request->nom,
            "prenom"=>$request->prenom,
            "email"=>$request->email,
            "password"=>$request->password,
            "role_number"=>$request->role_number,
            'photo'=>$request->image,
            "tel"=>$request->tel,
            "adresse"=>$request->adresse,
            "date"=>$request->date,
        ]);
        return response()->json(["message"=>"Update user terminé"],200);
    }
    //
}

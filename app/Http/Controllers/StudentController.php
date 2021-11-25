<?php
namespace Carbon\Carbon;
namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\User;
use Illuminate\Support\Facades\Storage;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $parent_id="";
       $request->validate([
                'name'=>'required',
                'username'=>'required|unique:users',
                'email'=>'required|unique:users'
        ]);
        //////////////////////////
        if($request->account != '1')
        {
            $parent_id       = $request->parent_id;
        }else if($request->account == '1')
        {

            $parent =User::create([
            'name'      => $request->parent_first_name,
            'last_name'   => $request->parent_last_name,
            'password'    => bcrypt($request->parent_password),
            'email'    => $request->parent_email,
            'username'      => $request->parent_username,
            'since'         =>  date("m/d"),
            'phone'         => $request->parent_phone,
            'gender'        => $request->parent_gender,
            'address'       => $request->parent_address,

            'profession'         => $request->parent_profession,
            'home_phone'         => $request->parent_home_phone,
            'idcard'         => $request->parent_idcard,
            'business'         => $request->parent_business,
            'business_phone'         => $request->parent_business_phone,
            'address'         => $request->parent_address,
            'note'         => $request->note,

        ]);
              $parent_id =$parent->id;

        }


         if ($request->file('foto')) {
            $file = $request->file('foto');
            $url=Storage::put('teacher',$file);
        }


         $usuario=User::create([
            'name'      => $request->name,
            'last_name'   => $request->last_name,
            'email'    => $request->email,
            'birthday'    => $request->birthday,
            'password'    => bcrypt($request->password),
            'username'      => $request->username,
            'since'         =>  date("m/d"),
            'phone'         => $request->phone,
            'gender'        => $request->gender,
            'address'       => $request->address,
            'transport_id'  => $request->transport_id,
            'dormitory_id'  => $request->dormitory_id,
            'parent_id'         => $parent_id,
            'diseases'         => $request->diseases,
            'allergies'         => $request->allergies,
            'doctor'         => $request->doctor,
            'doctor_phone'         => $request->doctor_phone,
            'authorized_person'         => $request->auth_person,
            'authorized_phone'         => $request->auth_phone,
            'note'         => $request->note,
            'profile_photo_path' => $url
        ]);
        return $parent_id;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function buscarEmail($email)
    {
        return User::where('email',$email)->count();
    }

    public function buscarUsername($username)
    {
        return User::where('username',$username)->count();
    }
}

<?php
namespace Carbon\Carbon;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

// Indicamos que trabajamos con Vistas
use View;

// Indicamos que usamos el Modelo User.


// Validación de formularios.
use Validator;

// Hash de contraseñas.
use Hash;



use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    use HasRoles;
    protected $paginationTheme='bootstrap';
    public function index()
    {
        $page_title = 'Usuarios';
        $page_description = 'Manejo de usuarios';

        return view('admin.users', compact('page_title', 'page_description'));
    }

    public function teachers($param1 = '', $param2 = '', $param3 = '')
    {
        $page_title = 'maestros';
        $page_description = 'Manejo de Maestros';

        //return view('admin.teachers', compact('page_title', 'page_description'));





       /* if ($this->session->userdata('admin_login') != 1)
            {
                redirect(base_url(), 'refresh');
            }
            if($param1 == 'accept')
            {
                $this->user->acceptTeacher($param2);
                $this->session->set_flashdata('flash_message' , getEduAppGTLang('successfully_updated'));
                redirect(base_url() . 'admin/teachers/', 'refresh');
            }
            if ($param1 == 'create')
            {
                $this->user->createTeacher();
                $this->session->set_flashdata('flash_message' , getEduAppGTLang('successfully_added'));
                redirect(base_url() . 'admin/teachers/', 'refresh');
            }
            if ($param1 == 'update')
            {
                $this->user->updateTeacher($param2);
                $this->session->set_flashdata('flash_message' , getEduAppGTLang('successfully_updated'));
                redirect(base_url() . 'admin/teachers/', 'refresh');
            }
            if ($param1 == 'update_profile')
            {
                $this->user->updateTeacher($param2);
                $this->session->set_flashdata('flash_message' , getEduAppGTLang('successfully_updated'));
                redirect(base_url() . 'admin/teacher_update/'.$param2. '/', 'refresh');
            }
            if ($param1 == 'delete')
            {
                $this->user->deleteTeacher($param2);
                $this->session->set_flashdata('flash_message' , getEduAppGTLang('successfully_deleted'));
                redirect(base_url() . 'admin/teachers/', 'refresh');
            }*/

            $page_data['account_type']  = 'admin';
            $page_data['page_name']  = 'teachers';
            $page_data['page_title'] = 'Maestros';

            return view('admin/index', compact('page_data'));
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
            'since'         => 'since',
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
            'since'         => 'since',
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



    public function studentAdmission(Request $request)
    {


        if($request->account != '1')
        {
            $parent_id       = $request->parent_id;
        }else if($request->parent_id == '1')
        {

            $parent =User::create([
            'name'      => $request->parent_first_name,
            'last_name'   => $request->parent_last_name,
            'password'    => bcrypt($request->parent_password),
            'email'    => bcrypt($request->parent_email),
            'username'      => $request->parent_username,
            'since'         => 'since',
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
            'birthday'    => $request->birthday,
            'password'    => bcrypt($request->password),
            'username'      => $request->username,
            'since'         => 'since',
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



          $id_user=$usuario->id;

        /*$data4['student_id']       = $student_id;
        $data4['enroll_code']      = substr(md5(rand(0, 1000000)), 0, 7);
        $data4['class_id']         = $this->input->post('class_id');
        if ($this->input->post('section_id') != '')
        {
            $data4['section_id']   = $this->input->post('section_id');
        }
        $data4['roll']             = $this->input->post('roll');
        $data4['date_added']       = strtotime(date("Y-m-d H:i:s"));
        $data4['year']             = $this->runningYear;
        $this->db->insert('enroll', $data4);
        move_uploaded_file($_FILES['userfile']['tmp_name'], 'public/uploads/student_image/' . $md5.str_replace(' ', '', $_FILES['userfile']['name']));*/
        return $id_user;
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
}

<?php

namespace App\Http\Controllers;

use App\Models\ClassRoom;
use App\Models\Curso;
use App\Models\Section;
use Illuminate\Http\Request;
use App\Models\User;
use Facade\FlareClient\Http\Response;

class PagesController extends Controller
{
    public function index()
    {


        $user = auth()->user();
        $roles = $user->getRoleNames();

        $page_description = 'Some description for the page';
          $page_data['account_type']  = $roles->first();
            $page_data['page_name']  = 'dashboard';
            $page_data['page_title'] = 'Maestros';

           $roles->first();
           $page_title = 'Dashboard '.$roles->first();;
        return view('index', compact('page_title', 'page_description','page_data','roles'));
    }

    public function dashboard()
    {
        $page_title = 'Dashboard';
        $page_description = 'Some description for the page';

        return view('dashboard', compact('page_title', 'page_description'));
    }

    /**
     * Demo methods below
     */




     // student
    public function student()
    {
            $page_data['account_type']  = 'admin';
            $page_data['page_name']  = 'student';
            $page_data['page_title'] = 'Maestros';

             $role='parent';
            $users = User::role($role)->pluck('name','id');
            $cursos = Curso::pluck('name','id');

            $sections = Section::pluck('name','id');
            $classrooms = ClassRoom::pluck('name','id');
            //$categories = Category::pluck('name','id');
            return view('index', compact('page_data','users','cursos','sections','classrooms'));
    }
    //cursos
    public function cursos()
    {

            $page_data['account_type']  = 'admin';
            $page_data['page_name']  = 'cursos';
            $page_data['page_title'] = 'Cursos';



          return 'secciones';

            return view('index', compact('page_data','cursos'));
    }

    // teacher

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
            $page_data['page_name']  = 'teacher';
            $page_data['page_title'] = 'Maestros';
            $role='teacher';
            $users = User::role($role)->get();

            return view('admin/index', compact('page_data','users'));
    }




}

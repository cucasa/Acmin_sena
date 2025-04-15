<?php

namespace App\Http\Controllers;
use App\Models\computers;
use App\Models\apprentices;
use App\Models\areas;
use App\Models\course_teacher;
use App\Models\courses;
use App\Models\prueva;
use App\Models\teachers;
use App\Models\training_centers;



use Illuminate\Http\Request;

class OrmController extends Controller
{

    public function consultas(){


        // $profile=Profile::find(2);
        // return $profile->user;

            $Computer = computers::find(1);
            return $Computer;
        }

        // $post=Post::find(3);
        // return $post->category;





        // return $users->profile;

        // $role = Role::find(1);


        //  $user = User::find(1);
        //  $user->roles()->detach(1);
        //  return $user;



        //  $role = Role::find(3);
        //  $role->users()->attach(2);
        //  return $role;




    }



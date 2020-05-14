<?php

namespace App\Repositories\Eloquent;

use App\Repositories\Contracts\StudentRepositoryInterface;
use App\Student;

class StudentRepository extends AbstractRepository implements StudentRepositoryInterface {

    protected $model = Student::class;
    
    
    
    
} 


?>
<?php

namespace App\Http\Controllers\Admin;

use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;
use App\Repositories\Contracts\StudentRepositoryInterface;

class StudentController extends Controller
{

    private $router = "students";
    private $paginate =6;
    private $search = ['name']; 
    private $model;

    public function __construct(StudentRepositoryInterface $model){
       $this->model = $model;
    } 

    
    public function index(Request $req)
    {
        $columnList = [
            'name'=>'Nome',
            'email'=>'Email',
            'current_college' =>'Colégio atual',
            'serie' => 'série'
        ];  

        $search = '';
        if(isset($req->search)){
          $search = $req->search;
          $list = $this->model->findWhereLike($this->search, $search,'name','ASC');
        }else{
          $list = $this->model->paginate($this->paginate,'name','ASC');
        }

        $page = "Lista de Estudantes";

        $routerName = $this->router;
        
        $breadcrumb = [
          (object)['url'=>route('home'),'title'=>'Home'], 
          (object)['url'=>'','title'=>'Lista de Estudantes'],  

        ];
       
        return view('admin.'.$routerName.'.index', compact('list','search','routerName','columnList','breadcrumb','page'));
        
    }

    
    public function create()
    {
        $routerName = $this->router;
        $page = "Adicionar Estudante";

        $breadcrumb = [
            (object)['url'=>route('home'),'title'=>'Home'], 
            (object)['url'=>route($routerName.'.index'),'title'=>'Lista de Estudantes'],
            (object)['url'=>'','title'=>'Adicionar'],  
        ];

        return view('admin.'.$routerName.'.create', compact('routerName','breadcrumb','page'));

    }

    
    public function store(Request $request)
    {
        $data = $request->all();

        /*foreach ($data as $key => $value) {
            $data[$key] = htmlspecialchars($value);
        }*/
        
        //dd($data);
        
        Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255|unique:students',
            'current_college'=>'required|string|max:255',
            'serie' => 'required|string|max:255'
        ])->validate();


        if($this->model->create($data)){
            $request->session()->flash('msg', 'Inscrição realizada com sucesso');
            $request->session()->flash('status', 'success');// success error notification
            return redirect()->route('welcome');
        }else{
            $request->session()->flash('msg', 'erro ao adicionar um registro');
            $request->session()->flash('status', 'error');
            return redirect()->route('welcome');

        }


    }

   
    public function show($id, Request $req)
    {
        $routerName = $this->router;
        $register = $this->model->find($id);

         if($register){
            $page2 = "Detalhes";

            $breadcrumb = [
                (object)['url'=>route('home'),'title'=>'Home'], 
                (object)['url'=>route($routerName.'.index'),'title'=>'Lista de Estudantes'],
                (object)['url'=>'','title'=>'Detalhes'],  
            ];

            $delete = false;
            if($req->delete ?? false){
                $req->session()->flash('msg','Que realmente deletar esse registro?');
                $req->session()->flash('status', 'error');
                $delete = true;
            }

            return view('admin.'.$routerName.'.show', compact('routerName','breadcrumb','page2','register','delete'));  
         }

         return redirect()->route($routerName.'.index');
    }

    
    public function edit($id)
    {
        $routerName = $this->router;
        $register = $this->model->find($id);

         if($register){
            $page2 = "Editar Estudante";

            $breadcrumb = [
                (object)['url'=>route('home'),'title'=>'Home'], 
                (object)['url'=>route($routerName.'.index'),'title'=>'Lista de Estudantes'],
                (object)['url'=>'','title'=>'Editar'],  
            ];

            return view('admin.'.$routerName.'.edit', compact('routerName','breadcrumb','page2','register'));  
         }

         return redirect()->route($routerName.'.index');

        
    }

    
    public function update(Request $request, $id)
    {
        $data = $request->all();

        /*foreach ($data as $key => $value) {
            $data[$key] = htmlspecialchars($value);
        }*/

        Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' =>['required','string','email','max:255',Rule::unique('students')->ignore($id)],
            'current_college'=>'required|string|max:255',
            'serie' => 'required|string|max:255'
        ])->validate();

        if($this->model->update($data,$id)){
            $request->session()->flash('msg', 'Registro atualizado com sucesso');
            $request->session()->flash('status', 'success');// success error notification
            return redirect()->back();
        }else{
            $request->session()->flash('msg', 'erro ao atualizar o registro');
            $request->session()->flash('status', 'error');
            return redirect()->back();

        }
    }

   
    public function destroy($id, Request $request)
    {
        if($this->model->delete($id)){
            $request->session()->flash('msg', 'Registro excluido com sucesso');
            $request->session()->flash('status', 'success');// success error notification
        }else{
            $request->session()->flash('msg', 'erro ao excluir o registro');
            $request->session()->flash('status', 'error');
        }

        $routerName = $this->router;
        return redirect()->route($routerName.'.index');
    }
}
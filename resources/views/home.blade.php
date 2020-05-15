@extends('layouts.app')

@section('content')
@page_component(['col'=>12, 'page'=>$page])
    <div id="portfolio">
        <div class="row">
            <div style="cursor:pointer" onclick="window.location = '{{route('students.index')}}'" class="col-md-4 col-sm-6 portfolio-item">
                <a class="portfolio-link" >
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                        
                        </div>
                    </div>
                    <img class="img-fluid" src="{{asset('img/student.webp')}}" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>Estudantes Inscritos</h4>
                    <p class="text-muted">Editar ou Excluir</p>
                </div>
        </div>
    </div>
@endpage_component
@endsection

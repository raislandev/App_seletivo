<form class="form-inline" method="GET" action="{{route($routerName.'.index')}}">
    <div class="form-group mb-2">
    </div>
    <div class="form-group mx-sm-3 mb-2" >
     <input type="search"  class="form-control" name="search" id="busca" value="{{$search}}" placeholder="buscar">
    </div>
    <button style="margin-right:5px;" type="submit" class="btn btn-primary mb-2">Buscar</button>
    <a style="background:gray;border:none;color:white" href="{{route($routerName.'.index')}}" class="btn btn-warning mb-2">Limpar</a>
 </form> 
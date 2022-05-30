@extends('bugalter.dashbord')
@section('title','Qassaga chiqarilgan summa')
@section('control')
    
    <h1 style="text-align: center">Qassaga chiqarilgan summa</h1>
    <div class="row m-2">
    <form action="{{ route('index2',$kun->id) }}" method="GET">
        <input type="hidden" name="yil_id" id="" value="{{ $yil->id }}">
        <input type="hidden" name="oy_id" id="" value="{{ $oy->id }}">
        <input type="hidden" name="kun_id" id="" value="{{ $kun->id }}">
        <button type="submit" class="btn btn-info">Orqaga</button>
    </form>
    </div>
    <form action="{{ route('create4') }}" method="POST" class="shadowe">
        <div class="row m-2">
            @csrf
            <input type="hidden" name="yil_id" id="" value="{{ $yil->id }}">
            <input type="hidden" name="oy_id" id="" value="{{ $oy->id }}">
            <input type="hidden" name="kun_id" id="" value="{{ $kun->id }}">

            <div class="col-6 mt-3">
             <label for="exampleFormControlInput1" class="form-label">Sana</label>

                <input type="date" name="data" class="form-control" value="{{ old('data') }}">
                <span class="text-danger">@error('data') {{$message}}@enderror</span>  
            </div>

            <div class="col-6 mt-3">
             <label for="exampleFormControlInput1" class="form-label">Summa</label>

                <input type="number" name="summa" class="form-control" placeholder="Summa" value="{{ old('summa') }}">
                <span class="text-danger">@error('summa') {{$message}}@enderror</span>  
            </div>
            
            <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3">
                <button type="submit" class="btn btn-primary">Saqlash</button>
            </div>
        </div>
        </form>
        <br>

       <div class="row m-3">
        <table class="table table-dark table-hover">
            <thead>
                <th>N1</th>
                <th>Sana</th>
                <th>Summa</th>
                <th>O`chirish</th>               
            </thead>
            @foreach ($items as $item)
                <tbody>
                    <td><h5>{{ (($items->currentpage()-1) * $items->perpage() + ($loop->index+1)) }}</h5></td>                  
                    <td><h5>{{ $item->data }}</h5></td>
                    <td><h5>{{ $item->summa }}</h5></td>
                    <td>
                        <form method="POST" action="{{ route('delete4',$item->id)}}">
                            @csrf
                            <input type="hidden" name="yil_id" id="" value="{{ $yil->id }}">
                            <input type="hidden" name="oy_id" id="" value="{{ $oy->id }}">
                            <input type="hidden" name="kun_id" id="" value="{{ $kun->id }}">
                            <input type="hidden" name="summa" id="" value="{{ $item->summa }}">
                            <button type="submit" class="btn btn-danger">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"></path>
                                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"></path>
                                </svg>                                   
                              </button>                            
                        </form>                      
                    </td>
                </tbody>
            @endforeach           
        </table>
       </div>
@endsection

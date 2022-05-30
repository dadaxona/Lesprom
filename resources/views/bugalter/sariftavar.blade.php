@extends('bugalter.dashbord')
@section('title','Xarajatlar bo`limi')
@section('control')
    
    <h1 style="text-align: center">Xarajatlar bo`limi</h1>
    <div class="row m-2">
        <form action="{{ route('index2',$kun->id) }}" method="GET">
            <input type="hidden" name="yil_id" id="" value="{{ $yil->id }}">
            <input type="hidden" name="oy_id" id="" value="{{ $oy->id }}">
            <input type="hidden" name="kun_id" id="" value="{{ $kun->id }}">
            <button type="submit" class="btn btn-info">Orqaga</button>
        </form>
        </div>
    <form action="{{ route('create7') }}" method="POST" class="shadowe">
        <div class="row m-2">
            @csrf
            <input type="hidden" name="yil_id" id="" value="{{ $yil->id }}">
            <input type="hidden" name="oy_id" id="" value="{{ $oy->id }}">
            <input type="hidden" name="kun_id" id="" value="{{ $kun->id }}">
            <div class="col-6 mt-3">
             <label for="exampleFormControlInput1" class="form-label">Elektor energiya</label>

                <input type="number" name="elektor" class="form-control" placeholder="" value="{{ old('elektor') }}">
                <span class="text-danger">@error('elektor') {{$message}}@enderror</span>  
            </div>  

            <div class="col-6 mt-3">
             <label for="exampleFormControlInput1" class="form-label">Gaz</label>

                <input type="number" name="gaz" class="form-control" placeholder="" value="{{ old('gaz') }}">
                <span class="text-danger">@error('gaz') {{$message}}@enderror</span>  
            </div>

            <div class="col-6 mt-3">
             <label for="exampleFormControlInput1" class="form-label">Suv</label>

                <input type="number" name="suv" class="form-control" placeholder="" value="{{ old('suv') }}">
                <span class="text-danger">@error('suv') {{$message}}@enderror</span>  
            </div>

            <div class="col-6 mt-3">
             <label for="exampleFormControlInput1" class="form-label">Pitaniya</label>

                <input type="number" name="pitaniya" class="form-control" placeholder="" value="{{ old('pitaniya') }}">
                <span class="text-danger">@error('pitaniya') {{$message}}@enderror</span>
            </div>

            <div class="col-6 mt-3">
             <label for="exampleFormControlInput1" class="form-label">Avtomobil xarajati</label>

                <input type="number" name="avto" class="form-control" placeholder="" value="{{ old('avto') }}">
                <span class="text-danger">@error('avto') {{$message}}@enderror</span>
            </div>

            <div class="col-6 mt-3">
             <label for="exampleFormControlInput1" class="form-label">Tushunmadim</label>

                <input type="number" name="bux" class="form-control" placeholder="" value="{{ old('bux') }}">
                <span class="text-danger">@error('bux') {{$message}}@enderror</span>
            </div>

            <div class="col-6 mt-3">
             <label for="exampleFormControlInput1" class="form-label">Tushunmadim2</label>

                <input type="number" name="korinmi" class="form-control" placeholder="" value="{{ old('korinmi') }}">
                <span class="text-danger">@error('korinmi') {{$message}}@enderror</span>
            </div>

            <div class="col-6 mt-3">
             <label for="exampleFormControlInput1" class="form-label">Kozda tutilmagan xarajat</label>
                <input type="number" name="tutilmagan" class="form-control" placeholder="" value="{{ old('tutilmagan') }}">
                <span class="text-danger">@error('tutilmagan') {{$message}}@enderror</span>
            </div>

            <div class="col-12 mt-3">
             <label for="exampleFormControlInput1" class="form-label">Sababi</label>
                <input type="text" name="sabab" class="form-control" value="{{ old('sabab') }}">
                <span class="text-danger">@error('sabab') {{$message}}@enderror</span>
            </div>
        <div class="col-6 mt-3">
             <label for="exampleFormControlInput1" class="form-label">Sana</label>
                <input type="date" name="data" class="form-control" value="{{ old('data') }}">
                <span class="text-danger">@error('data') {{$message}}@enderror</span>
            </div>
         <div class="col-6 mt-3">
            <label for="exampleFormControlInput1" class="form-label"></label>
                <div class="row">
            <label for="exampleFormControlInput1" class="form-label"></label>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary form-control">Saqlash</button>
                </div>
                </div>
            </div>
        </div>       
        </form>

       <div class="row m-3">
        <table class="table table-dark table-hover">
            <thead>
                <th>N1</th>
                <th>Elector</th>
                <th>Gaz</th>
                <th>Suv</th>
                <th>Pitaniya</th>
                <th>Automobil</th>
                <th>Bilmadim</th>
                <th>Korinmagan</th>
                <th>Kozda tutilmagan</th>
                <th>Sababi</th>
                <th>Sana</th>
                <th>Jamisumma</th>             
                <th>O`chirish</th>
            </thead>
            @foreach ($kunlik as $item)
                <tbody>
                    <td><h5>{{ (($kunlik->currentpage()-1) * $kunlik->perpage() + ($loop->index+1)) }}</h5></td>
                    <td><h5>{{ $item->elektor }}</h5></td>
                    <td><h5>{{ $item->gaz }}</h5></td>
                    <td><h5>{{ $item->suv }}</h5></td>
                    <td><h5>{{ $item->pitaniya }}</h5></td>
                    <td><h5>{{ $item->avto }}</h5></td>
                    <td><h5>{{ $item->bux }}</h5></td>
                    <td><h5>{{ $item->korinmi }}</h5></td>
                    <td><h5>{{ $item->tutilmagan }}</h5></td>
                    <td><h5>{{ $item->sabab }}</h5></td>
                    <td><h5>{{ $item->data }}</h5></td>
                    <td><h5>{{ $item->jamisumma }}</h5></td>
                    <td>
                        <form method="POST" action="{{ route('delete7',$item->id)}}">
                            @csrf  
                            <input type="hidden" name="yil_id" id="" value="{{ $yil->id }}">
                            <input type="hidden" name="oy_id" id="" value="{{ $oy->id }}">
                            <input type="hidden" name="kun_id" id="" value="{{ $kun->id }}">
                            <input type="hidden" name="elektor" id="" value="{{ $item->elektor }}">
                            <input type="hidden" name="gaz" id="" value="{{ $item->gaz }}">
                            <input type="hidden" name="suv" id="" value="{{ $item->suv }}">
                            <input type="hidden" name="pitaniya" id="" value="{{ $item->pitaniya }}">
                            <input type="hidden" name="bux" id="" value="{{ $item->bux }}">
                            <input type="hidden" name="avto" id="" value="{{ $item->avto }}">
                            <input type="hidden" name="korinmi" id="" value="{{ $item->korinmi }}">
                            <input type="hidden" name="tutilmagan" id="" value="{{ $item->tutilmagan }}">
                            <input type="hidden" name="jamisumma" id="" value="{{ $item->jamisumma }}">
                            <button type="submit" class="btn btn-danger">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"></path>
                                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"></path>
                                </svg>                                   
                            </button>                            
                        </form>                      
                    </td>
            @endforeach           
        </table>
@endsection

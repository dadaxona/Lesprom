@extends('bugalter.dashbord')
@section('title','Bank xisobini nazorat qilish')
@section('control')
    
    <h1 style="text-align: center">Bank xisobini nazorat qilish</h1>
    <div class="row m-2">
        <form action="{{ route('index2',$kun->id) }}" method="GET">
            <input type="hidden" name="yil_id" id="" value="{{ $yil->id }}">
            <input type="hidden" name="oy_id" id="" value="{{ $oy->id }}">
            <input type="hidden" name="kun_id" id="" value="{{ $kun->id }}">
            <button type="submit" class="btn btn-info">Orqaga</button>
        </form>
        </div>
    <form action="{{ route('store8') }}" method="POST" class="shadowe">
        @csrf
        <div class="row m-1">          
            <div class="col-4 mt-3">
                <input type="date" name="data" class="form-control">
                <span class="text-danger">@error('data') {{$message}}@enderror</span>  
            </div>
            <div class="col-4 mt-3">
                <select name="holat" class="form-control">
                     <option value="">Holatini belgilang</option>
                     <option value="Kirim">Kirim</option>
                     <option value="Chiqim">Chiqim</option>
                 </select>
                 <span class="text-danger">@error('holat') {{$message}}@enderror</span>             
            </div>
            <div class="col-4 mt-3">
                <input type="number" name="summa" class="form-control" placeholder="Summani kiriting">
                <span class="text-danger">@error('summa') {{$message}}@enderror</span>  
            </div>
               <div class="col-12 mt-3">
                <input type="text" name="sabab" class="form-control" placeholder="Sababini ko`rsating">
                <span class="text-danger">@error('sabab') {{$message}}@enderror</span>  
            </div>
            <div class="col-4 mt-3">                
                <button type="submit" class="aaa btn btn-primary">Saqlash</button>                
            </div>
              <div class="col-12 mt-3">
              <div class="row">
                @if ($bank)
                    <div class="swde alert alert-info">
                        <h3>Naqt: {{ $bank->naqt }}</h3>
                    </div>
                    <div class="swde alert alert-primary">
                        <h3>Bank schot: {{ $bank->bank }}</h3>
                    </div>
                    <div class="swde alert alert-success">
                        <h3>Jami schot: {{ $bank->jami }}</h3>
                    </div>
                @else
                    <div class="swde alert alert-info">
                        <h3>Naqt: 0</h3>
                    </div>
                    <div class="swde alert alert-primary">
                        <h3>Bank schot: 0</h3>
                    </div>
                    <div class="swde alert alert-success">
                        <h3>Jami schot: 0</h3>
                    </div>
                @endif
            </div>
        </div>
        </div>
        </form>    
        <br>
    <table class="table table-dark" id="wid">
        <thead>
            <th>N1</th>
            <th>Sana</th>
            <th>Holati</th>
            <th>Summasi</th>
            <th>Sababi</th>
            <th>O`chirish</th>
        </thead>
        @foreach ($data as $item)
            <tbody>
                <td><h5>{{ (($data->currentpage()-1) * $data->perpage() + ($loop->index+1)) }}</h5></td>
                <td><h5>{{ $item->data }}</h5></td>
                @if($item->holat == "Kirim")
                <td style="background-color: green;"><h5>{{ $item->holat }}</h5></td>                    
                @elseif($item->holat == "Chiqim")
                <td style="background-color: red;"><h5>{{ $item->holat }}</h5></td> 
                @endif
                <td><h5>{{ $item->summa }}</h5></td>
                <td><h5>{{ $item->sabab }}</h5></td>
                <td>
                    <form method="POST" action="{{ route('dele8',$item->id)}}">
                        @csrf
                        <input type="hidden" name="holat" class="form-control" value="{{ $item->holat }}">
                        <input type="hidden" name="summa" class="form-control" value="{{ $item->summa }}">
                        <button type="submit" class="btn btn-danger">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"></path>
                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"></path>
                            </svg>
                          </button>
                    </form>
                </td>
                {{-- <td>
                    <form method="POST" action="">
                        @csrf
                        <input type="hidden" name="yil_id" value="{{ $item->id }}">                                                            
                        <button type="submit" class="btn btn-info">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bar-chart-line-fill" viewBox="0 0 16 16">
                                <path d="M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1V2z"></path>
                            </svg>                           
                          </button>                                 
                        
                    </form>
                </td> --}}
               
            </tbody>
        @endforeach
       
    </table>
@endsection
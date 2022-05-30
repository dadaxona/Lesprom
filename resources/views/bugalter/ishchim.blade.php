@extends('bugalter.dashbord')
@section('title','Ishchilar oyligini nazoratga olish')
@section('control')
    
    <h1 style="text-align: center">Ishchilar oyligini nazoratga olish</h1>
    <div class="row m-2">
        <form action="{{ route('index2',$kun->id) }}" method="GET">
            <input type="hidden" name="yil_id" id="" value="{{ $yil->id }}">
            <input type="hidden" name="oy_id" id="" value="{{ $oy->id }}">
            <input type="hidden" name="kun_id" id="" value="{{ $kun->id }}">
            <button type="submit" class="btn btn-info">Orqaga</button>
        </form>
        </div>
    <form action="{{ route('store8') }}" method="POST">
        @csrf
        <input type="hidden" name="yil_id" id="" value="{{ $yil->id }}">
        <input type="hidden" name="oy_id" id="" value="{{ $oy->id }}">
        <input type="hidden" name="kun_id" id="" value="{{ $kun->id }}">
        <div class="row m-1">
        <div class="col-4 mt-3">
            <select name="ishchi_id" id="" class="form-control">
                <option value="">Ishchini belgilang</option>
                @foreach ($ishchi as $item)
                <option value="{{ $item->id }}">{{ $item->name }} {{ $item->fam }} {{ $item->ochestvo }}</option>
                @endforeach
            </select>
            <span class="text-danger">@error('ishchi_id') {{$message}}@enderror</span>  
        </div>

        <div class="col-4 mt-3">
            <select name="tavarturi_id" id="" class="form-control">
                <option value="">Tavarni belgilang</option>
                @foreach ($tavarturi as $item)
                <option value="{{ $item->id }}">{{ $item->tavarturi }}</option>
                @endforeach
            </select>
            <span class="text-danger">@error('tavarturi_id') {{$message}}@enderror</span>  
        </div>
        
            <div class="col-4 mt-3">
                <input type="date" name="data" class="form-control" placeholder="Ismni kiriting">
                <span class="text-danger">@error('data') {{$message}}@enderror</span>  
            </div>
            <div class="col-4 mt-3">
                <select name="hafta" class="form-control">
                     <option value="">Haftani belgilang</option>
                     <option value="Dushabna">Dushabna</option>
                     <option value="Seshanba">Seshanba</option>
                     <option value="Chorshanba">Chorshanba</option>
                     <option value="Payshanba">Payshanba</option>
                     <option value="Juma">Juma</option>
                     <option value="Shanba">Shanba</option>
                     <option value="Yakshanba">Yakshanba</option>
                 </select>
                 <span class="text-danger">@error('hafta') {{$message}}@enderror</span>             
            </div>
            <div class="col-4 mt-3">
                <input type="text" name="hajm" class="form-control" placeholder="Tovar hajmi kiriting">
                <span class="text-danger">@error('hajm') {{$message}}@enderror</span>  
            </div>
            <div class="col-4 mt-3">
                <input type="number" name="summa" class="form-control" placeholder="Summani kiriting">
                <span class="text-danger">@error('summa') {{$message}}@enderror</span>  
            </div>
            <div class="col-4 mt-3">                
                <button type="submit" class="aaa btn btn-primary">kiritush</button>                
            </div>
        </div>
        </form>    
        <br>
    <table class="table table-dark table-hover" id="wid">
        <thead>
            <th>N1</th>
            <th>Ism</th>
            <th>Familiya</th>
            <th>Otasining ismi</th>
            <th>Tavar turi</th>
            <th>Sana</th>
            <th>Hafta kuni</th>
            <th>Hajmi</th>
            <th>summasi</th>
            <th>Umumiy summa</th>
            <th>O`chirish</th>
        </thead>
        @foreach ($data as $item)
            <tbody>
                <td><h5>{{ (($data->currentpage()-1) * $data->perpage() + ($loop->index+1)) }}</h5></td>
                <td><h5>{{ $item->ishchi->name }}</h5></td>
                <td><h5>{{ $item->ishchi->fam }}</h5></td>
                <td><h5>{{ $item->ishchi->ochestvo }}</h5></td>
                <td><h5>{{ $item->tavarturi->tavarturi }}</h5></td>
                <td><h5>{{ $item->data }}</h5></td>
                <td><h5>{{ $item->hafta }}</h5></td>
                <td><h5>{{ $item->hajm }}</h5></td>
                <td><h5>{{ $item->summa }}</h5></td>
                <td><h5>{{ $item->jamisumma }}</h5></td>
                <td>
                    <form method="POST" action="{{ route('dele8',$item->id)}}">
                        @csrf                                                           
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
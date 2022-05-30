@extends('bugalter.dashbord')
@section('title','Yuklarni nazorat qilish bo`limi')
@section('control')
    
<h1 style="text-align: center">Yuklarni nazorat qilish bo`limi</h1>
    <div class="row m-2">
    <form action="{{ route('index2',$kun->id) }}" method="GET">
        <input type="hidden" name="yil_id" id="" value="{{ $yil->id }}">
        <input type="hidden" name="oy_id" id="" value="{{ $oy->id }}">
        <input type="hidden" name="kun_id" id="" value="{{ $kun->id }}">
        <button type="submit" class="btn btn-info">Orqaga</button>
    </form>
    </div>
    <form action="{{ route('store7') }}" method="POST">
        <div class="row m-2">
            @csrf
            <input type="hidden" name="yil_id" id="" value="{{ $yil->id }}">
            <input type="hidden" name="oy_id" id="" value="{{ $oy->id }}">
            <input type="hidden" name="kun_id" id="" value="{{ $kun->id }}">

            <div class="col-6 mt-3">
                <select name="ishchi_id" id="" class="form-control">
                    <option value="">Ishchi</option>
                    @foreach ($ishchi as $item)      
                        <option value="{{ $item->id }}">{{ $item->name }} {{ $item->fam }} {{ $item->ochestvo }}</option>
                    @endforeach
                </select>
                <span class="text-danger">@error('ishchi_id') {{$message}}@enderror</span>  
            </div>

            <div class="col-6 mt-3">
                <select name="tavarturi_id" id="" class="form-control">
                    <option value="">Tavarni belgilang</option>
                    @foreach ($tavar as $item)
                    @if ($item->hajm <= 0)
                       
                    @else
                        <option value="{{ $item->id }}">{{ $item->tavarturi->tavarturi }}</option>
                    @endif
                    @endforeach
                </select>
                <span class="text-danger">@error('tavarturi_id') {{$message}}@enderror</span>  
            </div>

            <div class="col-6 mt-3">
                <input type="date" name="data" class="form-control" value="{{ old('data') }}">
                <span class="text-danger">@error('data') {{$message}}@enderror</span>  
            </div>

            <div class="col-6 mt-3">
                <input type="text" name="hajm" class="form-control" placeholder="Tovar hajmi" value="{{ old('hajm') }}">
                <span class="text-danger">@error('hajm') {{$message}}@enderror</span>  
            </div>

            <div class="col-6 mt-3">
                <input type="number" name="summa" class="form-control" placeholder="Olingan narx" value="{{ old('summa') }}">
                <span class="text-danger">@error('summa') {{$message}}@enderror</span>  
            </div>
     
            <div class="col-6 mt-3">
                <div class="row">
                    <button type="submit" class="btn btn-primary">Kirirish</button>
                </div>
            </div>
        </div>       
        </form>
        <br>

       <div class="row m-3">
        <table class="table table-dark table-hover">
            <thead>
                <th>N1</th>
                <th>Ishchi nomi</th>
                <th>Ishchi familiyasi</th>
                <th>Tovar nomi</th>
                <th>Sanasi</th>
                <th>Tovar xajmi</th>
                <th>Summa</th>
                <th>Jamibo`lip</th>                
                <th>O`chirish</th>
            </thead>
            @foreach ($items as $item)
                <tbody>
                    <td><h5>{{ (($items->currentpage()-1) * $items->perpage() + ($loop->index+1)) }}</h5></td>
                    <td><h5>{{ $item->ishchi->name }}</h5></td>
                    <td><h5>{{ $item->ishchi->fam }}</h5></td>
                    <td><h5>{{ $item->tavarturi->tavarturi }}</h5></td>
                    <td><h5>{{ $item->data }}</h5></td>
                    <td><h5>{{ $item->hajm }}</h5></td>
                    <td><h5>{{ $item->summa }}</h5></td>
                    <td><h5>{{ $item->jamisumma }}</h5></td>
                    {{-- <td>
                        <a href="{{ route('edit8',$item->id) }}" class="btn btn-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                            <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
                          </svg>
                        </a>
                    </td> --}}
                    <td>
                        <form method="POST" action="{{ route('delete8',$item->id)}}">
                            @csrf
                            <input type="hidden" name="yil_id" id="" value="{{ $yil->id }}">
                            <input type="hidden" name="oy_id" id="" value="{{ $oy->id }}">
                            <input type="hidden" name="kun_id" id="" value="{{ $kun->id }}">
                            <input type="hidden" name="ishchi_id" id="" value="{{ $item->ishchi_id }}">
                            <input type="hidden" name="tavarturi_id" id="" value="{{ $item->tavarturi->id }}">
                            <input type="hidden" name="data" id="" value="{{ $item->data }}">
                            <input type="hidden" name="hajm" id="" value="{{ $item->hajm }}">
                            <input type="hidden" name="summa" id="" value="{{ $item->summa }}">
                            <input type="hidden" name="jamisumma" id="" value="{{ $item->jamisumma }}">
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
                    </td>                    --}}
                </tbody>
            @endforeach           
        </table>
        {{ $items->links() }}
       </div>
@endsection

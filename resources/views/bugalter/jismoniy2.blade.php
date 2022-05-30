@extends('bugalter.dashbord')
@section('title','Jismoniy shaxislarni ro`yxati')
@section('control')    
    <h1 style="text-align: center">Jismoniy shaxslarni ro`yxatga olish</h1>
    <div class="row m-2">
    <form action="{{ route('index2',$kun->id) }}" method="GET">
        <input type="hidden" name="yil_id" id="" value="{{ $yil->id }}">
        <input type="hidden" name="oy_id" id="" value="{{ $oy->id }}">
        <input type="hidden" name="kun_id" id="" value="{{ $kun->id }}">
        <button type="submit" class="btn btn-info">Orqaga</button>
    </form>
    </div>
    <form action="{{ route('createdm6') }}" method="POST" class="shadowe">
        <div class="row m-2">
            @csrf
            <input type="hidden" name="yil_id" id="" value="{{ $yil->id }}">
            <input type="hidden" name="oy_id" id="" value="{{ $oy->id }}">
            <input type="hidden" name="kun_id" id="" value="{{ $kun->id }}">
       
            <div class="col-6 mt-3">
                <label for="exampleFormControlInput1" class="form-label">Mijoz nomi</label>

                <input type="text" name="mijoz" class="form-control" placeholder="Mijoz nomi" value="{{ old('mijoz') }}">
                <span class="text-danger">@error('mijoz') {{$message}}@enderror</span>  
            </div>

            <div class="col-6 mt-3">
                <label for="exampleFormControlInput1" class="form-label">Telefon</label>

                <input type="number" name="tel" class="form-control" placeholder="Tel.. 99 123 45 67" value="{{ old('tel') }}">
                <span class="text-danger">@error('tel') {{$message}}@enderror</span>  
            </div >      
         
                <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3">
                    <button type="submit" class="btn btn-primary">Saqlash</button>
                </div>
          
        </div>       
        </form>
        <h3 style="text-align: center">Mijozni islash</h3>
            <form action="{{ route('search2') }}" method="GET" class="d-flex">
                @csrf       
                <input type="hidden" name="yil_id" id="" value="{{ $yil->id }}">
                <input type="hidden" name="oy_id" id="" value="{{ $oy->id }}">
                <input type="hidden" name="kun_id" id="" value="{{ $kun->id }}">
                <input type="hidden" name="id" id="" value="{{ $kun->id }}">
                <div class="col-5 m-2">
                    <input type="text" class="form-control" placeholder="Mijoz ismi" name="mijoz"  value="{{old('mijoz')}}">
                    <span class="text-danger">@error('mijoz') {{$message}}@enderror</span>
                </div>          
                <div class="col-5 m-2">
                    <input type="number" class="form-control" placeholder="Tel.." name="tel"  value="{{old('tel')}}">
                    <span class="text-danger">@error('tel') {{$message}}@enderror</span>
                </div>       
                <div class="col-1 m-2">
                        <button class="btn btn-primary " type="submit">Izlash</button>
                    </div>
            </form>
        <hr>

       <div class="row m-3">
        <table class="table">
            <thead>
                <th>N1</th>
                <th>Tovar nomi</th>
                <th>Tel..</th>
                <th>Yangilash</th>
                <th>O`chirish</th>
                <th>Malumotlar</th>
            </thead>
            @if (isset($a))
         
                <tbody>
                    <td>{{ $a->id }}</td>
                    <td>{{ $a->mijoz }}</td>          
                    <td>{{ $a->tel }}</td>
                    <td>
                        <a href="{{ route('jismoniyedit',$a->id) }}" class="btn btn-success">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                                <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
                            </svg>
                        </a>
                    </td>
                    <td>
                        <form method="POST" action="{{ route('jismoniydalet',$a->id)}}">
                            @csrf
                            <button type="submit" class="btn btn-danger">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"></path>
                                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"></path>
                                </svg>                                   
                              </button>                            
                        </form>                      
                    </td>
                    <td>
                        <form method="GET" action="{{ route('malumotlar2') }}">
                            @csrf
                            <input type="hidden" name="id" id="" value="{{ $a->id }}">
                            <input type="hidden" name="yil_id" id="" value="{{ $yil->id }}">
                            <input type="hidden" name="oy_id" id="" value="{{ $oy->id }}">
                            <input type="hidden" name="kun_id" id="" value="{{ $kun->id }}">
                            <button type="submit" class="btn btn-primary">
                                Malumotlar                                    
                            </button>                            
                        </form>                      
                    </td> 
                </tbody>
         
            @else
            @foreach ($items as $item)
            <tbody>
                <td>{{ (($items->currentpage()-1) * $items->perpage() + ($loop->index+1)) }}</td>
                <td>{{ $item->mijoz }}</td>          
                <td>{{ $item->tel }}</td>
                <td>
                    <a href="{{ route('jismoniyedit',$item->id) }}" class="btn btn-success">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                            <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
                        </svg>
                    </a>
                </td>
                <td>
                    <form method="POST" action="{{ route('jismoniydalet',$item->id)}}">
                        @csrf
                        <button type="submit" class="btn btn-danger">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"></path>
                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"></path>
                            </svg>                                   
                          </button>                            
                    </form>                      
                </td>
                <td>
                    <form method="GET" action="{{ route('malumotlar2') }}">
                        @csrf
                        <input type="hidden" name="id" id="" value="{{ $item->id }}">
                        <input type="hidden" name="yil_id" id="" value="{{ $yil->id }}">
                        <input type="hidden" name="oy_id" id="" value="{{ $oy->id }}">
                        <input type="hidden" name="kun_id" id="" value="{{ $kun->id }}">
                        <button type="submit" class="btn btn-primary">
                            Malumotlar                                    
                        </button>                            
                    </form>                      
                </td> 
            </tbody>
            @endforeach 
            @endif
        </table>
       </div>
@endsection

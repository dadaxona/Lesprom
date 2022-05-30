@extends('bugalter.dashbord')
@section('title','Kunlik bo`limi')
@section('control')
    
        <h1>Kunlik malumotlar to`plami</h1>
        
        <a href="{{ route('show',$date->yil->id) }}" class="btn btn-success">Xisob bolimi</a>
        <br>
        <form action="{{ route('store2') }}" method="POST">
            @csrf    
                <input type="hidden" name="yil_id" value="{{ $date->yil->id }}">
                <input type="hidden" name="oy_id" value="{{ $date->id }}">
       <div class="row m-1">
           <div class="col-6">
            <input type="date" name="data" class="form-control">
            <span class="text-danger">@error('data') {{$message}}@enderror</span>

           </div>
           <div class="col-6">
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
           
           <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3">
               <button type="submit" class="btn btn-success">Kititish</button>
            </div>
        </div>
        </form>
    <br>
        <table class="table table-dark table-hover">
            <thead>
                <th>N1</th>
                <th>Sana</th>
                <th>Hafta</th>
                <th>Xisob bolimi</th>
                <th>Yangilash</th>
            </thead>
            @foreach ($items as $item)
                <tbody>
                    <td><h4>{{ (($items->currentpage()-1) * $items->perpage() + ($loop->index+1)) }}</h4></td>
                    <td><h4>{{ $item->data }}</h4></td>                   
                    <td><h4>{{ $item->hafta }}</h4></td>
                    @if($item->data == $data1)
                    <td><a href="{{ route('index2',$item->id) }}" class="btn btn-success">Xisob bolimi</a></td>
                    <td>
                        <a href="{{ route('edit3',$item->id) }}" class="btn btn-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                            <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
                          </svg>
                        </a>
                    </td>
                    {{-- <td>
                        <form action="{{ route('index9') }}" method="GET">
                            @csrf
                            <input type="hidden" name="yil_id" value="{{ $date->yil_id }}">
                            <input type="hidden" name="oy_id" value="{{ $date->oy_id }}">
                            <input type="hidden" name="kun_id" value="{{ $date->id }}">
                            <button type="submit" class="btn btn-info">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bar-chart-line-fill" viewBox="0 0 16 16">
                                    <path d="M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1V2z"></path>
                                </svg>                           
                              </button>  
                        </form>
                    </td>   --}}
                    @else
                        <td><a class="btn btn-secondary">Xisob bolimi</a></td>
                    <td>
                        <a class="btn btn-secondary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                            <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
                          </svg>
                        </a>
                    </td>
                    {{-- <td>
                        <form action="{{ route('index9') }}" method="GET">
                            @csrf
                            <input type="hidden" name="yil_id" value="{{ $date->yil_id }}">
                            <input type="hidden" name="oy_id" value="{{ $date->oy_id }}">
                            <input type="hidden" name="kun_id" value="{{ $date->id }}">
                            <button type="submit" class="btn btn-info">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bar-chart-line-fill" viewBox="0 0 16 16">
                                    <path d="M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1V2z"></path>
                                </svg>                           
                              </button>  
                        </form>
                    </td>  --}}
                    @endif            

                    
                </tbody>
            @endforeach
           
        </table>
@endsection
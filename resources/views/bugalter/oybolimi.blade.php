@extends('bugalter.dashbord')
@section('title','Oy bo`limi')
@section('control')
    
        <h1>Oylik malumotlar to`plami</h1>
        <a href="/dashbord" class="btn btn-success">Xisob bolimi</a>
        <br>
        <form action="{{ route('create2') }}" method="POST" class="d-flex">
            @csrf    
                <input type="hidden" name="yil_id" value="{{ $date->id }}">        
                <select name="oy" class="form-control m-1">
                    <option value="">Oyni belgilang</option>
                    <option value="01">Yanvar</option>
                    <option value="02">Fevral</option>
                    <option value="03">Mart</option>
                    <option value="04">Aprel</option>
                    <option value="05">May</option>
                    <option value="06">Iyun</option>
                    <option value="07">Iyul</option>
                    <option value="08">Avgust</option>
                    <option value="09">Sentiabr</option>
                    <option value="10">Oktiabr</option>
                    <option value="11">Noyabr</option>
                    <option value="12">Dekabr</option>                         
                </select>
                <span class="text-danger">@error('oy') {{$message}}@enderror</span>      
            
            <div class="m-1">
            <button type="submit" class="btn btn-success">kiritish</button>
            </div>
        </form>    
    <br>
        <table class="table table-dark table-hover" id="wid">
            <thead>
                <th>N1</th>
                <th>Yil</th>
                <th>Oy</th>
                <th>Xisob bolimi</th>
                <th>Yangilash</th>              
                <th>Oylik statistika</th>                  
            </thead>
            @foreach ($items as $item)
                <tbody>
                    <td><h3>{{ (($items->currentpage()-1) * $items->perpage() + ($loop->index+1)) }}</h3></td>
                    <td><h3>{{ $item->yil->yil }}</h3></td>                   
                    <td><h3>{{ $item->oy }}</h3></td>                   
                   @if($item->oy == $month)
                        <td><a href="{{ route('show2',$item->id) }}" class="btn btn-success">Xisob bolimi</a></td>
                    <td>
                        <a href="{{ route('edit2',$item->id) }}" class="btn btn-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                            <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
                          </svg>
                        </a>
                    </td>
                    <td>
                        <form method="GET" action="{{ route('index18') }}">
                            @csrf
                            <input type="hidden" name="yil_id" value="{{ $date->id }}">
                            <input type="hidden" name="oy_id" value="{{ $item->id }}">                                                           
                            <button type="submit" class="btn btn-info">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bar-chart-line-fill" viewBox="0 0 16 16">
                                    <path d="M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1V2z"></path>
                                </svg>                           
                              </button>                                 
                            
                        </form>
                    </td>         
                   @else
                        <td><a class="btn btn-secondary">Xisob bolimi</a></td>
                    <td>
                        <a class="btn btn-secondary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                            <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
                          </svg>
                        </a>
                    </td>
                    <td>
                        <form method="GET" action="{{ route('index18') }}">
                            @csrf
                            <input type="hidden" name="yil_id" value="{{ $date->id }}">
                            <input type="hidden" name="oy_id" value="{{ $item->id }}">                                                           
                            <button type="submit" class="btn btn-info">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bar-chart-line-fill" viewBox="0 0 16 16">
                                    <path d="M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1V2z"></path>
                                </svg>                           
                              </button>                                 
                            
                        </form>
                    </td>         
                   @endif          
                </tbody>
            @endforeach
           
        </table>
@endsection
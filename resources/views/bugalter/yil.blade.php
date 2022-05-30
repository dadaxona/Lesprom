@extends('bugalter.dashbord')
@section('control')   

<h1>Yillik xisob bo`limi</h1>
    <form action="{{ route('create') }}" method="POST" class="d-flex">
        @csrf
                <div class="col-10 m-2">                  
                    <input type="text" class="form-control" placeholder="Yilni kiriting" name="yil"  value="{{old('yil')}}">
                    <span class="text-danger">@error('yil') {{$message}}@enderror</span>                
                </div>
            
                <div class="m-2">
                    <button class="btn btn-primary " type="submit">Yillik xisob yaratish</button>
                </div>
            </form>
            <br>    
            <table class="table table-dark table-hover" id="wid">
                <thead>
                    <th>N1</th>
                    <th>Yil</th>
                    <th></th>
                    <th>Xisob bolimi</th>
                    <th>Yangilash</th>              
                    <th>Yillik statistika</th>                  
                </thead>
                @foreach ($data as $item)
                    <tbody>
                        <td><h3>{{ (($data->currentpage()-1) * $data->perpage() + ($loop->index+1)) }}</h3></td>
                        <td><h3>{{ $item->yil }}</h3></td>
                        <td></td>
                        @if($item->yil == $year)
                            <td><a href="{{ route('show',$item->id) }}" class="btn btn-success">Xisob bolimi</a></td>
                        <td>
                            <a href="{{ route('edit',$item->id) }}" class="btn btn-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                                <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
                              </svg>
                            </a>
                        </td>
                       
                        <td>
                            <form method="GET" action="{{ route('index26') }}">
                                @csrf
                                <input type="hidden" name="yil_id" value="{{ $item->id }}">                                                            
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
                            <form method="GET" action="{{ route('index26') }}">
                                @csrf
                                <input type="hidden" name="yil_id" value="{{ $item->id }}">                                                            
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
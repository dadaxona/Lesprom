@extends('bugalter.dashbord')
@section('title','Ishchilar royhatga olish bo`limi')
@section('control')
    
    <h1 style="text-align: center">Ishchilar royhatga olish</h1>

    <form action="{{ route('store3') }}" method="POST">
        @csrf
        <div class="row m-1">
            <div class="col-3">
                <input type="text" name="name" class="form-control" placeholder="Ismni kiriting">
                <span class="text-danger">@error('name') {{$message}}@enderror</span>  
            </div>
            <div class="col-3">
                <input type="text" name="fam" class="form-control" placeholder="Familiyani kiriting">
                <span class="text-danger">@error('fam') {{$message}}@enderror</span>  
            </div>
            <div class="col-3">
                <input type="text" name="ochestvo" class="form-control" placeholder="Otasining ismi">
                <span class="text-danger">@error('ochestvo') {{$message}}@enderror</span>  
            </div>
           <div class="col-3">
            <button type="submit" class="btn btn-primary">Kelgan tavarlar</button>
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
            <th>Yangilash</th>
            <th>O`chirish</th>
            
        </thead>
        @foreach ($data as $item)
            <tbody>
                <td><h5>{{ (($data->currentpage()-1) * $data->perpage() + ($loop->index+1)) }}</h5></td>
                <td><h5>{{ $item->name }}</h5></td>
                <td><h5>{{ $item->fam }}</h5></td>
                <td><h5>{{ $item->ochestvo }}</h5></td>
                <td>
                    <a href="{{ route('edit4',$item->id) }}" class="btn btn-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                        <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
                      </svg>
                    </a>
                </td>
                <td>
                    <form method="POST" action="{{ route('delete2',$item->id)}}">
                        @csrf
                        <input type="hidden" name="yil_id" value="{{ $item->id }}">                                                            
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
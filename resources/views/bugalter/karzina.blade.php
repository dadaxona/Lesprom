@extends('bugalter.dashbord')
@section('title','Yuklarni nazorat qilish bo`limi')
@section('control')
<div class="row m-2">
    <form action="{{ route('tozalasha') }}" method="POST">
        @csrf
        <input type="hidden" name="del" value="0">
        <button type="submit" class="btn btn-danger mb-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"></path>
                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"></path>
            </svg>
            Tozalash
        </button>
    </form>
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
            <th>Tiklash</th>
        </thead>
        @foreach ($data as $item)
            <tbody>
                <td><h5>{{ (($data->currentpage()-1) * $data->perpage() + ($loop->index+1)) }}</h5></td>
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
                    <form method="POST" action="{{ route('tiklash2',$item->id)}}">
                        @csrf
                        <input type="hidden" name="yil_id" id="" value="{{ $item->yil_id }}">
                        <input type="hidden" name="oy_id" id="" value="{{ $item->oy_id }}">
                        <input type="hidden" name="kun_id" id="" value="{{ $item->kun_id }}">
                        <input type="hidden" name="ishchi_id" id="" value="{{ $item->ishchi_id }}">
                        <input type="hidden" name="tavarturi_id" id="" value="{{ $item->tavarturi_id }}">
                        <input type="hidden" name="data" id="" value="{{ $item->data }}">
                        <input type="hidden" name="hajm" id="" value="{{ $item->hajm }}">
                        <input type="hidden" name="summa" id="" value="{{ $item->summa }}">
                        <input type="hidden" name="jamisumma" id="" value="{{ $item->jamisumma }}">
                        <button type="submit" class="btn btn-success">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-up" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M8 10a.5.5 0 0 0 .5-.5V3.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 3.707V9.5a.5.5 0 0 0 .5.5zm-7 2.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5z"/>
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
    {{ $data->links() }}
   </div>
@endsection
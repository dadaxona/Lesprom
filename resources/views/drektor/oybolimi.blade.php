@extends('drektor.dashbord')
@section('title','Oy bo`limi')
@section('drektor')
    
       <div class="container">
        <h1 style="text-align: center;">Oylik malumotlar to`plami</h1>
        <a href="/glavninachal" class="btn btn-success">Orqaga</a>
        <br>
        
        <table class="table">
            <thead>
                <th>Yil</th>
                <th>Oy</th>           
                <th>Oylik statistika</th>                  
            </thead>
            @foreach ($items as $item)
                <tbody>
                    <td>{{ $item->yil->yil }}</td>
                    <td>{{ $item->oy }}</td>
                 
                    <td>
                        <form method="GET" action="{{ route('index18drektor') }}">
                            @csrf
                            <input type="hidden" name="yil_id" value="{{ $date->id }}">
                            <input type="hidden" name="oy_id" value="{{ $item->id }}">                                                           
                            <button type="submit" class="btn btn-info">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-bar-chart-line-fill" viewBox="0 0 16 16">
                                    <path d="M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1V2z"></path>
                                </svg>                           
                              </button>                                 
                            
                        </form>
                    </td>                   
                </tbody>
            @endforeach
           
        </table>
       </div>
    @endsection
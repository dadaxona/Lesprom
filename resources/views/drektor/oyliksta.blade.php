@extends('drektor.dashbord')
@section('title','Kirgan tavarlar malumotlari')
@section('drektor')
<div class="row">
    <h1>Oylik kelgan tavarlar</h1>
 
        <form action="{{ route('index18drektor') }}" method="GET" class="mb-3">
            <input type="hidden" name="yil_id" id="" value="{{ $data->yil_id }}">
            <input type="hidden" name="oy_id" id="" value="{{ $data->oy_id }}">
            <button type="submit" class="btn btn-info">Orqaga</button>
        </form>

    <table class="table">
        <thead>
            <th>Oy</th>
            <th>Tovar nomi</th>      
            <th>Tovar hajmi</th>
            <th>Summa</th>                
        </thead>
        @foreach ($date as $item)
            <tbody>
                <td>{{ $item->oy->oy }}</td>
                <td>{{ $item->tavar->tavar }}</td>
                <td>{{ $item->hajm }}</td>
                <td>{{ $item->summa }}</td>                                     
            </tbody>
        @endforeach           
    </table>
   </div>
@endsection
@extends('drektor.dashbord')
@section('title','Yillik tavarlar malumotlari')
@section('drektor')
<div class="row">
    <h1>Yillik kelgan tavarlar</h1>
 
        <form action="{{ route('index26drektor') }}" method="GET" class="mb-3">
            <input type="hidden" name="yil_id" id="" value="{{ $data->yil_id }}">
            <button type="submit" class="btn btn-info">Orqaga</button>
        </form>

    <table class="table">
        <thead>
            <th>Yil</th>
            <th>Tovar nomi</th>      
            <th>Tovar hajmi</th>
            <th>Summa</th>                
        </thead>
        @foreach ($date as $item)
            <tbody>
                <td>{{ $item->yil->yil }}</td>
                <td>{{ $item->tavar->tavar }}</td>
                <td>{{ $item->hajm }}</td>
                <td>{{ $item->summa }}</td>                                     
            </tbody>
        @endforeach           
    </table>
    {{ $date->links() }}
   </div>
@endsection
@extends('drektor.dashbord')
@section('title','Oylik ishlab chiqarilgan tavar')
@section('drektor')
<div class="">
    <h1>Oylik ishlab chiqarilgan tavarlar</h1>
 
        <form action="{{ route('index18drektor') }}" method="GET" class="mb-3">
            <input type="hidden" name="yil_id" id="" value="{{ $data->yil_id }}">
            <input type="hidden" name="oy_id" id="" value="{{ $data->oy_id }}">           
            <button type="submit" class="btn btn-info">Orqaga</button>
        </form>
        <div class="col-12 scrolll">
    <table class="table rty">
        <thead>
            <th>Oy</th>
            <th>Tovar nomi</th>      
            <th>Tovar hajmi</th>
            <th>Summa</th>
            <th>Jami summa</th>
        </thead>
        @foreach ($date as $item)
            <tbody>
                <td>{{ $item->oy->oy }}</td>
                <td>{{ $item->tavarturi->tavarturi }}</td>
                <td>{{ $item->hajm }}</td>
                <td>{{ $item->summa }}</td>                                     
                <td>{{ $item->umumiy }}</td>                                     
            </tbody>
        @endforeach           
    </table>
   </div>
</div>
@endsection
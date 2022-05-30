@extends('drektor.dashbord')
@section('title','Oylik yuk ortuvchilarning jami malumotlari')
@section('drektor')
<div class="row">
    <h1>Oylik yuk ortuvchilarning jami malumotlari</h1>
 
        <form action="{{ route('index18drektor') }}" method="GET" class="mb-3">
            <input type="hidden" name="yil_id" id="" value="{{ $data->yil_id }}">
            <input type="hidden" name="oy_id" id="" value="{{ $data->oy_id }}">    
            <button type="submit" class="btn btn-info">Orqaga</button>
        </form>

        <div class="col-12 scrolll2">
            <table class="table rty2">
        <thead>
            <th>Oy</th>
            <th>Ishchi nomi</th>
            <th>Ishchi familiyasi</th>
            <th>Ishchi O`chestvo</th>
            <th>Hajm</th>
            <th>Summa</th>
            <th>Umumiy summa</th>                
        </thead>
        @foreach ($date as $item)
            <tbody>
                <td>{{ $item->oy->oy}}</td>
                <td>{{ $item->ishchi->name}}</td>
                <td>{{ $item->ishchi->fam}}</td>
                <td>{{ $item->ishchi->ochestvo}}</td>
                <td>{{ $item->hajm}}</td>
                <td>{{ $item->summa}}</td>
                <td>{{ $item->jamisumma}}</td>
            </tbody>
        @endforeach           
    </table>
   </div>
</div>
@endsection
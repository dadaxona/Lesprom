@extends('drektor.dashbord')
@section('title','Ishchilarning maoshining kunlik statistika')
@section('drektor')
<div class="row">
    <h1>Ishchilarning maoshining kunlik statistika</h1> 
        <form action="{{ route('index18drektor') }}" method="GET" class="mb-3">
            <input type="hidden" name="yil_id" id="" value="{{ $data->yil_id }}">
            <input type="hidden" name="oy_id" id="" value="{{ $data->oy_id }}">
            <input type="hidden" name="kun_id" id="" value="{{ $data->oy->kun->id }}">
            <button type="submit" class="btn btn-info">Orqaga</button>
        </form>
        
        <div class="col-12 scrolll2">
            <table class="table rty2">
        <thead>
            <th>Oy</th>
            <th>Ism</th>      
            <th>Familiya</th>
            <th>Otasining ismi</th>                
            <th>Ortilgan yuk summai</th>                
            <th>Oyligi</th>                
            <th>Umumiy oyligi</th>
        </thead>
        @foreach ($date as $item)
            <tbody>
                <td>{{ $item->oy->oy}}</td>
                <td>{{ $item->ishchi->name}}</td>
                <td>{{ $item->ishchi->fam}}</td>
                <td>{{ $item->ishchi->ochestvo}}</td>
                <td>{{ $item->yuk}}</td>
                <td>{{ $item->summa }}</td>
                <td>{{ $item->jamisumma }}</td>                                     
            </tbody>
        @endforeach           
    </table>
   </div>
</div>
@endsection
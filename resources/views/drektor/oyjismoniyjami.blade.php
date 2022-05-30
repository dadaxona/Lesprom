@extends('drektor.dashbord')
@section('title','Jismoniy shaxslarning oylik statistikasi')
@section('drektor')
<div class="row">
    <h1>Jismoniy shaxslarning oylik statistikasi</h1>
 
        <form action="{{ route('index18drektor') }}" method="GET" class="mb-3">
            <input type="hidden" name="yil_id" id="" value="{{ $data->yil_id }}">
            <input type="hidden" name="oy_id" id="" value="{{ $data->oy_id }}">          
            <button type="submit" class="btn btn-info">Orqaga</button>
        </form>
        <div class="col-12 scrolll">
            <table class="table rty">
        <thead>
            <th>Oy</th>
            <th>Tushum summa</th>      
            <th>Qarz summa</th>
            <th>Umumiy summa</th>
        </thead>
        @foreach ($date as $item)
            <tbody>
                <td>{{ $item->oy->oy}}</td>             
                <td>{{ $item->jamisumma}}</td>             
                <td>{{ $item->karzsumma }}</td>
                <td>{{ $item->umumiy }}</td>                                     
            </tbody>
        @endforeach           
    </table>
   </div>
</div>
@endsection
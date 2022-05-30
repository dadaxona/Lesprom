@extends('drektor.dashbord')
@section('title','Yuridik shaxslarning yillik statistikasi')
@section('drektor')
<div class="row">
    <h1>Yuridik shaxslarning yillik statistikasi</h1>
 
    <form action="{{ route('index26drektor') }}" method="GET" class="mb-3">
        <input type="hidden" name="yil_id" id="" value="{{ $data->yil_id }}">          
        <button type="submit" class="btn btn-info">Orqaga</button>
    </form>
        
    <div class="col-12 scrolll">
        <table class="table rty">
        <thead>
            <th>Yil</th>
            <th>Tushum summa</th>
            <th>Qarz summa</th>
            <th>Umumiy summa</th>
        </thead>
        @foreach ($date as $item)
            <tbody>
                <td>{{ $item->yil->yil}}</td>
                <td>{{ $item->jamisumma}}</td>
                <td>{{ $item->karzsumma }}</td>
                <td>{{ $item->umumiy }}</td>                                     
            </tbody>
        @endforeach           
    </table>
   </div>
</div>
@endsection
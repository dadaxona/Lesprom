@extends('drektor.dashbord')
@section('title','Yillik ishlab chiqarilgan tavar')
@section('drektor')
<div class="row">
    <h1>Omborda qolgan tavarlar malumoti</h1>
 
        <form action="{{ route('index26drektor') }}" method="GET" class="mb-3">
            <input type="hidden" name="yil_id" id="" value="{{ $data->yil_id }}">    
            <button type="submit" class="btn btn-info">Orqaga</button>
        </form>
         
    <div class="col-12 scrolll">
        <table class="table rty">
        <thead>
            <th>Tovar nomi</th>
            <th>Tovar hajmi</th>
            <th>Summa</th>
        </thead>
        @foreach ($dataa as $ite)
            <tbody>    
                <td>{{ $ite->tavar->tavar }}</td>             
                <td>{{ $ite->hajm }}</td>
                <td>{{ $ite->summa }}</td>
            </tbody>
        @endforeach           
    </table>
   </div>
        </div>
@endsection

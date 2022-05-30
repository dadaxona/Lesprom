@extends('bugalter.dashbord')
@section('title','Yillik ishlab chiqarilgan tavar')
@section('control')
<div class="row m-3"> 
      <h1>Omborda qolgan tavarlar</h1>
        <form action="{{ route('index26') }}" method="GET" class="mb-3">
            <input type="hidden" name="yil_id" id="" value="{{ $data->yil_id }}">    
            <button type="submit" class="btn btn-info">Orqaga</button>
        </form>

  
    <table class="table table-dark table-hover">
        <thead>
            <th>Tovar nomi</th>      
            <th>Tovar hajmi</th>
            <th>Summa</th>
        </thead>
        @foreach ($dataa as $ite)
            <tbody>
                <td><h5>{{ $ite->tavar->tavar }}</h5></td>
                <td><h5>{{ $ite->hajm }}</h5></td>
                <td><h5>{{ $ite->summa }}</h5></td>
            </tbody>
        @endforeach           
    </table>
   </div>
@endsection

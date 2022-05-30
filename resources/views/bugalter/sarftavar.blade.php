@extends('bugalter.dashbord')
@section('title','Kunlik sariflangan tavarlar statistikasi')
@section('control')
<div class="row m-3">
    <h1>Kunlik xarajarlar</h1>
        <form action="{{ route('index9') }}" method="GET" class="mb-3">
            <input type="hidden" name="yil_id" id="" value="{{ $data->yil_id }}">
            <input type="hidden" name="oy_id" id="" value="{{ $data->oy_id }}">
            <input type="hidden" name="kun_id" id="" value="{{ $data->kun_id }}">
            <button type="submit" class="btn btn-info">Orqaga</button>
        </form>

        <div class="col-12">
            <div class="row">
                   
                   <table class="table table-dark table-hover">
                    <thead>
                        <th>N1</th>
                        <th>Elector</th>
                        <th>Gaz</th>
                        <th>Suv</th>
                        <th>Pitaniya</th>
                        <th>Automobil</th>
                        <th>Bilmadim</th>
                        <th>Korinmagan</th>
                        <th>Kozda tutilmagan</th>
                        <th>Sana</th>
                        <th>Jamisumma</th>
                    </thead>
                    @foreach ($date as $item)
                        <tbody>
                            <td><h5>{{ (($date->currentpage()-1) * $date->perpage() + ($loop->index+1)) }}</h5></td>
                            <td><h5>{{ $item->elektor }}</h5></td>
                            <td><h5>{{ $item->gaz }}</h5></td>
                            <td><h5>{{ $item->suv }}</h5></td>
                            <td><h5>{{ $item->pitaniya }}</h5></td>
                            <td><h5>{{ $item->avto }}</h5></td>
                            <td><h5>{{ $item->bux }}</h5></td>
                            <td><h5>{{ $item->korinmi }}</h5></td>
                            <td><h5>{{ $item->tutilmagan }}</h5></td>
                            <td><h5>{{ $item->data }}</h5></td>
                            <td><h5>{{ $item->jamisumma }}</h5></td>
                        </tbody>
                    @endforeach           
                </table>
                </div>
        </div> 
   </div>
@endsection
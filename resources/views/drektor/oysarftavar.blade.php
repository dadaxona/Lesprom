@extends('drektor.dashbord')
@section('title','Oylik sariflangan tavarlar statistikasi')
@section('drektor')
<div class="row">
    <h1>Oylik sariflangan tavarlar statistikasi</h1>
 
        <form action="{{ route('index18drektor') }}" method="GET" class="mb-3">
            <input type="hidden" name="yil_id" id="" value="{{ $data->yil_id }}">
            <input type="hidden" name="oy_id" id="" value="{{ $data->oy_id }}">      
            <button type="submit" class="btn btn-info">Orqaga</button>
        </form>
        <div class="col-12 scrolll">
            <table class="table rty">
                            <thead>
                                <th>Oy</th>
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
                                    <td>{{ $item->oy->oy }}</td>
                                    <td>{{ $item->elektor }}</td>
                                    <td>{{ $item->gaz }}</td>
                                    <td>{{ $item->suv }}</td>
                                    <td>{{ $item->pitaniya }}</td>
                                    <td>{{ $item->avto }}</td>
                                    <td>{{ $item->bux }}</td>
                                    <td>{{ $item->korinmi }}</td>
                                    <td>{{ $item->tutilmagan }}</td>
                                    <td>{{ $item->data }}</td>
                                    <td>{{ $item->jamisumma }}</td>
                                </tbody>
                            @endforeach           
                        </table>
                        </div>
                </div>
@endsection
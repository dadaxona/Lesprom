@extends('drektor.dashbord')
@section('title','Yillik sariflangan tavarlar statistikasi')
@section('drektor')
    <h1>Yillik sariflangan tavarlar statistikasi</h1>
 
        <form action="{{ route('index26drektor') }}" method="GET" class="mb-3">
            <input type="hidden" name="yil_id" id="" value="{{ $data->yil_id }}"> 
            <button type="submit" class="btn btn-info">Orqaga</button>
        </form>
        <div class="col-12 scrolll">
            <table class="table rty">
                    <thead>
                        <th>Yil</th>
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
                            <td>{{ $item->yil->yil }}</td>
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
@endsection
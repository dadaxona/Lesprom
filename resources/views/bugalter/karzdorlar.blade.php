@extends('bugalter.dashbord')
@section('title','Karzdorlar ro`yhati')
@section('control')
<div class="row m-3">
    <h1>Karzdorlar ro`yhati</h1>
    <div class="row col-1">
        <a href="/dashbord" class="btn btn-primary">Orqaga</a>
    </div>
       <br>
        <h1>Yuridik shaxslarning qarzlar royhati</h1>
    <table class="table table-dark table-hover">
        <thead>   
            <th>Tovar nomi</th>      
            <th>Sana</th>
            <th>Kampaniya</th>
            <th>Raxbar ismi</th>
            <th>INN</th>
            <th>Tavar hajmi</th>
            <th>Summa</th>
            <th>Naqt pulda</th>
            <th>Plastik orqali</th>
            <th>Bank orqali</th>
            <th>Karz summa</th>
            <th>Muddat</th>
            <th>Telefon</th>
            <th>To`lov qilish</th>
        </thead>
        @foreach ($yuridik as $item)
            <tbody>
                <td><h5>{{ $item->tavar->tavar }}</h5></td>
                <td><h5>{{ $item->data }}</h5></td>
                <td><h5>{{ $item->kampaniya }}</h5></td>
                <td><h5>{{ $item->raxbar }}</h5></td>
                <td><h5>{{ $item->inn }}</h5></td>
                <td><h5>{{ $item->kub }}</h5></td>
                <td><h5>{{ $item->summa }}</h5></td>
                <td><h5>{{ $item->naqt }}</h5></td>
                <td><h5>{{ $item->kartq }}</h5></td>
                <td><h5>{{ $item->bank }}</h5></td>
                <td><h5>{{ $item->karzsumma }}</h5></td>
                <td><h5>{{ $item->sroc }}</h5></td>
                <td><h5>{{ $item->tel }}</h5></td>
                <td>
                    <form action="{{ route('index33') }}" method="GET">
                        <input type="hidden" name="yil_id" id="" value="{{ $item->yil_id }}">
                        <input type="hidden" name="oy_id" id="" value="{{ $item->oy_id }}">
                        <input type="hidden" name="kun_id" id="" value="{{ $item->kun_id }}">
                        <input type="hidden" name="id" id="" value="{{ $item->id }}">
                        <input type="hidden" name="karzsumma" id="" value="{{ $item->karzsumma }}">
                        <button type="submit" class="btn btn-primary">
                            To`lov
                        </button>
                    </form>
                </td>
            </tbody>
        @endforeach           
    </table>

    <h1>Jismoniy shaxslarning qarzlar royhati</h1>
    <table class="table table-dark table-hover">
        <thead>   
            <th>Tovar nomi</th>      
            <th>Sana</th>     
            <th>Mijoz ismi</th>    
            <th>Tavar hajmi</th>
            <th>Summa</th>
            <th>Naqt pulda</th>
            <th>Plastik orqali</th>
            <th>Bank orqali</th>
            <th>Karz summa</th>
            <th>Muddat</th>
            <th>Telefon</th>
            <th>To`lov qilish</th>
        </thead>
        @foreach ($jismoniy as $item)
            <tbody>
                <td><h5>{{ $item->tavar->tavar }}</h5></td>
                <td><h5>{{ $item->data }}</h5></td>            
                <td><h5>{{ $item->mijoz }}</h5></td>
                <td><h5>{{ $item->kub }}</h5></td>
                <td><h5>{{ $item->summa }}</h5></td>
                <td><h5>{{ $item->naqt }}</h5></td>
                <td><h5>{{ $item->kartq }}</h5></td>
                <td><h5>{{ $item->bank }}</h5></td>
                <td><h5>{{ $item->karzsumma }}</h5></td>
                <td><h5>{{ $item->sroc }}</h5></td>
                <td><h5>{{ $item->tel }}</h5></td>
                <td>
                    <form action="{{ route('index34') }}" method="GET">
                        <input type="hidden" name="yil_id" id="" value="{{ $item->yil_id }}">
                        <input type="hidden" name="oy_id" id="" value="{{ $item->oy_id }}">
                        <input type="hidden" name="kun_id" id="" value="{{ $item->kun_id }}">
                        <input type="hidden" name="id" id="" value="{{ $item->id }}">
                        <input type="hidden" name="karzsumma" id="" value="{{ $item->karzsumma }}">
                        <button type="submit" class="btn btn-primary">
                            To`lov
                        </button>
                    </form>
                </td>
            </tbody>
        @endforeach           
    </table>

   </div>
@endsection
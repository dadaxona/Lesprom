@extends('bugalter.dashbord')
@section('title','Oylik Statistika')
@section('control')
    
    <h1 style="text-align: center">Oylik statistika malumotlari</h1>
    <div class="row m-2">
        <form action="{{ route('show',$date->yil_id) }}" method="GET">
            <input type="hidden" name="yil_id" id="" value="{{ $date->yil_id }}">
            <input type="hidden" name="oy_id" id="" value="{{ $date->id }}">
            <button type="submit" class="btn btn-info">Orqaga</button>
        </form>
        </div>
<div class="row m-2">
    <div class="col-3">
    <form action="{{ route('index19') }}" method="GET">
        @csrf
        <input type="hidden" name="yil_id" value="{{ $date->yil_id }}">
        <input type="hidden" name="oy_id" value="{{ $date->id }}">
        <button type="submit" class="btn btn-success" id="button">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-arrow-bar-down" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 3.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5zM8 6a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 0 1 .708-.708L7.5 12.293V6.5A.5.5 0 0 1 8 6z"/>
              </svg>
            Oylik kirip kelgan tavarlar</button>
    </form>
    </div>  

    <div class="col-3">
        <form action="{{ route('index21') }}" method="GET">
            @csrf
            <input type="hidden" name="yil_id" value="{{ $date->yil_id }}">
            <input type="hidden" name="oy_id" value="{{ $date->id }}">

            <button type="submit" class="btn btn-primary" id="button">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                  </svg>
                Yuridik shaxisga sotilgan oylik hisobotlar</button>
        </form>
      </div>

      
        <div class="col-3">
            <form action="{{ route('index22') }}" method="GET">
                @csrf
                <input type="hidden" name="yil_id" value="{{ $date->yil_id }}">
                <input type="hidden" name="oy_id" value="{{ $date->id }}">
    
                <button type="submit" class="btn btn-success" id="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                      </svg>
                    Jismoniy shaxsga sotilgan oylik hisobotlar</button>
            </form>
        </div>

        <div class="col-3">
            <form action="{{ route('index23') }}" method="GET">
                @csrf
                <input type="hidden" name="yil_id" value="{{ $date->yil_id }}">
                <input type="hidden" name="oy_id" value="{{ $date->id }}">
    
                <button type="submit" class="btn btn-info" id="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-basket-fill" viewBox="0 0 16 16">
                        <path d="M5.071 1.243a.5.5 0 0 1 .858.514L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15.5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v5a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 6h1.717L5.07 1.243zM3.5 10.5a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3z"/>
                      </svg>
                    Oylik xarajatlar
                </button>
            </form>
        </div>
    </div>
</div>
    
@endsection
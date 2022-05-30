@extends('drektor.dashbord')
@section('title','Oylik Statistika')
@section('drektor')
    
    <h1 style="text-align: center;">Oylik statistika malumotlari</h1>
    <div class="row m-2">
        <form action="{{ route('showoydrektor',$date->yil_id) }}" method="GET">
            <input type="hidden" name="yil_id" id="" value="{{ $date->yil_id }}">
            <input type="hidden" name="oy_id" id="" value="{{ $date->id }}">
            <button type="submit" class="btn btn-info">Orqaga</button>
        </form>
        </div>
<div class="row m-2">
    <div class="col-12 mt-3">
    <form action="{{ route('index19drektor') }}" method="GET">
        @csrf
        <input type="hidden" name="yil_id" value="{{ $date->yil_id }}">
        <input type="hidden" name="oy_id" value="{{ $date->id }}">
        <button type="submit" class="btn btn-success" id="button">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-bar-down" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 3.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5zM8 6a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 0 1 .708-.708L7.5 12.293V6.5A.5.5 0 0 1 8 6z"/>
              </svg>
            Oylik kirip kelgan tavarlar</button>
    </form>
    </div> 

    <div class="col-12 mt-3">
        <form action="{{ route('index21drektor') }}" method="GET">
            @csrf
            <input type="hidden" name="yil_id" value="{{ $date->yil_id }}">
            <input type="hidden" name="oy_id" value="{{ $date->id }}">

            <button type="submit" class="btn btn-primary" id="button">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                  </svg>
                Yuridik shaxisga sotilgan oylik hisobotlar</button>
        </form>
      </div>

      
        <div class="col-12 mt-3">
            <form action="{{ route('index22drektor') }}" method="GET">
                @csrf
                <input type="hidden" name="yil_id" value="{{ $date->yil_id }}">
                <input type="hidden" name="oy_id" value="{{ $date->id }}">
    
                <button type="submit" class="btn btn-success" id="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                      </svg>
                    Jismoniy shaxsga sotilgan oylik hisobotlar</button>
            </form>
        </div>

        <div class="col-12 mt-3">
            <form action="{{ route('index23drektor') }}" method="GET">
                @csrf
                <input type="hidden" name="yil_id" value="{{ $date->yil_id }}">
                <input type="hidden" name="oy_id" value="{{ $date->id }}">
    
                <button type="submit" class="btn btn-info" id="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-bar-up" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 10a.5.5 0 0 0 .5-.5V3.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 3.707V9.5a.5.5 0 0 0 .5.5zm-7 2.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5z"/>
                      </svg>
                    Oylik xarajatlar</button>
            </form>
        </div>
    </div>
</div>
    
@endsection
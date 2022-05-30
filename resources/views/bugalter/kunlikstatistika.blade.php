@extends('bugalter.dashbord')
@section('title','Kunlik Statistika')
@section('control')
    
    <h1 style="text-align: center">Kunlik statistika malumotlari</h1>
    <div class="row m-2">
        <form action="{{ route('show2', $date->id) }}" method="GET">
            <input type="hidden" name="yil_id" id="" value="{{ $date->yil_id }}">
            <input type="hidden" name="oy_id" id="" value="{{ $date->oy_id }}">
            <input type="hidden" name="kun_id" id="" value="{{ $date->id }}">
            <button type="submit" class="btn btn-info">Orqaga</button>
        </form>
        </div>
<div class="row m-2">
    <div class="col-3">
    <form action="{{ route('index11') }}" method="GET">
        @csrf
        <input type="hidden" name="yil_id" value="{{ $date->yil_id }}">
        <input type="hidden" name="oy_id" value="{{ $date->oy_id }}">
        <input type="hidden" name="id" value="{{ $date->id }}">
        <button type="submit" class="btn btn-success" id="button">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-arrow-bar-down" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 3.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5zM8 6a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 0 1 .708-.708L7.5 12.293V6.5A.5.5 0 0 1 8 6z"/>
              </svg>
            Kunlik kirip kelgan tavarlar</button>
    </form>
    </div>

    <div class="col-3">
        <form action="{{ route('index12') }}" method="GET">
            @csrf
            <input type="hidden" name="yil_id" value="{{ $date->yil_id }}">
            <input type="hidden" name="oy_id" value="{{ $date->oy_id }}">
            <input type="hidden" name="id" value="{{ $date->id }}">
            <button type="submit" class="btn btn-info" id="button">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-layers-half" viewBox="0 0 16 16">
                    <path d="M8.235 1.559a.5.5 0 0 0-.47 0l-7.5 4a.5.5 0 0 0 0 .882L3.188 8 .264 9.559a.5.5 0 0 0 0 .882l7.5 4a.5.5 0 0 0 .47 0l7.5-4a.5.5 0 0 0 0-.882L12.813 8l2.922-1.559a.5.5 0 0 0 0-.882l-7.5-4zM8 9.433 1.562 6 8 2.567 14.438 6 8 9.433z"/>
                  </svg>
                Kunlik ishlab chiqarilgan tavarlar</button>
        </form>
      </div>
  

    <div class="col-3">
        <form action="{{ route('index13') }}" method="GET">
            @csrf
            <input type="hidden" name="yil_id" value="{{ $date->yil_id }}">
            <input type="hidden" name="oy_id" value="{{ $date->oy_id }}">
            <input type="hidden" name="id" value="{{ $date->id }}">
            <button type="submit" class="btn btn-primary" id="button">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                  </svg>
                Yuridik shaxisga sotilgan kunlik hisobotlar</button>
        </form>
      </div>

      
        <div class="col-3">
            <form action="{{ route('index14') }}" method="GET">
                @csrf
                <input type="hidden" name="yil_id" value="{{ $date->yil_id }}">
                <input type="hidden" name="oy_id" value="{{ $date->oy_id }}">
                <input type="hidden" name="id" value="{{ $date->id }}">
                <button type="submit" class="btn btn-success" id="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                      </svg>
                    Jismoniy shaxsga sotilgan kunlik hisobotlar</button>
            </form>
        </div>

        <div class="col-4">
            <form action="{{ route('index15') }}" method="GET">
                @csrf
                <input type="hidden" name="yil_id" value="{{ $date->yil_id }}">
                <input type="hidden" name="oy_id" value="{{ $date->oy_id }}">
                <input type="hidden" name="id" value="{{ $date->id }}">
                <button type="submit" class="btn btn-info" id="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-arrow-bar-up" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 10a.5.5 0 0 0 .5-.5V3.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 3.707V9.5a.5.5 0 0 0 .5.5zm-7 2.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5z"/>
                      </svg>
                    Kunlik xarajatlar</button>
            </form>
        </div>

        <div class="col-4">
            <form action="{{ route('index16') }}" method="GET">
                @csrf
                <input type="hidden" name="yil_id" value="{{ $date->yil_id }}">
                <input type="hidden" name="oy_id" value="{{ $date->oy_id }}">
                <input type="hidden" name="id" value="{{ $date->id }}">
                <button type="submit" class="btn btn-primary" id="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-basket-fill" viewBox="0 0 16 16">
                        <path d="M5.071 1.243a.5.5 0 0 1 .858.514L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15.5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v5a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 6h1.717L5.07 1.243zM3.5 10.5a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3z"/>
                      </svg>
                    Yuk ortuvchilarning kunlik makumotlari</button>
            </form>
        </div>

        <div class="col-4">
            <form action="{{ route('index17') }}" method="GET">
                @csrf
                <input type="hidden" name="yil_id" value="{{ $date->yil_id }}">
                <input type="hidden" name="oy_id" value="{{ $date->oy_id }}">
                <input type="hidden" name="id" value="{{ $date->id }}">
                <button type="submit" class="btn btn-success" id="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z"/>
                        <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z"/>
                        <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z"/>
                        <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z"/>
                      </svg>
                    Ishchilar oyligining kunlik holati</button>
            </form>
        </div>    
    </div>
</div>
    
@endsection
@extends('bugalter.dashbord')
@section('title','Kunlik bo`limi')
@section('control')
    
    <h1 style="text-align: center">Umumiy boshqaruv tizim</h1>
    <div class="row m-2">
        <form action="{{ route('show2', $date->yil_id) }}" method="GET">
            <input type="hidden" name="yil_id" id="" value="{{ $date->yil_id }}">
            <input type="hidden" name="oy_id" id="" value="{{ $date->oy_id }}">
            <input type="hidden" name="kun_id" id="" value="{{ $date->id }}">
            <input type="hidden" name="id" id="" value="{{ $date->id }}">
            <button type="submit" class="btn btn-info">Orqaga</button>
        </form>
        </div>
<div class="row m-2 shadowe">
    <div class="col-4">
    <form action="{{ route('index3') }}" method="GET">
        @csrf
        <input type="hidden" name="yil_id" value="{{ $date->yil_id }}">
        <input type="hidden" name="oy_id" value="{{ $date->oy_id }}">
        <input type="hidden" name="id" value="{{ $date->id }}">
        <button type="submit" id="button" tool-tip="NEW">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-arrow-bar-down" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 3.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5zM8 6a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 0 1 .708-.708L7.5 12.293V6.5A.5.5 0 0 1 8 6z"/>
              </svg>
            Kirip kelgan tavarlar</button>
    </form>
    </div>

    <div class="col-4">
        <form action="{{ route('index5') }}" method="GET">
            @csrf
            <input type="hidden" name="yil_id" value="{{ $date->yil_id }}">
            <input type="hidden" name="oy_id" value="{{ $date->oy_id }}">
            <input type="hidden" name="id" value="{{ $date->id }}">
            <button type="submit" id="button" tool-tip="NEW">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                  </svg>
                Yuridik shaxisga sotish </button>
        </form>
      </div>

      
        <div class="col-4">
            <form action="{{ route('index6') }}" method="GET">
                @csrf
                <input type="hidden" name="yil_id" value="{{ $date->yil_id }}">
                <input type="hidden" name="oy_id" value="{{ $date->oy_id }}">
                <input type="hidden" name="id" value="{{ $date->id }}">
                <button type="submit" id="button" tool-tip="NEW">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                      </svg>
                    Jismoniy shaxsga sotish</button>
            </form>
        </div>

        <div class="col-4">
            <form action="{{ route('index7') }}" method="GET">
                @csrf
                <input type="hidden" name="yil_id" value="{{ $date->yil_id }}">
                <input type="hidden" name="oy_id" value="{{ $date->oy_id }}">
                <input type="hidden" name="id" value="{{ $date->id }}">
                <button type="submit" id="button" tool-tip="NEW">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-arrow-bar-up" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 10a.5.5 0 0 0 .5-.5V3.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 3.707V9.5a.5.5 0 0 0 .5.5zm-7 2.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5z"/>
                      </svg>
                    Kunlik va Oylik xarajatlar</button>
            </form>
        </div>

    <div class="col-4">
        <form action="{{ route('index4') }}" method="GET">
            @csrf
            <input type="hidden" name="yil_id" value="{{ $date->yil_id }}">
            <input type="hidden" name="oy_id" value="{{ $date->oy_id }}">
            <input type="hidden" name="id" value="{{ $date->id }}">
            <button type="submit" id="button" tool-tip="NEW">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z"/>
                        <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z"/>
                        <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z"/>
                        <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z"/>
                      </svg>
                Qassaga chiqarilgan summa</button>
        </form>
      </div>


 
        <div class="col-4">
            <form action="{{ route('index8') }}" method="GET">
                @csrf
                <input type="hidden" name="yil_id" value="{{ $date->yil_id }}">
                <input type="hidden" name="oy_id" value="{{ $date->oy_id }}">
                <input type="hidden" name="id" value="{{ $date->id }}">
                <button type="submit"  id="button" tool-tip="NEW">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-bank" viewBox="0 0 16 16">
                        <path d="M8 .95 14.61 4h.89a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v7a.5.5 0 0 1 .485.379l.5 2A.5.5 0 0 1 15.5 17H.5a.5.5 0 0 1-.485-.621l.5-2A.5.5 0 0 1 1 14V7H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 4h.89L8 .95zM3.776 4h8.447L8 2.05 3.776 4zM2 7v7h1V7H2zm2 0v7h2.5V7H4zm3.5 0v7h1V7h-1zm2 0v7H12V7H9.5zM13 7v7h1V7h-1zm2-1V5H1v1h14zm-.39 9H1.39l-.25 1h13.72l-.25-1z"/>
                    </svg>
                    Bank schot holati
                    </button>
            </form>
        </div>
</div>
    @yield('tizim')
    
@endsection
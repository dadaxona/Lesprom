@extends('bugalter.dashbord')
@section('title','Yillik Statistika')
@section('control')
    
    <h1 style="text-align: center">Yillik statistika malumotlari</h1>
  
    <div class="row m-2">
        <div class="col-1">
            <a href="/dashbord" class="btn btn-success">Orqaga</a>
        </div>

    </div>

<div class="row m-2">
    <div class="col-3">
    <form action="{{ route('index27') }}" method="GET">
        @csrf
        <input type="hidden" name="yil_id" value="{{ $date->id }}">
        <button type="submit"  id="button">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-arrow-bar-down" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 3.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5zM8 6a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 0 1 .708-.708L7.5 12.293V6.5A.5.5 0 0 1 8 6z"/>
              </svg>
            Kirip kelgan tavarlar
        </button>
    </form>
    </div>

    <div class="col-3">
        <form action="{{ route('index28') }}" method="GET">
            @csrf
            <input type="hidden" name="yil_id" value="{{ $date->id }}">
            <button type="submit" class="btn btn-info" id="button">
                
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-layers-half" viewBox="0 0 16 16">
                    <path d="M8.235 1.559a.5.5 0 0 0-.47 0l-7.5 4a.5.5 0 0 0 0 .882L3.188 8 .264 9.559a.5.5 0 0 0 0 .882l7.5 4a.5.5 0 0 0 .47 0l7.5-4a.5.5 0 0 0 0-.882L12.813 8l2.922-1.559a.5.5 0 0 0 0-.882l-7.5-4zM8 9.433 1.562 6 8 2.567 14.438 6 8 9.433z"/>
                  </svg>
                  Qolgan tavarlar
                  
                </button>
        </form>
      </div>
  

    <div class="col-3">
        <form action="{{ route('index29') }}" method="GET">
            @csrf
            <input type="hidden" name="yil_id" value="{{ $date->id }}">
            <button type="submit" class="btn btn-primary" id="button">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                  </svg>
                Yuridik shaxisga sotilgan yillik hisobotlar</button>
        </form>
      </div>

      
        <div class="col-3">
            <form action="{{ route('index30') }}" method="GET">
                @csrf
                <input type="hidden" name="yil_id" value="{{ $date->id }}">    
                <button type="submit" class="btn btn-success" id="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                      </svg>
                    Jismoniy shaxsga sotilgan yillik hisobotlar</button>
            </form>
        </div>

        <div class="col-3">
            <form action="{{ route('index31') }}" method="GET">
                @csrf
                <input type="hidden" name="yil_id" value="{{ $date->id }}">    
                <button type="submit" class="btn btn-info" id="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                      </svg>
                    Yillik xarajarlar
                </button>
            </form>
        </div>   
    </div>
</div>
    
@endsection
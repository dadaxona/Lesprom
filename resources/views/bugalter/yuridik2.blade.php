@extends('bugalter.dashbord')
@section('title','Yuridik mijozlar ro`yxati')
@section('control')
    
    <h1 style="text-align: center">{{ $clensci->raxbar }}</h1>
    <div class="row m-2">
    <form action="{{ route('index5') }}" method="GET">
        <input type="hidden" name="yil_id" id="" value="{{ $yil->id }}">
        <input type="hidden" name="oy_id" id="" value="{{ $oy->id }}">
        <input type="hidden" name="kun_id" id="" value="{{ $kun->id }}">
        <input type="hidden" name="id" id="" value="{{ $kun->id }}">
        <button type="submit" class="btn btn-info">Orqaga</button>
    </form>
    </div>
    
    <form action="{{ route('create5') }}" method="POST" class="shadowe">
        <div class="row m-2">
            @csrf
            <input type="hidden" name="yil_id" id="" value="{{ $yil->id }}">
            <input type="hidden" name="oy_id" id="" value="{{ $oy->id }}">
            <input type="hidden" name="kun_id" id="" value="{{ $kun->id }}">
            <input type="hidden" name="clensci_id" id="" value="{{ $clensci->id }}">
       
            <div class="col-6 mt-3">
               <label for="exampleFormControlInput1" class="form-label">Tavarni belgilang</label>

                <select name="tavar_id" id="" class="form-control">
                    <option value="">Tavarni belgilang</option>
                    @foreach ($tavar as $item)
                    <option value="{{ $item->tavar_id }}">{{ $item->tavar->tavar }}</option>
                    @endforeach
                </select>
                <span class="text-danger">@error('tavar_id') {{$message}}@enderror</span>  
            </div>

            <div class="col-6 mt-3">
               <label for="exampleFormControlInput1" class="form-label">Sana</label>

                <input type="date" name="data" class="form-control" value="{{ old('data') }}">
                <span class="text-danger">@error('data') {{$message}}@enderror</span>  
            </div>
         
            <div class="col-12 mt-3">
               <label for="exampleFormControlInput1" class="form-label">Tavar hajmi</label>

                <input type="text" name="kub" class="form-control" placeholder="" value="{{ old('kub') }}">
                <span class="text-danger">@error('kub') {{$message}}@enderror</span>  
            </div>

            <div class="col-6 mt-3">
               <label for="exampleFormControlInput1" class="form-label">Naqt pulda</label>

                <input type="number" name="summa" class="form-control" placeholder="" value="{{ old('summa') }}">
                <span class="text-danger">@error('summa') {{$message}}@enderror</span>  
            </div>
            <div class="col-6">
            <br>
            <br>
                Naqt: <input type="checkbox" name="naqt" class="form-check-input" id="" value="Naqt pulda"  id="flexCheckDefault">
           
            </div>
            <div class="col-6 mt-3">
               <label for="exampleFormControlInput1" class="form-label">Karta orqali</label>

                <input type="number" name="summa2" class="form-control" placeholder="" value="{{ old('summa2') }}">
                <span class="text-danger">@error('summa2') {{$message}}@enderror</span>  
            </div>
            <div class="col-6 ">
                <br>
                <br>
                Karte: <input type="checkbox" name="kartq" class="form-check-input" id="" value="Karta orqali">
            </div>
            <div class="col-6 mt-3">
               <label for="exampleFormControlInput1" class="form-label">Bank orqali</label>

                <input type="number" name="summa3" class="form-control" placeholder="" value="{{ old('summa3') }}">
                <span class="text-danger">@error('summa3') {{$message}}@enderror</span>  
            </div>
            <div class="col-6 ">
            <br>
            <br>
                Bank: <input type="checkbox" name="bank" class="form-check-input" id="" value="Bank orqali">
            </div>
            <div class="col-6 mt-3">
               <label for="exampleFormControlInput1" class="form-label">Qarz summa</label>

                <input type="number" name="karzsumma" class="form-control" placeholder="" value="{{ old('karzsumma') }}">
                <span class="text-danger">@error('karzsumma') {{$message}}@enderror</span>  
            </div>

            <div class="col-6 mt-3">
               <label for="exampleFormControlInput1" class="form-label">Qarz muddati</label>

                <input type="date" name="sroc" class="form-control" placeholder="Muddatni korsating" value="{{ old('sroc') }}">
                <span class="text-danger">@error('sroc') {{$message}}@enderror</span>  
            </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3">                    
                    <button type="submit" class="btn btn-primary">Saqlash</button>
                </div>
        </div>       
        </form>
        <br>

       <div class="row m-3">
        <table class="table table-dark table-hover">
            <thead>
                <th>N1</th>
                <th>Tovar nomi</th>
                <th>Sanasi</th>
                <th>Tovar xajmi</th>
                <th>Summa</th>
                <th>Naqt</th>
                <th>Summa</th>                
                <th>Karta</th>
                <th>Summa</th>
                <th>Bank</th>
                <th>Qarz summasi</th>
                <th>Muddati</th>
                <th>O`chirish</th>
                <th>To`lov</th>
            </thead>
            @foreach ($items as $item)
                <tbody>
                    <td><h5>{{ (($items->currentpage()-1) * $items->perpage() + ($loop->index+1)) }}</h5></td>
                    <td><h5>{{ $item->tavar->tavar }}</h5></td>
                    <td><h5>{{ $item->data }}</h5></td>
                    <td><h5>{{ $item->kub }}</h5></td>
                    <td><h5>{{ $item->summa }}</h5></td>
                    <td><h5>{{ $item->naqt }}</h5></td>
                    <td><h5>{{ $item->summa2 }}</h5></td>
                    <td><h5>{{ $item->kartq }}</h5></td>
                    <td><h5>{{ $item->summa3 }}</h5></td>
                    <td><h5>{{ $item->bank }}</h5></td>
                    @if($item->karzsumma > 0)
                        <td style="background-color: rgb(245, 67, 67); color: rgb(0, 0, 0)"><h5>{{ $item->karzsumma }}</h5></td>
                    @else
                        <td><h5>{{ $item->karzsumma }} </h5></td>
                    @endif
                        <td><h5>{{ $item->sroc }}</h5></td>
                    <td>
                        <form method="POST" action="{{ route('delete5',$item->id)}}">
                            @csrf
                            <input type="hidden" name="yil_id" id="" value="{{ $yil->id }}">
                            <input type="hidden" name="oy_id" id="" value="{{ $oy->id }}">
                            <input type="hidden" name="kun_id" id="" value="{{ $kun->id }}">
                            <input type="hidden" name="tavar_id" id="" value="{{ $item->tavar->id }}">
                            <input type="hidden" name="kub" id="" value="{{ $item->kub }}">
                            <input type="hidden" name="summa" id="" value="{{ $item->summa }}">
                            <input type="hidden" name="summa2" id="" value="{{ $item->summa2 }}">
                            <input type="hidden" name="summa3" id="" value="{{ $item->summa3 }}">
                            <input type="hidden" name="karzsumma" id="" value="{{ $item->karzsumma }}">
                            <button type="submit" class="btn btn-danger">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"></path>
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"></path>
                                </svg>                                   
                              </button>                            
                        </form>
                    </td>
                    <td>
                         <form method="GET" action="{{ route('tolov')}}">
                            @csrf
                            <input type="hidden" name="yil_id" id="" value="{{ $yil->id }}">
                            <input type="hidden" name="oy_id" id="" value="{{ $oy->id }}">
                            <input type="hidden" name="kun_id" id="" value="{{ $kun->id }}">
                            <input type="hidden" name="clensci_id" id="" value="{{ $clensci->id }}">
                            <input type="hidden" name="id" id="" value="{{ $item->id }}">
                            <button type="submit" class="btn btn-success">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z"/>
                                <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z"/>
                                <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z"/>
                                <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z"/>
                                </svg>                                  
                            </button>                            
                        </form>
                    </td>
                </tbody>
            @endforeach           
        </table>
       </div>
@endsection

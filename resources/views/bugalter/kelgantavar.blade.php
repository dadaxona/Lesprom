@extends('bugalter.dashbord')
@section('title','Kirgan tavarlarni to`yhatga olish bo`limi')
@section('control')
    
    <h1 style="text-align: center">Kelgan tovarlarni ro`yhatga olish bo`limi</h1>
    <div class="row m-2">
    <form action="{{ route('index2',$kun->id) }}" method="GET">
        <input type="hidden" name="yil_id" id="" value="{{ $yil->id }}">
        <input type="hidden" name="oy_id" id="" value="{{ $oy->id }}">
        <input type="hidden" name="kun_id" id="" value="{{ $kun->id }}">
        <button type="submit" class="btn btn-info">Orqaga</button>
    </form>
    </div>
    <form action="{{ route('create3') }}" method="POST" class="shadowe">
        <div class="row m-2">
            @csrf
            <input type="hidden" name="yil_id" id="" value="{{ $yil->id }}">
            <input type="hidden" name="oy_id" id="" value="{{ $oy->id }}">
            <input type="hidden" name="kun_id" id="" value="{{ $kun->id }}">

            <div class="col-6 mt-3">
               <label for="exampleFormControlInput1" class="form-label">Kompaniyani belgilang</label>
                <select name="kompaniya_id" id="" class="form-control">
                    <option value="">Kompaniyani belgilang</option>
                    @foreach ($kompaniya as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
                <span class="text-danger">@error('kompaniya_id') {{$message}}@enderror</span>  
            </div>

            <div class="col-6 mt-3">
               <label for="exampleFormControlInput1" class="form-label">Tavarni belgilang</label>

                <select name="tavar_id" id="" class="form-control">
                    <option value="">Tavarni belgilang</option>
                    @foreach ($tavar as $item)
                    <option value="{{ $item->id }}">{{ $item->tavar }}</option>
                    @endforeach
                </select>
                <span class="text-danger">@error('tavar_id') {{$message}}@enderror</span>  
            </div>

            <div class="col-6 mt-3">
                <label for="exampleFormControlInput1" class="form-label">Sana</label>

                <input type="date" name="data" class="form-control" value="{{ old('data') }}">
                <span class="text-danger">@error('data') {{$message}}@enderror</span>  
            </div>

            <div class="col-6 mt-3">
                <label for="exampleFormControlInput1" class="form-label">Tovar hajmi</label>

                <input type="text" name="hajm" class="form-control" placeholder="Tovar hajmi" value="{{ old('hajm') }}">
                <span class="text-danger">@error('hajm') {{$message}}@enderror</span>  
            </div>

            <div class="col-6 mt-3">
                <label for="exampleFormControlInput1" class="form-label">Olingan narx</label>

                <input type="number" name="summa" class="form-control" placeholder="Olingan narx" value="{{ old('summa') }}">
                <span class="text-danger">@error('summa') {{$message}}@enderror</span>  
            </div>

            <div class="col-6 mt-3">
             <label for="exampleFormControlInput1" class="form-label">Kozogiston tomojni chiqim</label>
                <input type="number" name="kozoq" class="form-control" placeholder="Kozogiston tomojni chiqim" value="{{ old('kozoq') }}">
                <span class="text-danger">@error('kozoq') {{$message}}@enderror</span>  
            </div>

            <div class="col-6 mt-3">
             <label for="exampleFormControlInput1" class="form-label">Uzbekistan tomojni chiqim</label>

                <input type="number" name="uzb" class="form-control" placeholder="Uzbekistan tomojni chiqim" value="{{ old('uzb') }}">
                <span class="text-danger">@error('uzb') {{$message}}@enderror</span>  
            </div>

            <div class="col-6 mt-3">
             <label for="exampleFormControlInput1" class="form-label">Tomojni rostomoshka</label>

                <input type="number" name="rostomoshka" class="form-control" placeholder="Tomojni rostomoshka" value="{{ old('rostomoshka') }}">
                <span class="text-danger">@error('rostomoshka') {{$message}}@enderror</span>  
            </div>

            <div class="col-6 mt-3">
             <label for="exampleFormControlInput1" class="form-label">Qo`shimcha xarajatlar</label>

                <input type="number" name="oylikharajat" class="form-control" placeholder="Qo`shimcha xarajatlar" value="{{ old('oylikharajat') }}">
                <span class="text-danger">@error('oylikharajat') {{$message}}@enderror</span>  
            </div>
            <div class="col-6 mt-3">
            <label for="exampleFormControlInput1" class="form-label"></label>
                <div class="row">
            <label for="exampleFormControlInput1" class="form-label"></label>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary form-control">Saqlash</button>
                </div>
                </div>
            </div>
        </div>       
        </form>
        <br>

       <div class="row m-3">
        <table class="table table-dark table-hover">
            <thead>
                <th>N1</th>
                <th>Taminotchi</th>
                <th>Tovar nomi</th>
                <th>Sana</th>
                <th>Tovar hajmi</th>
                <th>Tavar Summa</th>
                <th>Kazogiston temiryol</th>
                <th>Uzbekiston temiryol</th>
                <th>Rastomoshka</th>
                <th>Qoshimcha xarajat</th>
                <th>Jami summa</th>
                <th>O`chirish</th>               
            </thead>
            @foreach ($items as $item)
                <tbody>
                    <td><h5>{{ (($items->currentpage()-1) * $items->perpage() + ($loop->index+1)) }}</h5></td>
                    <td><h5>{{ $item->kompaniya->name }}</h5></td>
                    <td><h5>{{ $item->tavar->tavar }}</h5></td>
                    <td><h5>{{ $item->data }}</h5></td>
                    <td><h5>{{ $item->hajm }}</h5></td>
                    <td><h5>{{ $item->summa }}</h5></td>                
                    <td><h5>{{ $item->kozoq }}</h5></td>                
                    <td><h5>{{ $item->uzb }}</h5></td>
                    <td><h5>{{ $item->rostomoshka }}</h5></td>
                    <td><h5>{{ $item->oylikharajat }}</h5></td>
                    <td><h5>{{ $item->jami }}</h5></td>
                    <td>
                        <form method="POST" action="{{ route('delete3',$item->id)}}">
                            @csrf
                            <input type="hidden" name="yil_id" id="" value="{{ $yil->id }}">
                            <input type="hidden" name="oy_id" id="" value="{{ $oy->id }}">
                            <input type="hidden" name="kun_id" id="" value="{{ $kun->id }}">
                            <input type="hidden" name="tavar_id" id="" value="{{ $item->tavar->id }}">
                            <input type="hidden" name="hajm" id="" value="{{ $item->hajm }}">
                            <input type="hidden" name="summa" id="" value="{{ $item->jami }}">
                            <button type="submit" class="btn btn-danger">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"></path>
                                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"></path>
                                </svg>                                   
                              </button>                            
                        </form>
                      
                    </td>
           
                </tbody>
            @endforeach           
        </table>
        {{ $items->links() }}
       </div>
@endsection

@extends('bugalter.dashbord')
@section('title','Tovar turlari')
@section('control')

<div class="row m-1">
    <div class="col-6">
        <h1>Keladigan tovar turlarini</h1>
        <form action="{{ route('store') }}" method="POST" class="d-flex">
            @csrf
                <div class="col-8 m-2">
                    <input type="text" class="form-control" placeholder="Tovarni turini kiriting" name="tavar"  value="{{old('tavar')}}">
                    <span class="text-danger">@error('tavar') {{$message}}@enderror</span>                
                </div>
                <div class="m-2">
                    <button class="btn btn-primary " type="submit">Kiritish</button>
                </div>
            </form>
                <br>    
                <table class="table table-dark table-hover" id="wid">
                    <thead>                  
                        <th>Keladigan tovar turi</th>
                        <th>O`chirish</th>
                    </thead>
                    @foreach ($data as $item)
                        <tbody>
                            <td>{{ $item->tavar }}</td>
                            <td>
                                <form method="POST" action="{{ route('delete66',$item->id)}}">
                                    @csrf
                                    <input type="hidden" name="yil_id" value="{{ $item->id }}">                                                            
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
    </div>
    <div class="col-6">
        <h1>Kompaniyani kiriting</h1>
            <form action="{{ route('show6') }}" method="POST" class="d-flex">
                @csrf
                    <div class="col-8 m-2">
                        <input type="text" class="form-control" placeholder="Kompaniyani kiriting" name="name"  value="{{old('name')}}">
                        <span class="text-danger">@error('name') {{$message}}@enderror</span>                
                    </div>
                    <div class="m-2">
                        <button class="btn btn-primary " type="submit">saqlash</button>
                    </div>
                </form>
                    <br>    
                    <table class="table table-dark table-hover" id="wid">
                        <thead>                  
                            <th>Kompaniya</th>
                            <th>O`chirish</th>
                        </thead>
                        @foreach ($kompan as $item)
                            <tbody>
                                <td>{{ $item->name }}</td>
                                <td>
                                    <form method="POST" action="{{ route('delete666',$item->id)}}">
                                        @csrf
                                        <input type="hidden" name="yil_id" value="{{ $item->id }}">                                                            
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
        
    </div>
   </div>
   
     

@endsection
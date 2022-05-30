@extends('drektor.dashbord')
@section('drektor')   

<div class="container">
    <h1 style="text-align: center; ">Yillik xisob bo`limi</h1>
            <table class="table" id="wid">
                <thead>
                    <th class="nonem">N1</th>
                    <th class="nonem">Yil</th>
                    <th class="nonem">Oylik statistika</th>                 
                    <th class="nonem">Yillik statistika</th>
                </thead>
                @foreach ($data as $item)
                    <tbody>
                        <td class="sssssssss1">{{ (($data->currentpage()-1) * $data->perpage() + ($loop->index+1)) }}</td>
                        <td class="sssssssss">{{ $item->yil }}</td>
                        <td>
                            <a href="{{ route('showoydrektor',$item->id) }}" class="btn btn-success">Oylik statistika</a>
                        </td>             
                        <td>
                            <form method="GET" action="{{ route('index26drektor') }}">
                                @csrf
                                <input type="hidden" name="yil_id" value="{{ $item->id }}">                                                            
                                <button type="submit" class="btn btn-success">
                                    Yillik statistika                        
                                  </button>                                
                            </form>
                        </td>                       
                    </tbody>
                @endforeach
            </table>
</div>
@endsection
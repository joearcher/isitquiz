@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 result text-center">
                @if($check)
                    <p class="yes animated infinite tada">
                        Yes. <br/> 
                    </p>  
                @else
                     <p class="no animated shake">
                        No. <br/> 
                    </p>
                @endif
                
            </div>
            <div class="col-xs-12 subtext">
                <p>{{ $subtext->text }}</p> 
            </div>
        </div>
    </div>
@endsection
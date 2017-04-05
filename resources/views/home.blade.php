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
                <span class="subtext">{{ $subtext->text }}</span> 
            </div>
        </div>
    </div>
@endsection
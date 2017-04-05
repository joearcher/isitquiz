@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 result text-center">
                @if($check)
                    <p class="yes animated infinite tada">
                        Yes. <br/> 
                    </p>
                    <span class="subtext">Woohoo!</span> 
                    
                @else
                     <p class="no animated shake">
                        No. <br/> 
                    </p>
                    <span class="subtext">:(&nbsp;</span> 
                @endif
            </div>
        </div>
    </div>
@endsection
@extends('layouts.template')

@section('content')
    <div class="content-wrapper container">
        @if (isset($list_order) && !empty($list_order))
            @foreach (list_order as $order)
                <div class="card">
                    <div class=""></div>
                </div>
            @endforeach
        @endif
    </div>
@endsection
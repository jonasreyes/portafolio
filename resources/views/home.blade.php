@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Panel de Gestión') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- proyectos -->
                        <a class="btn btn-xl btn-primary" href="{{ route('proyectos.index')}}">
                                Proyectos
                        </a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

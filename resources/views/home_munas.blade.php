@extends('header')

@section('content')
<section class="section">
    <div class="section-body">
        <div class="col-lg-12">
            <div class="card with-shadow">
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{ asset('P3SM_Boomerang.png') }}" alt="" class="center">
                    </div>
                    <div class="col-md-4">
                        <img src="{{ asset('P3SM_Boomerang.png') }}" alt="" class="center">
                    </div>
                    <div class="col-md-4">
                        <img src="{{ asset('P3SM_Boomerang.png') }}" alt="" class="center">
                    </div>
                </div>
            </div>
        </div>
        <form>
            <div class="col-lg-12">
                <div class="card with-shadow">
                    <div class="row">
                        <div class="col-md-2">
                        </div>
                        <div class="col-md-8">
                            <div class="row justify-content-center">
                                <label for="">Body 1</label>
                            </div>
                        </div>
                        <div class="col-md-2">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection

@section('js')
<script src="{{ mix('js/app.js') }}"></script>
@stop

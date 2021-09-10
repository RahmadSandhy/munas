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
                        <div class="col-md-4">
                        </div>
                        <div class="col-md-4">
                            <div class="row justify-content-center">
                            <style>
                            button{
                            font-family: sans-serif;
                            font-size: 15px;
                            background: #22a4cf;
                            color: white;
                            border: white 3px solid;
                            border-radius: 5px;
                                    }
                            button:hover{
                            opacity:0.9;}</style>
                            <a href="pendaftaran"><button type="button" class="btn btn-success" >Guest</button></a>
                            <a href="pendaftaran1"><button type="button" class="btn btn-info" >Undangan</button></a>
                            </div>
                        </div>
                        <!-- <div class="col-md-2>
                            <div class="row justify-content-center">
                            <style>
                            button{
                            font-family: sans-serif;
                            font-size: 15px;
                            background: #22a4cf;
                            color: white;
                            border: white 3px solid;
                            border-radius: 5px;
                                    }
                            button:hover{
                            opacity:0.9;}</style>
                            <a href="" target="">
                            <a href="pendaftaran"><input type="button" value="Guest"></a>
                            </div>
                        </div> -->
                        <div class="col-md-4">
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

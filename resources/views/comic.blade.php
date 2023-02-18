@extends('layouts.layout')
@section('content')

    <main>

        <div class="container-fluid mt-4">
            <!--prima row-->
            <div class="row">
                <div class="col-12 no-padding relative">
                    <img src="{{ Vite::asset('resources\images\jumbotron.jpg') }}" alt="jumbotron" class="jumbo">
                    <div class="comic-thumb d-flex flex-row align-items-center">
                        <img src="{{$comic_book['thumb']}}" alt="{{$comic_book['title']}}">
                    </div>
                    <div class="blue-bar"></div>
                </div>
            </div>
            <!--seconda row-->
            <div class="col-12">
                <div class="row bg-main py-5">
                    <div class="col-12 d-flex flex-column align-items-center">
                        
                        

                    </div>
                </div>
            </div>
        </div>

    </main>


@endsection
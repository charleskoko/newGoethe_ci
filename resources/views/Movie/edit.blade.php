@extends('layouts.app')
@section('content')
    <!--banner-->
    <div class="banner">
        <h2>
            <a href="{{route('movie-overview')}}">{{__('movie.movies')}}</a><i class="fa fa-angle-right"></i> <span>{{__('movie.Edit')}}</span>
        </h2>
    </div>
    <!--//banner-->
    <!--gallery-->
    <div class=" profile">

        <div class="validation-form">
            <!---->

            <form enctype="multipart/form-data" method="POST" action="{{route('movie-update', ['movie' => $movie])}}">
                @csrf
                @method('PATCH')
                <div class="vali-form">
                    <div class="col-md-6 form-group1">
                        <label class="control-label" for="title">{{__('movie.title')}}</label>
                        <input type="text" placeholder="title" name="title" id="title" required="" value="{{$movie->title}}">
                    </div>
                    <div class="col-md-6 form-group1 form-last">
                        <label class="control-label" for="director">{{__('movie.director')}}</label>
                        <input type="text" placeholder="Lastname" name="director" id="director" required="" value="{{$movie->director}}">
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="col-md-12 form-group1 " style="padding-bottom: 2px;">
                    <label class="control-label">{{__('movie.description')}}</label>
                    <textarea name="description" id="description" placeholder="Description .....">{{$movie->description}}</textarea>
                    <div class="clearfix"> </div>
                </div>
                <div class="clearfix"> </div>

                <div class="col-md-12 form-group1 group-mail">
                    <label class="control-label">{{__('movie.number_of_copies')}}</label>
                    <input type="text" placeholder="Number" name="numberOfCopies" id="numberOfCopies" required="" value="{{$movie->numberOfCopies}}">
                </div>
                <div class="clearfix"> </div>


                <div class="col-md-12 form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                </div>
                <div class="clearfix"> </div>
            </form>

        </div>
    </div>

    </div>
    <!--//gallery-->
    <!---->
    </div>
    <div class="clearfix"> </div>
    </div>
@endsection





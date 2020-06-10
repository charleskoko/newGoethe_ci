@extends('layouts.app')
@section('content')
    <!--banner-->
    <div class="banner">
        <h2>
            <a href="{{route('movie-overview')}}">{{__('movie.movies')}}</a><i class="fa fa-angle-right"></i> <span>{{__('movie.add_new_movie')}}</span>
        </h2>
    </div>
    <!--//banner-->
    <!--gallery-->
    <div class=" profile">

        <div class="validation-form">
            <!---->

            <form enctype="multipart/form-data" method="POST" action="{{route('movie-save')}}">
                @csrf
                <div class="vali-form">
                    <div class="col-md-6 form-group1">
                        <label class="control-label" for="title">{{__('movie.title')}}</label>
                        <input type="text" placeholder="Titanic " name="title" id="title" required="">
                    </div>
                    <div class="col-md-6 form-group1 form-last">
                        <label class="control-label" for="director">{{__('movie.director')}}</label>
                        <input type="text" placeholder="Steven Spielberg" name="director" id="director" required="">
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="col-md-12 form-group1 " style="padding-bottom: 2px;">
                    <label class="control-label">{{__('movie.description')}}</label>
                    <textarea name="description" id="description" placeholder="Description ....."></textarea>
                    <div class="clearfix"> </div>
                </div>
                <div class="clearfix"> </div>

                <div class="col-md-12 form-group1 group-mail">
                    <label class="control-label">{{__('movie.number_of_copies')}}</label>
                    <input type="text" placeholder="{{__('movie.How_many')}}" name="numberOfCopies" id="numberOfCopies" required="">
                </div>
                <div class="clearfix"> </div>


                <div class="col-md-12 form-group">
                    <button type="submit" class="btn btn-primary">{{__('user.Submit')}}</button>
                    <button type="reset" class="btn btn-default">{{__('user.Cancel')}}</button>
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





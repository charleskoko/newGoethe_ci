@extends('layouts.app')
@section('content')
    <!--banner-->
    <div class="banner">
        <h2>
            {{__('movie.movies')}}
        </h2>
    </div>
    <!--//banner-->
    <!--gallery-->
    <div class=" profile">
        <!--grid-->
        <div class="inbox-mail">
            <div class="col-md-4 ">
                <div class="content-top-1">
                    <div class="col-md-6 top-content">
                        <h5>{{__('movie.total_movie')}}</h5>
                        <label>{{$counter}}</label>
                    </div>
                    <div class="col-md-6 top-content1">

                        <div id="demo-pie-1" class="pie-title-center" data-percent="25"><span
                                class="pie-value"></span> </div>
                    </div>
                    <a type="button" href="{{route('movie-create')}}" class="btn btn-primary">{{__('movie.add_new_movie')}}</a>
                    <div class="clearfix"></div>
                </div>

            </div>
            <!-- tab content -->
            <div class="col-md-8 tab-content tab-content-in">
                <div class="tab-pane active text-style" id="tab1">
                    <div class="inbox-right">

                        <div class="mailbox-content">
                            <div class="mail-toolbar clearfix">
                                <div class="float-left">
                                    <div class="btn-group m-r-sm mail-hidden-options" style="display: inline-block;">
                                        <div class="btn-group">
                                            <a class="btn btn-default"><i class="fa fa-download icon_9"></i></a>
                                        </div>
                                    </div>


                                </div>
                                <div class="float-right">
                                    {{$movies->links('pagination.pagination')}}
                                </div>

                            </div>
                            <table class="table" id="table">
                                <tbody>
                                @foreach($movies as $movie)
                                <tr class="table-row">
                                    <td class="table-text">
                                        <h6> {{$movie->title}} ({{$movie->director}})</h6>
                                        <p>{{$movie->description}}</p>
                                    </td>
                                    <td>
                                        @if($movie->is_available === true) <span class="mar">{{__('movie.available')}}</span> @else <span class="adm">{{__('movie.no_available')}}</span> @endif
                                    </td>
                                    <td class="march">
                                        {{$movie->numberOfCopies}} {{__('movie.copies')}}
                                    </td>

                                    <td>
                                        <div class="btn-group">
                                            <a class="btn btn-default dropdown-toggle" data-toggle="dropdown"><i
                                                    class="fas fa-cog"></i></a>
                                            <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                                <li>
                                                    <a href="{{route('movie-edit', ['movie' => $movie])}}">
                                                        <i class="fa fa-pencil-square-o icon_9"></i>
                                                        {{__('movie.Edit')}}
                                                    </a>
                                                </li>

                                                <li>
                                                    <form id="user-delete-{{$movie->id}}" method="post" action="{{route('movie-delete', ['movie' => $movie])}}">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
                                                    <a href="{{route('movie-delete', ['movie' => $movie])}}" onclick="event.preventDefault(); if(confirm('{{__('movie.movieDeleteMessage')}} - {{$movie->title}}'))
                                                        {document.getElementById('movie-delete-{{$movie->id}}').submit();}">
                                                        <i class="fa fa-times" icon_9=""></i>
                                                        {{__('movie.Delete')}}
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <div class="clearfix"></div>
        </div>

    </div>

    <!--//grid-->
    <!---->

@endsection





@extends('layouts.app')
@section('content')
    <!--banner-->
    <div class="banner">
        <h2>
            <a href="{{route('home')}}">Home</a>
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
                        <h5>Tasks</h5>
                        <label>8761</label>
                    </div>
                    <div class="col-md-6 top-content1">
                        <div id="demo-pie-1" class="pie-title-center" data-percent="25"><span
                                class="pie-value"></span></div>
                    </div>
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
                                    <div class="btn-group">
                                        <a class="btn btn-default"><i class="fa fa-angle-left"></i></a>
                                        <a class="btn btn-default"><i class="fa fa-angle-right"></i></a>
                                    </div>


                                </div>

                            </div>
                            <table class="table">
                                <tbody>
                                <tr class="table-row">
                                    <td class="table-text">
                                        <h6> Lorem ipsum</h6>
                                        <p>Nullam quis risus eget urna mollis ornare vel eu leo</p>
                                    </td>
                                    <td>
                                        <span class="fam">Family</span>
                                    </td>
                                    <td class="march">
                                        in 5 days
                                    </td>
                                </tr>
                                <tr class="table-row">
                                    <td class="table-text">
                                        <h6> Lorem ipsum</h6>
                                        <p>Nullam quis risus eget urna mollis ornare vel eu leo</p>
                                    </td>
                                    <td>
                                        <span class="mar">Market</span>
                                    </td>
                                    <td class="march">
                                        in 5 days
                                    </td>

                                </tr>
                                <tr class="table-row">
                                    <td class="table-text">
                                        <h6> Lorem ipsum</h6>
                                        <p>Nullam quis risus eget urna mollis ornare vel eu leo</p>
                                    </td>
                                    <td>
                                        <span class="work">work</span>
                                    </td>
                                    <td class="march">
                                        in 5 days
                                    </td>

                                </tr>
                                <tr class="table-row">
                                    <td class="table-text">
                                        <h6> Lorem ipsum</h6>
                                        <p>Nullam quis risus eget urna mollis ornare vel eu leo</p>
                                    </td>
                                    <td>
                                        <span class="fam">Family</span>
                                    </td>
                                    <td class="march">
                                        in 4 days
                                    </td>

                                </tr>
                                <tr class="table-row">
                                    <td class="table-text">
                                        <h6> Lorem ipsum</h6>
                                        <p>Nullam quis risus eget urna mollis ornare vel eu leo</p>
                                    </td>
                                    <td>
                                        <span class="ur">urgent</span>
                                    </td>
                                    <td class="march">
                                        in 4 days
                                    </td>

                                </tr>
                                <tr class="table-row">
                                    <td class="table-text">
                                        <h6> Lorem ipsum</h6>
                                        <p>Nullam quis risus eget urna mollis ornare vel eu leo</p>
                                    </td>
                                    <td>

                                    </td>
                                    <td class="march">
                                        in 3 days
                                    </td>

                                </tr>
                                <tr class="table-row">

                                    <td class="table-text">
                                        <h6> Lorem ipsum</h6>
                                        <p>Nullam quis risus eget urna mollis ornare vel eu leo</p>
                                    </td>
                                    <td>
                                        <span class="fam">Family</span>
                                    </td>
                                    <td class="march">
                                        in 2 days
                                    </td>

                                </tr>
                                <tr class="table-row">
                                    <td class="table-text">
                                        <h6> Lorem ipsum</h6>
                                        <p>Nullam quis risus eget urna mollis ornare vel eu leo</p>
                                    </td>
                                    <td>
                                        <span class="ur">urgent</span>
                                    </td>
                                    <td class="march">
                                        in 2 days
                                    </td>

                                </tr>

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





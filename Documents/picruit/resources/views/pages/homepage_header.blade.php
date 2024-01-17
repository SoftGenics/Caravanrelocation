

    <div class="container-fuild pt-2 pb-2">
        <div class="row">
           <div id="exTab3" 
                        style="width: 100%;width: 100%; background: #04470621; border: solid; border-radius: 17px; border-color: transparent;">
                        <ul class="nav nav-pills">

                            <li >
                                <a href="{{ url('find-job') }}">
                                    <h3 style="font-family: 'League Spartan', sans-serif ;font-weight:600">All Jobs<h3>
                                </a>
                            </li>

                            <li><a href="{{ url('tutors') }}">
                                    <h3 style="font-family: 'League Spartan', sans-serif ;font-weight:600">All tutions<h3>
                                </a>
                            </li>

                            <li><a href="{{ url('globel/assignment') }}">
                                    <h3 style="font-family: 'League Spartan', sans-serif ;font-weight:600">Global
                                        assignments<h3>
                                </a>
                            </li>

                            <li class="active"><a href="{{ url('blog') }}">
                                    <h3 style="font-family: 'League Spartan', sans-serif ;font-weight:600">Blogs<h3>
                                </a>
                            </li>

                        </ul>

                        <div class="tab-content clearfix">
                            <div class="tab-pane active" id="1b" style="overflow: auto; position:relative;">
                                <div id="grid_table"></div>
                            </div>
                            <div class="tab-pane" id="2b" style="overflow: auto;">
                                <div id="grid_table1"></div>
                            </div>
                        </div>

                    </div>
                    <!-- end header -->
        </div>
    </div>    
   
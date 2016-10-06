<style type="text/css">
    img {
        width: 120px;
        height: 120px;
        text-align: right;
    }
    .bax {
        padding-top: 16px;
        border-top: solid 3px #666;
        border-bottom: solid 5px #666;
        text-align: justify;
    }
    .bax > div {
        background-color: #F4F1F1;
        font-size: 1em;
    }
    .bax > div > div {
        background-color: #fff;
        font-size: 1em;
    }
    .bax > div > span{
        text-font: italic;
        text-decoration-style: italic;
        text-align: right;
        color: rgba(0,0,0,0.5);
    }
</style>

<div class="container">
    <div class="navbar navbar-inverse">
        <div class="navbar-header">
            <a href="" class="navbar-brand">PET-LINE</a>
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="">opci&oacute;n</a></li>
                <li><a href="">opci&oacute;n</a></li>
                <li><a href="">opci&oacute;n</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container content">
    <div class="box">
    <div class="center">
        <!--<><><><><><><><><><><><><><><><><><><><><><><><><><> DEMO START <><><><><><><><><><><><><><><><><><><><><><><><><><>-->

        <div id="demo" class="box jplist" style="margin: 20px 0 50px 0">

            <!-- ios button: show/hide panel -->
            <div class="jplist-ios-button">
                <i class="fa fa-sort"></i>
                jPList Actions
            </div>

            <!-- panel -->
            <div class="row">
            <div class="jplist-panel box panel-top">

                <!-- back button button -->
                <button
                        type="button"
                        data-control-type="back-button"
                        data-control-name="back-button"
                        data-control-action="back-button">
                    <i class="fa fa-arrow-left"></i> Go Back
                </button>

                <!-- reset button -->
                <button
                        type="button"
                        class="jplist-reset-btn"
                        data-control-type="reset"
                        data-control-name="reset"
                        data-control-action="reset">
                    Reset &nbsp;<i class="fa fa-share"></i>
                </button>

                <!-- items per page dropdown -->
                <div
                        class="jplist-drop-down"
                        data-control-type="items-per-page-drop-down"
                        data-control-name="paging"
                        data-control-action="paging">

                    <ul>
                        <li><span data-number="3"> 3 per page </span></li>
                        <li><span data-number="5"> 5 per page </span></li>
                        <li><span data-number="10" data-default="true"> 10 per page </span></li>
                        <li><span data-number="all"> View All </span></li>
                    </ul>
                </div>

                <!-- sort dropdown -->
                <div
                        class="jplist-drop-down"
                        data-control-type="sort-drop-down"
                        data-control-name="sort"
                        data-control-action="sort"
                        data-datetime-format="{year}/{month}/{day}"> <!-- {year}, {month}, {day}, {hour}, {min}, {sec} -->

                    <ul>
                        <li><span data-path="default">Sort by</span></li>
                        <li><span data-path=".title" data-order="asc" data-type="text">Title A-Z</span></li>
                        <li><span data-path=".title" data-order="desc" data-type="text">Title Z-A</span></li>
                        <li><span data-path=".desc" data-order="asc" data-type="text">Description A-Z</span></li>
                        <li><span data-path=".desc" data-order="desc" data-type="text">Description Z-A</span></li>
                        <li><span data-path=".like" data-order="asc" data-type="number">Likes asc</span></li>
                        <li><span data-path=".like" data-order="desc" data-type="number">Likes desc</span></li>
                        <li><span data-path=".date" data-order="asc" data-type="datetime">Date asc</span></li>
                        <li><span data-path=".date" data-order="desc" data-type="datetime">Date desc</span></li>
                    </ul>
                </div>

                <!-- filter by title -->
                <div class="text-filter-box">

                    <i class="fa fa-search  jplist-icon"></i>

                    <!--[if lt IE 10]>
                    <div class="jplist-label">Filter by Title:</div>
                    <![endif]-->

                    <input
                            data-path=".title"
                            type="text"
                            value=""
                            placeholder="Filter by Title"
                            data-control-type="textbox"
                            data-control-name="title-filter"
                            data-control-action="filter"
                    />
                </div>

                <!-- filter by description -->
                <div class="text-filter-box">

                    <i class="fa fa-search  jplist-icon"></i>

                    <!--[if lt IE 10]>
                    <div class="jplist-label">Filter by Description:</div>
                    <![endif]-->

                    <input
                            data-path=".desc"
                            type="text"
                            value=""
                            placeholder="Filter by Description"
                            data-control-type="textbox"
                            data-control-name="desc-filter"
                            data-control-action="filter"
                    />
                </div>

                <div class="jplist-group">
                    <ul>
                        <li>
                        <span
                                data-control-type="button-filter"
                                data-control-action="filter"
                                data-control-name="architecture-btn"
                                data-path=".architecture">
                                <i class="fa fa-caret-right"></i>
                                Architecture
                        </span>

                        <li>
                        <span
                                data-control-type="button-filter"
                                data-control-action="filter"
                                data-control-name="christmas-btn"
                                data-path=".christmas">
                                <i class="fa fa-caret-right"></i>
                                Christmas
                        </span>

                        <li>
                        <span
                                data-control-type="button-filter"
                                data-control-action="filter"
                                data-control-name="nature-btn"
                                data-path=".nature">
                                <i class="fa fa-caret-right"></i>
                                Nature
                        </span>

                        <li>
                        <span
                                data-control-type="button-filter"
                                data-control-action="filter"
                                data-control-name="lifestyle-btn"
                                data-path=".lifestyle">
                                <i class="fa fa-caret-right"></i>
                                Lifestyle
                        </span>

                    </ul>
                </div>

                <!-- pagination results -->
                <div
                        class="jplist-label"
                        data-type="{start} - {end} of {all}"
                        data-control-type="pagination-info"
                        data-control-name="paging"
                        data-control-action="paging">
                </div>

                <!-- pagination control -->
                <div
                        class="jplist-pagination"
                        data-control-type="pagination"
                        data-control-name="paging"
                        data-control-action="paging">
                </div>
            </div>
            </div>
            <br>
            <hr>
            <!-- data -->
            <div class="row">
            <div class="list box text-shadow">
            <!-- foreach -->
            <?php
            $i=0; 
            foreach ($stmt as $key) {
                
                $i++;

                echo '<div class="list-item box">

                    <!-- img -->
                    <div class="img left col-md-2 col-md-offset-1">
                        <img src="src="data:image/jpg;base64,'. base64_encode($key->imagen).'""/>
                    </div>

                    <!-- data -->
                    <div class="block right bax col-md-8">
                        <span class="date">'.$key->fecha_creacion.'</span>
                        <h2 class="title">'.$key->nombre_empresa.'</h2>
                        <p class="desc">Architecture is both the process and product of planning, designing and construction. Architectural works, in the material form of buildings, are often perceived as cultural symbols and as works of art. Historical civilizations are often identified with their surviving architectural achievements.</p>
                        <p class="like">25 Likes</p>
                        <p class="theme">
                            <span class="architecture">Architecture</span>
                        </p>
                    </div>
                </div>';

                /*echo '<div class="list-item box">

                    <!-- img -->
                    <div class="img left">
                        <img src="assets/img/thumbs/0'.$i.'.jpg" width="90" height="90" alt="" title=""/>
                    </div>

                    <!-- data -->
                    <div class="block right">
                        <p class="date">'.$key->fecha_creacion.'</p>
                        <p class="title">'.$key->nombre_empresa.'</p>
                        <p class="desc">Architecture is both the process and product of planning, designing and construction. Architectural works, in the material form of buildings, are often perceived as cultural symbols and as works of art. Historical civilizations are often identified with their surviving architectural achievements.</p>
                        <p class="like">25 Likes</p>
                        <p class="theme">
                            <span class="architecture">Architecture</span>
                        </p>
                    </div>
                </div>';*/
            }
             ?>
            <!-- end foreach -->
                <!-- item 1 -->
                <div class="list-item box">

                    <!-- img -->
                    <div class="img left">
                        <img src="assets/img/thumbs/arch-2.jpg"  alt="" title=""/>
                    </div>

                    <!-- data -->
                    <div class="block right">
                        <p class="date">03/18/2012</p>
                        <p class="title">Architecture</p>
                        <p class="desc">Architecture is both the process and product of planning, designing and construction. Architectural works, in the material form of buildings, are often perceived as cultural symbols and as works of art. Historical civilizations are often identified with their surviving architectural achievements.</p>
                        <p class="like">25 Likes</p>
                        <p class="theme">
                            <span class="architecture">Architecture</span>
                        </p>
                    </div>
                </div>

               
            </div>
            </div>

            <div class="box jplist-no-results text-shadow align-center">
                <b>No results found</b>
            </div>

            <!-- ios button: show/hide panel -->
            <div class="jplist-ios-button">
                <i class="fa fa-sort"></i>
                jPList Actions
            </div>

            <!-- panel -->
            <div class="jplist-panel box panel-bottom">

                <!-- items per page dropdown -->
                <div
                        class="jplist-drop-down"
                        data-control-type="items-per-page-drop-down"
                        data-control-name="paging"
                        data-control-action="paging"
                        data-control-animate-to-top="true">

                    <ul>
                        <li><span data-number="3"> 3 por pagina </span></li>
                        <li><span data-number="5"> 5 por pagina </span></li>
                        <li><span data-number="10" data-default="true"> 10 por pagina </span></li>
                        <li><span data-number="all"> Ver todos </span></li>
                    </ul>
                </div>

                <!-- sort dropdown -->
                <div
                        class="jplist-drop-down"
                        data-control-type="sort-drop-down"
                        data-control-name="sort"
                        data-control-action="sort"
                        data-control-animate-to-top="true"
                        data-datetime-format="{month}/{day}/{year}"> <!-- {year}, {month}, {day}, {hour}, {min}, {sec} -->

                    <ul>
                        <li><span data-path="default">Sort by</span></li>
                        <li><span data-path=".title" data-order="asc" data-type="text">Title A-Z</span></li>
                        <li><span data-path=".title" data-order="desc" data-type="text">Title Z-A</span></li>
                        <li><span data-path=".desc" data-order="asc" data-type="text">Description A-Z</span></li>
                        <li><span data-path=".desc" data-order="desc" data-type="text">Description Z-A</span></li>
                        <li><span data-path=".like" data-order="asc" data-type="number">Likes asc</span></li>
                        <li><span data-path=".like" data-order="desc" data-type="number">Likes desc</span></li>
                        <li><span data-path=".date" data-order="asc" data-type="datetime">Date asc</span></li>
                        <li><span data-path=".date" data-order="desc" data-type="datetime">Date desc</span></li>
                    </ul>
                </div>

                <!-- pagination results -->
                <div
                        class="jplist-label"
                        data-type="{start} - {end} of {all}"
                        data-control-type="pagination-info"
                        data-control-name="paging"
                        data-control-action="paging">
                </div>

                <!-- pagination -->
                <div
                        class="jplist-pagination"
                        data-control-animate-to-top="true"
                        data-control-type="pagination"
                        data-control-name="paging"
                        data-control-action="paging">
                </div>

            </div>

        </div>

        <!--<><><><><><><><><><><><><><><><><><><><><><><><><><> DEMO END <><><><><><><><><><><><><><><><><><><><><><><><><><>-->
    </div>
</div>
</div>
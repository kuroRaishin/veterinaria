<style type="text/css">
    
</style>

<?php 
require_once 'views/login/mainmenu.php';
 ?>
<div class="container content">
    <div class="box">
    <div class="center">

        <div id="demo" class="box jplist" style="margin: 20px 0 50px 0">

            <!-- ios button: show/hide panel -->
            <div class="jplist-ios-button">
                <i class="fa fa-sort"></i>
                opciones de busqueda
            </div>

            <!-- panel -->
            <div class="row">
            <div class="jplist-panel box panel-top col-md-offset-2">

                <!-- back button button -->
                <button
                        type="button"
                        data-control-type="back-button"
                        data-control-name="back-button"
                        data-control-action="back-button">
                    <i class="fa fa-arrow-left"></i> Volver
                </button>

                <!-- reset button -->
                <button
                        type="button"
                        class="jplist-reset-btn"
                        data-control-type="reset"
                        data-control-name="reset"
                        data-control-action="reset">
                    <i class=""></i>limpiar 
                </button>

                <!-- items per page dropdown -->
                <div
                        class="jplist-drop-down"
                        data-control-type="items-per-page-drop-down"
                        data-control-name="paging"
                        data-control-action="paging">

                    <ul>
                        <li><span data-number="3"> 3 por pág </span></li>
                        <li><span data-number="5"> 5 por pág </span></li>
                        <li><span data-number="10" data-default="true"> 10 por pág </span></li>
                        <li><span data-number="all"> Ver todo </span></li>
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
                        <li><span data-path="default">Ordenar por</span></li>
                        <li><span data-path=".title" data-order="asc" data-type="text">Nombre A-Z</span></li>
                        <li><span data-path=".title" data-order="desc" data-type="text">Nombre Z-A</span></li>
                        <li><span data-path=".desc" data-order="asc" data-type="text">Desc A-Z</span></li>
                        <li><span data-path=".desc" data-order="desc" data-type="text">Desc Z-A</span></li>
                        <li><span data-path=".like" data-order="asc" data-type="number">Estrellas asc</span></li>
                        <li><span data-path=".like" data-order="desc" data-type="number">Estrellas desc</span></li>
                        <!-- <li><span data-path=".date" data-order="asc" data-type="datetime">Fecha asc</span></li>
                        <li><span data-path=".date" data-order="desc" data-type="datetime">Fecha desc</span></li> -->
                    </ul>
                </div>

                <!-- filtrar por titulo -->
                <div class="text-filter-box">

                    <i class="fa fa-search  jplist-icon"></i>

                    <!--[if lt IE 10]>
                    <div class="jplist-label">Filter by Title:</div>
                    <![endif]-->

                    <input
                            data-path=".title"
                            type="text"
                            value=""
                            placeholder="por nombre.."
                            data-control-type="textbox"
                            data-control-name="title-filter"
                            data-control-action="filter"
                    />
                </div>

                <!-- filtro por descripcion -->
                <div class="text-filter-box">

                    <i class="fa fa-search  jplist-icon"></i>

                    <!--[if lt IE 10]>
                    <div class="jplist-label">filtrar por descripción:</div>
                    <![endif]-->

                    <input
                            data-path=".desc"
                            type="text"
                            value=""
                            placeholder="por servicios"
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
                                data-control-name="healt-btn"
                                data-path=".salud">
                                <i class="fa fa-caret-right"></i>
                                Salud
                        </span>

                        <li>
                        <span
                                data-control-type="button-filter"
                                data-control-action="filter"
                                data-control-name="fashion-btn"
                                data-path=".moda">
                                <i class="fa fa-caret-right"></i>
                                Moda
                        </span>

                        <li>
                        <span
                                data-control-type="button-filter"
                                data-control-action="filter"
                                data-control-name="nature-btn"
                                data-path=".adopcion">
                                <i class="fa fa-caret-right"></i>
                                Adopcion
                        </span>

                        <li>
                        <span
                                data-control-type="button-filter"
                                data-control-action="filter"
                                data-control-name="lifestyle-btn"
                                data-path=".cuidado">
                                <i class="fa fa-caret-right"></i>
                                Cuidado
                        </span>

                    </ul>
                </div>
                <!-- services tags -->
                <div class="jplist-group">
                    <ul>
                        <?php 
                        foreach ($stmt2 as $key) {
                            echo '<li>
                        <span
                                data-control-type="button-filter"
                                data-control-action="filter"
                                data-control-name="'.$key->nombre.'-btn"
                                data-path=".'.$key->nombre.'">
                                <i class="fa fa-caret-right"></i>
                                '.$key->nombre.'
                        </span>';
                        }

                         ?>


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
                        <div class="img left col-md-2 col-md-offset-1" id="imagen">
                            <img class="img-circle" width="200" height="200" src="data:image/jpg;base64,'. base64_encode($key->imagen).'">

                        </div>
                   

                        <!-- data -->
                        <div class="block right bax col-md-8">
                            <span class="date">'.$key->fecha_creacion.'</span>
                            <form method="post" action="?controller=login&accion=vet_page">
                            <button class="btn btn-link" type="submit">
                            <h2 class="title">'.$key->nombre_empresa.'</h2>
                            <input type="hidden" class="hidden" name="documento" value="'.$key->documento.'">
                            </button>
                            </form>
                            <p><b>Ubicación:</b> '.$key->direccion.'</p>
                            <p class="desc"><b>Servicios: </b>';
                            $array = $key->id_servicios;
                            $array = explode(',', $array);

                            for ($a=0; $a < sizeof($array); $a++) { 
                              echo '<span class="'.ucwords($array[$a]).'">'.ucwords($array[$a]).'</span> ';
                            }
                            echo'</p>

                            <h6 class="like">'.substr($key->rating, 0,3).' stars por '.$key->votantes.' usuarios</h6>
                            <p><input id="input-21e" value="'.$key->rating.'" type="number" class="rating" readonly="true" min=0 max=5 step=0.1 data-size="xs" ></p>
                            <p class="theme">';
                            $tag = $key->tags;
                            $tag = explode(',', $tag);
                            for ($x=0; $x < sizeof($tag); $x++) { 
                                echo '<span class="'.$tag[$x].'">'.ucwords($tag[$x]).'</span> ';
                            }
                                
                            echo '</p>
                        </div>
                 </div>';
                }
            ?>
            <!-- end foreach -->


               
                </div>
            </div>

            <div class="box jplist-no-results text-shadow text-center">
                <b>ho hay resultados que coincidan</b><br>
            </div>

            <!-- ios button: show/hide panel -->
            <div class="jplist-ios-button">
                <i class="fa fa-sort"></i>
                Opciones de búsqueda
            </div>

            <!-- panel -->
            <div class="jplist-panel box panel-bottom col-md-offset-2">

                <!-- items por página dropdown -->
                <div
                        class="jplist-drop-down"
                        data-control-type="items-per-page-drop-down"
                        data-control-name="paging"
                        data-control-action="paging"
                        data-control-animate-to-top="true">

                    <ul>
                        <li><span data-number="3"> 3 por pág </span></li>
                        <li><span data-number="5"> 5 por pág </span></li>
                        <li><span data-number="10" data-default="true"> 10 por pág </span></li>
                        <li><span data-number="all"> Ver todos </span></li>
                    </ul>
                </div>

                <!-- ordenar dropdown -->
                <div
                        class="jplist-drop-down"
                        data-control-type="sort-drop-down"
                        data-control-name="sort"
                        data-control-action="sort"
                        data-control-animate-to-top="true"
                        data-datetime-format="{month}/{day}/{year}"> <!-- {year}, {month}, {day}, {hour}, {min}, {sec} -->

                    <ul>
                        <li><span data-path="default">Sort by</span></li>
                        <li><span data-path=".title" data-order="asc" data-type="text">Nombre A-Z</span></li>
                        <li><span data-path=".title" data-order="desc" data-type="text">Nombre Z-A</span></li>
                        <li><span data-path=".desc" data-order="asc" data-type="text">Descripcion A-Z</span></li>
                        <li><span data-path=".desc" data-order="desc" data-type="text">Descripcion Z-A</span></li>
                        <li><span data-path=".like" data-order="asc" data-type="number">Likes asc</span></li>
                        <li><span data-path=".like" data-order="desc" data-type="number">Likes desc</span></li>
                        <li><span data-path=".date" data-order="asc" data-type="datetime">Fecha asc</span></li>
                        <li><span data-path=".date" data-order="desc" data-type="datetime">Fecha desc</span></li>
                    </ul>
                </div>

                <!-- paginacion resultados -->
                <div
                        class="jplist-label"
                        data-type="{start} - {end} of {all}"
                        data-control-type="pagination-info"
                        data-control-name="paging"
                        data-control-action="paging">
                </div>

                <!-- paginacion -->
                <div
                        class="jplist-pagination"
                        data-control-animate-to-top="true"
                        data-control-type="pagination"
                        data-control-name="paging"
                        data-control-action="paging">
                </div>

            </div>
        </div>
    </div>
</div>
</div>
<br>
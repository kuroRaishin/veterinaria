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
<!--  -->
<script>

        $('document').ready(function(){

            $('#demo').jplist({
                itemsBox: '.list'
                ,itemPath: '.list-item'
                ,panelPath: '.jplist-panel'
            });

            /*
            var $items = $(
                    '<div class="list-item box">\
                        <div class="img left">\
                            <img title="" alt="" src="../../demo/img/thumbs/book-1.jpg">\
                        </div>\
                        <div class="block right">\
                            <p class="date">03/15/2012</p>\
                            <p class="title">New Added Item #1</p>\
                            <p class="desc">New Item Description</p>\
                            <p class="like">100 Likes</p>\
                            <p class="theme">\
                                <span class="architecture">Lifestyle</span>\
                            </p>\
                        </div>\
                    </div>\
                    <div class="list-item box">\
                        <div class="img left">\
                            <img title="" alt="" src="../../demo/img/thumbs/book-1.jpg">\
                        </div>\
                        <div class="block right">\
                            <p class="date">03/15/2012</p>\
                            <p class="title">New Added Item #2</p>\
                            <p class="desc">New Item Description</p>\
                            <p class="like">100 Likes</p>\
                            <p class="theme">\
                                <span class="architecture">Lifestyle</span>\
                            </p>\
                        </div>\
                    </div>\
                    <div class="list-item box">\
                        <div class="img left">\
                            <img title="" alt="" src="../../demo/img/thumbs/book-1.jpg">\
                        </div>\
                        <div class="block right">\
                            <p class="date">03/15/2012</p>\
                            <p class="title">New Added Item #3</p>\
                            <p class="desc">New Item Description</p>\
                            <p class="like">100 Likes</p>\
                            <p class="theme">\
                                <span class="architecture">Lifestyle</span>\
                            </p>\
                        </div>\
                    </div>'
            );

            //add item to jPList collection in the given index
            $('#demo').jplist({
                command: 'add'
                ,commandData: {
                    $items: $items
                    ,index: 0
                }
            });*/
        });
    </script>
<!--  -->

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

            <!-- data -->
            <div class="list box text-shadow">

                <!-- item 1 -->
                <div class="list-item box">

                    <!-- img -->
                    <div class="img left">
                        <img src="assets/img/thumbs/arch-2.jpg" alt="" title=""/>
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

                <!-- item 2 -->
                <div class="list-item box">
                    <!-- img -->
                    <div class="img left">
                        <img src="assets/img/thumbs/autumn-1.jpg" alt="" title=""/>
                    </div>

                    <!-- data -->
                    <div class="block right">
                        <p class="date">01/16/2011</p>
                        <p class="title">Autumn</p>
                        <p class="desc">Autumn or Fall is one of the four temperate seasons. Autumn marks the transition from summer into winter, in September (Northern Hemisphere) or March (Southern Hemisphere) when the arrival of night becomes noticeably earlier. The equinoxes might be expected to be in the middle of their respective seasons, but temperature lag (caused by the thermal latency of the ground and sea) means that seasons appear later than dates calculated from a purely astronomical perspective.</p>
                        <p class="like">12 Likes</p>
                        <p class="theme">
                            <span class="nature">Nature</span>
                        </p>
                    </div>
                </div>

                <!-- item 3 -->
                <div class="list-item box">
                    <!-- img -->
                    <div class="img left">
                        <img src="assets/img/thumbs/boats-1.jpg" alt="" title=""/>
                    </div>

                    <!-- data -->
                    <div class="block right">
                        <p class="date">02/24/2000</p>
                        <p class="title">Boats</p>
                        <p class="desc">A boat is a watercraft of any size designed to float or plane, to provide passage across water. Usually this water will be inland (lakes) or in protected coastal areas. However, boats such as the whaleboat were designed to be operated from a ship in an offshore environment. In naval terms, a boat is a vessel small enough to be carried aboard another vessel (a ship).</p>
                        <p class="like">11 Likes</p>
                        <p class="theme">
                            <span class="nature">Nature</span>,
                            <span class="sea">Sea</span>
                        </p>
                    </div>
                </div>

                <!-- item 4 -->
                <div class="list-item box">
                    <!-- img -->
                    <div class="img left">
                        <img src="assets/img/thumbs/arch-1.jpg" alt="" title=""/>
                    </div>

                    <!-- data -->
                    <div class="block right">
                        <p class="date">03/15/2012</p>
                        <p class="title">Arch</p>
                        <p class="desc">An arch is a structure that spans a space and supports a load. Arches appeared as early as the 2nd millennium BC in Mesopotamian brick architecture and their systematic use started with the Ancient Romans who were the first to apply the technique to a wide range of structures.</p>
                        <p class="like">5 Likes</p>
                        <p class="theme">
                            <span class="architecture">Architecture</span>
                        </p>
                    </div>
                </div>

                <!-- item 5 -->
                <div class="list-item box">
                    <!-- img -->
                    <div class="img left">
                        <img src="assets/img/thumbs/book-1.jpg" alt="" title=""/>
                    </div>

                    <!-- data -->
                    <div class="block right">
                        <p class="date">11/22/2001</p>
                        <p class="title">Books</p>
                        <p class="desc">A book is a set of written, printed, illustrated, or blank sheets, made of ink, paper, parchment, or other materials, usually fastened together to hinge at one side. A single sheet within a book is called a leaf, and each side of a leaf is called a page. A book produced in electronic format is known as an electronic book (e-book).</p>
                        <p class="like">100 Likes</p>
                        <p class="theme">
                            <span class="lifestyle">Lifestyle</span>
                        </p>
                    </div>
                </div>

                <!-- item 6 -->
                <div class="list-item box">
                    <!-- img -->
                    <div class="img left">
                        <img src="assets/img/thumbs/business-1.jpg" alt="" title=""/>
                    </div>

                    <!-- data -->
                    <div class="block right">
                        <p class="date">02/05/2004</p>
                        <p class="title">Business</p>
                        <p class="desc">A business (also known as enterprise or firm) is an organization engaged in the trade of goods, services, or both to consumers. Businesses are predominant in capitalist economies, where most of them are privately owned and administered to earn profit to increase the wealth of their owners. Businesses may also be not-for-profit or state-owned. A business owned by multiple individuals may be referred to as a company, although that term also has a more precise meaning.</p>
                        <p class="like">15 Likes</p>
                        <p class="theme">
                            <span class="lifestyle">Lifestyle</span>
                        </p>
                    </div>
                </div>

                <!-- item 7 -->
                <div class="list-item box">
                    <!-- img -->
                    <div class="img left">
                        <img src="assets/img/thumbs/calendar-1.jpg" alt="" title=""/>
                    </div>

                    <!-- data -->
                    <div class="block right">
                        <p class="date">05/08/2003</p>
                        <p class="title">Calendar</p>
                        <p class="desc">A calendar is a system of organizing days for social, religious, commercial, or administrative purposes. This is done by giving names to periods of time, typically days, weeks, months, and years. The name given to each day is known as a date. Periods in a calendar (such as years and months) are usually, though not necessarily, synchronized with the cycle of the sun or the moon.</p>
                        <p class="like">18 Likes</p>
                        <p class="theme">
                            <span class="lifestyle">Lifestyle</span>
                        </p>
                    </div>
                </div>

                <!-- item 8 -->
                <div class="list-item box">
                    <!-- img -->
                    <div class="img left">
                        <img src="assets/img/thumbs/car-1.jpg" alt="" title=""/>
                    </div>

                    <!-- data -->
                    <div class="block right">
                        <p class="date">09/01/2007</p>
                        <p class="title">Car</p>
                        <p class="desc">An automobile, autocar, motor car or car is a wheeled motor vehicle used for transporting passengers, which also carries its own engine or motor. Most definitions of the term specify that automobiles are designed to run primarily on roads, to have seating for one to eight people, to typically have four wheels, and to be constructed principally for the transport of people rather than goods.</p>
                        <p class="like">7 Likes</p>
                        <p class="theme">
                            <span class="lifestyle">Lifestyle</span>
                        </p>
                    </div>
                </div>

                <!-- item 9 -->
                <div class="list-item box">
                    <!-- img -->
                    <div class="img left">
                        <img src="assets/img/thumbs/christmas-1.jpg" alt="" title=""/>
                    </div>

                    <!-- data -->
                    <div class="block right">
                        <p class="date">11/12/1998</p>
                        <p class="title">Christmas</p>
                        <p class="desc">Christmas or Christmas Day is an annual commemoration of the birth of Jesus Christ, celebrated generally on December as a religious and cultural holiday by billions of people around the world. A feast central to the Christian liturgical year, it closes the Advent season and initiates the twelve days of Christmastide. Christmas is a civil holiday in many of the world's nations, is celebrated by an increasing number of non-Christians, and is an integral part of the Christmas and holiday season.</p>
                        <p class="like">29 Likes</p>
                        <p class="theme">
                            <span class="christmas">Christmas</span>,
                            <span class="architecture">Architecture</span>
                        </p>
                    </div>
                </div>

                <!-- item 10 -->
                <div class="list-item box">
                    <!-- img -->
                    <div class="img left">
                        <img src="assets/img/thumbs/christmas-2.jpg" alt="" title=""/>
                    </div>

                    <!-- data -->
                    <div class="block right">
                        <p class="date">06/10/1995</p>
                        <p class="title">The Christmas Toy</p>
                        <p class="desc">The Christmas Toy is a 1986 made-for-TV movie by The Jim Henson Company. It originally aired on ABC on December 6, 1986, and was originally sponsored by Kraft Foods. Originally introduced by Kermit The Frog, it was released on VHS format in 1993. In 2008, HIT Entertainment (distributed by Lionsgate) released the special on DVD, but edited out Kermit's appearance due to legal issues.</p>
                        <p class="like">35 Likes</p>
                        <p class="theme">
                            <span class="christmas">Christmas</span>
                        </p>
                    </div>
                </div>

                <!-- item 11 -->
                <div class="list-item box">
                    <!-- img -->
                    <div class="img left">
                        <img src="assets/img/thumbs/christmas-3.jpg" alt="" title=""/>
                    </div>

                    <!-- data -->
                    <div class="block right">
                        <p class="date">04/04/2006</p>
                        <p class="title">Christmas Tree</p>
                        <p class="desc">A Christmas tree is a decorated tree, usually an evergreen conifer such as pine or fir, traditionally associated with the celebration of Christmas. An artificial Christmas tree is an object made to resemble such a tree, usually made from polyvinyl chloride.</p>
                        <p class="like">86 Likes</p>
                        <p class="theme">
                            <span class="christmas">Christmas</span>
                        </p>
                    </div>
                </div>

                <!-- item 12 -->
                <div class="list-item box">
                    <!-- img -->
                    <div class="img left">
                        <img src="assets/img/thumbs/city-1.jpg" alt="" title=""/>
                    </div>

                    <!-- data -->
                    <div class="block right">
                        <p class="date">06/19/1981</p>
                        <p class="title">City</p>
                        <p class="desc">A city is a relatively large and permanent settlement. Although there is no agreement on how a city is distinguished from a town within general English language meanings, many cities have a particular administrative, legal, or historical status based on local law.</p>
                        <p class="like">125 Likes</p>
                        <p class="theme">
                            <span class="architecture">Architecture</span>
                        </p>
                    </div>
                </div>

                <!-- item 13 -->
                <div class="list-item box">
                    <!-- img -->
                    <div class="img left">
                        <img src="assets/img/thumbs/city-2.jpg" alt="" title=""/>
                    </div>

                    <!-- data -->
                    <div class="block right">
                        <p class="date">08/25/1991</p>
                        <p class="title">Capital City</p>
                        <p class="desc">A capital city (or just, capital) is the area of a country, province, region, or state considered to enjoy primary status; although there are exceptions, a capital is typically a city that physically encompasses the offices and meeting places of the seat of government and is usually fixed by law or by the constitution. An alternative term is political capital, but this phrase has a second meaning based on an alternate sense of the word capital. The capital is often, but not necessarily, the largest city of its constituent area.</p>
                        <p class="like">191 Likes</p>
                        <p class="theme">
                            <span class="architecture">Architecture</span>
                        </p>
                    </div>
                </div>

                <!-- item 14 -->
                <div class="list-item box">
                    <!-- img -->
                    <div class="img left">
                        <img src="assets/img/thumbs/coffee-grass.jpg" alt="" title=""/>
                    </div>

                    <!-- data -->
                    <div class="block right">
                        <p class="date">02/02/2002</p>
                        <p class="title">Coffee</p>
                        <p class="desc">Coffee is a brewed beverage with a bitter, acidic flavor prepared from the roasted seeds of the coffee plant. The beans are found in coffee cherries, which grow on trees cultivated in over 70 countries, primarily in equatorial Latin America, Southeast Asia, South Asia and Africa. Green (unroasted) coffee is one of the most traded agricultural commodities in the world. Coffee can have a stimulating effect on humans due to its caffeine content. It is one of the most-consumed beverages in the world.</p>
                        <p class="like">18 Likes</p>
                        <p class="theme">
                            <span class="nature">Nature</span>,
                            <span class="lifestyle">Lifestyle</span>,
                            <span class="architecture">Architecture</span>
                        </p>
                    </div>
                </div>

                <!-- item 15 -->
                <div class="list-item box">
                    <!-- img -->
                    <div class="img left">
                        <img src="assets/img/thumbs/coins.jpg" alt="" title=""/>
                    </div>

                    <!-- data -->
                    <div class="block right">
                        <p class="date">03/17/1999</p>
                        <p class="title">Coins</p>
                        <p class="desc">A coin is a piece of hard material that is standardized in weight, is produced in large quantities in order to facilitate trade, and primarily can be used as a legal tender. Coins are usually metal or a metallic material and sometimes made of synthetic materials, usually in the shape of a disc, and most often issued by a government. Coins are used as a form of money in transactions of various kinds, from the everyday circulation coins to the storage of large numbers of bullion coins. In the present day, coins and banknotes make up currency, the cash forms of all modern money systems.</p>
                        <p class="like">39 Likes</p>
                        <p class="theme">
                            <span class="lifestyle">Lifestyle</span>
                        </p>
                    </div>
                </div>

                <!-- item 16 -->
                <div class="list-item box">
                    <!-- img -->
                    <div class="img left">
                        <img src="assets/img/thumbs/crayons.jpg" alt="" title=""/>
                    </div>

                    <!-- data -->
                    <div class="block right">
                        <p class="date">03/08/1990</p>
                        <p class="title">Crayons</p>
                        <p class="desc">A crayon is a stick of colored wax, charcoal, chalk, or other materials used for writing, coloring, drawing, and other methods of illustration. A crayon made of oiled chalk is called an oil pastel; when made of pigment with a dry binder, it is simply a pastel; both are popular media for color artwork. A grease pencil or china marker (UK chinagraph pencil) is made of colored hardened grease and is useful for marking on hard, glossy surfaces such as porcelain or glass. Some fine arts companies such as Swiss Caran d'Ache manufacture water-soluble crayons, whose colors are easily mixed once applied to media.</p>
                        <p class="like">14 Likes</p>
                        <p class="theme">
                            <span class="lifestyle">Lifestyle</span>
                        </p>
                    </div>
                </div>

            </div>

            <div class="box jplist-no-results text-shadow align-center">
                <p>No results found</p>
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
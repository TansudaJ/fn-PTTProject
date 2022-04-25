<div class="container">
    <div id="carousel-example-2" class="carousel slide carousel-fade z-depth-1-half" data-ride="carousel">
        <!--Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-2" data-slide-to="1"></li>
            <li data-target="#carousel-example-2" data-slide-to="2"></li>
        </ol>
        <!--/.Indicators-->
        <!--Slides-->

        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <div class="view">
                    <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(68).jpg" alt="First slide">
                    <div class="mask rgba-black-light"></div>
                </div>
                <div class="carousel-caption">
                    <h3 class="h3-responsive">Light mask</h3>
                    <p>First text</p>
                </div>
            </div>
            <div class="carousel-item">
                <!--Mask color-->
                <div class="view">
                    <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(6).jpg" alt="Second slide">
                    <!-- 1321 × 583 -->
                    <div class="mask rgba-black-strong"></div>
                </div>
                <div class="carousel-caption">
                    <h3 class="h3-responsive">Strong mask</h3>
                    <p>Secondary text</p>
                </div>
            </div>
            <div class="carousel-item">
                <!--Mask color-->
                <div class="view">
                    <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(9).jpg" alt="Third slide">
                    <div class="mask rgba-black-slight"></div>
                </div>
                <div class="carousel-caption">
                    <h3 class="h3-responsive">Slight mask</h3>
                    <p>Third text</p>
                </div>
            </div>
        </div>
        <!--/.Slides-->
        <!--Controls-->
        <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <!--/.Controls-->
    </div>
</div>



<style>
    @import url('https://fonts.googleapis.com/css2?family=Kodchasan:wght@200&display=swap');


    .card {
        background: #fff;
        box-shadow: 0 6px 10px rgba(0, 0, 0, .08), 0 0 6px rgba(0, 0, 0, .05);
        border: 0;
        border-radius: 1rem;

    }

    .card-img,
    .card-img-top {
        border-top-left-radius: calc(1rem - 1px);
        border-top-right-radius: calc(1rem - 1px);

    }

    .card-img-top {
        width: 100%;
        padding: 15px;
        max-height: 200;
        object-fit: contain;
    }

    .card p {
        font-size: small;
        font-style: italic;
        font-weight: 400;
        color: #4a4a4a;
        text-align: center;
    }

    .card h6 {
        font-size: auto;
        font-family: 'Kodchasan', sans-serif;
        font-weight: bolder;
        text-align: center;
        -webkit-font-smoothing: antialiased;
        text-rendering: optimizeLegibility;
    }

    .row {
        margin: 3%;
    }

    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    body {

        align-items: center;
        justify-content: center;
        background: #20B2AA;
        min-height: 100vh;
    }

    .container {
        display: flex;
        justify-content: center;
    }

    .page-item.activee .page-link {
        background-color: #007bff;
        border-color: #007bff;
        color: #fff;
    }


    .pagination {
        text-align: center;
        margin: 30px 30px 60px;
        user-select: none;
    }


    .pagination li {
        display: inline-block;
        margin: 5px;
        box-shadow: 0 5px 25px rgb(1 1 1 / 10%);

    }

    .pagination li a {
        color: #20B2AA;
        text-decoration: none;
        font-size: 1.2em;
        line-height: 16px;
    }

    .previous-page,
    .next-page {
        background: #0AB1CE;
        width: 80px;
        border-radius: 45px;
        cursor: pointer;
        transition: 0.3s ease;
    }

    .previous-page:hover {
        transform: translateX(-5px);
    }

    .next-page:hover {
        transform: translateX(5px);
    }

    .current-page,
    .dots {
        background: #ccc;
        width: 45px;
        border-radius: 50%;
        cursor: pointer;
    }

    .activee {
        background: #0AB1CE;
    }

    .disable {
        background: #ccc;
    }
</style>
<div class="container-fluid">
    <form method="get" action="<?php echo site_url("vegetation/index"); ?>">
        <div class="row">
            <div class="input-group">

                <input type="text" name="search" class="form-control" placeholder="Search here..." />

                <button type="submit" value="search" name="save" class="btn btn-primary">
                    <i class="material-icons">search</i>
                </button>
            </div>
        </div>


    </form>

    <style>
        /* Font */
        @import url('https://fonts.googleapis.com/css?family=Quicksand:400,700');


        img {
            height: auto;
            max-width: 100%;
            vertical-align: middle;
        }

        .cards {
            display: flex;
            flex-wrap: wrap;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .cards_item {
            display: flex;
            padding: 1rem;
        }

        @media (min-width: 40rem) {
            .cards_item {
                width: 50%;
            }
        }

        @media (min-width: 56rem) {
            .cards_item {
                width: 33.3333%;
            }
        }

        .card {
            background-color: white;
            border-radius: 0.25rem;
            box-shadow: 0 20px 40px -14px rgba(0, 0, 0, 0.25);
            display: flex;
            flex-direction: column;
            overflow: hidden;
        }

        .card_content {
            padding: 1rem;
            background: linear-gradient(to bottom left, #EF8D9C 40%, #FFC39E 100%);
        }

        .card_title {
            color: #ffffff;
            font-size: 1.1rem;
            font-weight: 700;
            letter-spacing: 1px;
            text-transform: capitalize;
            margin: 0px;
        }

        .card_text {
            color: #ffffff;
            font-size: 0.875rem;
            line-height: 1.5;
            margin-bottom: 1.25rem;
            font-weight: 400;
        }

        .made_by {
            font-weight: 400;
            font-size: 13px;
            margin-top: 35px;
            text-align: center;
        }
    </style>


    <div class="row">
        <?php
        foreach ($results as $row) {
        ?>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12" style="margin-bottom: 15px;">
                <div class="card h-100">
                    <img src="<?php echo $row->URL; ?>" class="card-img-top h-100" alt="..." />
                    <div class="card-body">
                        <h6 class="card-title"><?php echo $row->n_common_TH . " (" . $row->n_common_ENG . ")"; ?></h6>
                        <p class="card-text">
                            <?php echo $row->n_scientific; ?>
                        </p>
                    </div>
                    <div class="card-footer text-center">
                        <a href="<?php echo site_url("detail/index/" . $row->vegetationID); ?>" class="btn btn-warning">View</a>
                    </div>

                </div>

            </div>
        <?php
        }
        ?>
    </div>
    <script>
        function infoClick(vegetationID) {

            $.ajax({
                type: "GET",
                url: "http://localhost/fn-PTTProject/index.php/vegetation/vegetationbyID/" + vegetationID,
                contentType: "application/x-www-form-urlencoded;charset=ISO-8859-15",
                dataType: 'json',
                success: function(data) {
                    $vegetation = data['data'][0];

                    $('#recipient-name').val($vegetation['n_prefix']);
                    $('#info_modal').modal('toggle');
                }
            });


        }
    </script>




</div>
<div class="container">
    <div class="pagination">

    </div>
</div>




</div>

</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" charset="utf-8"></script>

<script type="text/javascript">
    function getPageList(totalPages, page, maxLength) {
        function range(start, end) {
            return Array.from(Array(end - start + 1), (_, i) => i + start);
        }

        var sideWidth = maxLength < 9 ? 1 : 2;
        var leftWidth = (maxLength - sideWidth * 2 - 3) >> 1;
        var rightWidth = (maxLength - sideWidth * 2 - 3) >> 1;

        if (totalPages <= maxLength) {
            return range(1, totalPages);
        }

        if (page <= maxLength - sideWidth - 1 - rightWidth) {
            return range(1, maxLength - sideWidth - 1).concat(0, range(totalPages - sideWidth + 1, totalPages));
        }

        if (page >= totalPages - sideWidth - 1 - rightWidth) {
            return range(1, sideWidth).concat(0, range(totalPages - sideWidth - 1 - rightWidth - leftWidth, totalPages));
        }

        return range(1, sideWidth).concat(0, range(page - leftWidth, page + rightWidth), 0, range(totalPages - sideWidth + 1, totalPages));
    }

    $(function() {
        var numberOfItems = $(".card").length;
        var limitPerPage = 20; //How many card items visible per a page
        var totalPages = Math.ceil(numberOfItems / limitPerPage);
        var paginationSize = 7; //How many page elements visible in the pagination
        var currentPage;

        function showPage(whichPage) {
            if (whichPage < 1 || whichPage > totalPages) return false;

            currentPage = whichPage;

            $(".card").hide().slice((currentPage - 1) * limitPerPage, currentPage * limitPerPage).show();

            $(".pagination li").slice(1, -1).remove();

            getPageList(totalPages, currentPage, paginationSize).forEach(item => {
                $("<li>").addClass("page-item").addClass(item ? "current-page" : "dots")
                    .toggleClass("activee", item === currentPage).append($("<a>").addClass("page-link")
                        .attr({
                            href: "javascript:void(0)"
                        }).text(item || "...")).insertBefore(".next-page");
            });

            $(".previous-page").toggleClass("disable", currentPage === 1);
            $(".next-page").toggleClass("disable", currentPage === totalPages);
            return true;
        }

        $(".pagination").append(
            $("<li>").addClass("page-item").addClass("previous-page").append($("<a>").addClass("page-link").attr({
                href: "javascript:void(0)"
            }).text("Prev")),
            $("<li>").addClass("page-item").addClass("next-page").append($("<a>").addClass("page-link").attr({
                href: "javascript:void(0)"
            }).text("Next"))
        );

        $(".card-content").show();
        showPage(1);

        $(document).on("click", ".pagination li.current-page:not(.activee)", function() {
            return showPage(+$(this).text());
        });

        $(".next-page").on("click", function() {
            return showPage(currentPage + 1);
        });

        $(".previous-page").on("click", function() {
            return showPage(currentPage - 1);
        });
    });
</script>
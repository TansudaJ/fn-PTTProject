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

    .text {
        text-align: center;
        margin-top: 20px;
        text-decoration: underline wavy #fff;
        color: #fff;
    }
</style>
<div class="container-fluid">

    <h4 class="text">ต้นไม้แนะนำ</h4>
    <div class="row">
                <?php
                foreach ($plant as $row) {
                ?>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12" style="margin-bottom: 15px;">
                        <div class="card h-100">
                            <?php if ($row->URL == null) { ?>
                                <img src="<?php echo base_url(); ?>image/no-pic.jpg" class="card-img-top h-100" alt="..." />
                            <?php } else { ?>
                                <img src="<?php echo $this->config->item('bn_base_url') .$row->URL; ?>" class="card-img-top h-100" alt="..." />
                            <?php } ?>
                            <div class="card-body">
                                <h6 class="card-title"><?php echo $row->n_common_TH . " (" . $row->n_common_ENG . ")"; ?></h6>
                                <p class="card-text">
                                    <?php if (strlen($row->exclusivity) < 250) {
                                        echo $row->exclusivity;
                                    } else {
                                        echo (substr($row->exclusivity, 0, 250) . "...");
                                    } ?>
                                </p>
                            </div>
                            <div class="card-footer text-center">
                                <a href="<?php echo site_url("plant2/index/" . $row->plantID); ?>" class="btn btn-warning">View</a>
                            </div>

                        </div>

                    </div>
                <?php
                }
                ?>
            </div>
    
   

    <script>
        function infoClick(plantID) {

            $.ajax({
                type: "GET",
                url: "http://localhost/fn-PTTProject/index.php/plant/plantID/" + plantID,
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

<div class="container">
    <div class="pagination">

    </div>
</div>


</div>




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
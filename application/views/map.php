<div class="holder">
    <img src="<?php echo $this->config->item('bn_base_url') . $img_map[0]["imageURL"] ?>" data-imgsize="1920x1080" alt="Workplace" usemap="#image-map" id="project_map">
    <map name="image-map">
        <?php echo str_replace("link_image_id_is_", site_url("welcome/index"), $img_map[0]["imagedetail"]); ?>
    </map>
</div>

<?php
if ($showplant) { ?>

    <table style="width:100%">

        <tr align="center">
            <th>ลำดับ</th>
            <th>รหัสต้นไม้</th>
            <th>ชื่อสามัญ</th>
            <th>ควาามน่าสนใจ</th>
            <th>ละติจูด,ลองติจูด</th>
            <th></th>
        </tr>

        <?php

        $i = 1;
        foreach ($showplantlist as $row) {
        ?>
            <tr>
                <td align="center"><?php
                                    echo $i;
                                    $i++;
                                    ?>
                </td>
                <td align="center"><?php echo $row->vegetation_vegetationID; ?></td>
                <td class="cell-hyphens"><?php echo $row->n_common_TH . " (" . $row->n_common_ENG . ")"; ?></td>
                <td class="cell-hyphens"><?php if (strlen($row->exclusivity) < 250) {
                                                echo $row->exclusivity;
                                            } else {
                                                echo (substr($row->exclusivity, 0, 250) . "...");
                                            } ?>
                </td>
                <td class="cell-hyphens"><?php echo $row->coordinates; ?></td>
                <td align="center"> <a href="<?php echo site_url("plant2/index/" . $row->plantID); ?>" class="btn btn-warning">View</a></td>
            </tr>
        <?php
        }
        ?>
    </table>
<?php
}
?>

<?php
//if ($showplant) {
   // var_dump($showplantlist);
//}
?>




<style>
    body {

        align-items: center;
        justify-content: center;
        background: #20B2AA;
        min-height: 100vh;
    }

    .holder {
        max-width: 1222px;
        width: 100%;
        margin: 0 auto;
    }

    img {
        width: 100%;
    }

    th,
    td {
        border: 5px solid #96D4D4;
        border-style: double;
        padding: 5px;
    }

    table {
        margin-top: 10px;
    }

    .cell-hyphens {
        word-wrap: break-word;
        max-width: 1px;
        -webkit-hyphens: auto;
        /* iOS 4.2+ */
        -moz-hyphens: auto;
        /* Firefox 5+ */
        -ms-hyphens: auto;
        /* IE 10+ */
        hyphens: auto;
    }
</style>
<script>
    class ImageResize {

        constructor(config) {
            const {
                width,
                height,
                element
            } = config;

            this.imageW = width;
            this.imageH = height;
            this.imageMap = document.querySelector(element);
            const mapId = this.imageMap.getAttribute('usemap');
            const mapElem = `map[name="${mapId.substring(1, mapId.length)}"]`;
            const area = document.querySelector(mapElem).children;
            this.areaArray = Array.from(area);

            window.addEventListener('resize', this.resizeEvent);
            setTimeout(this.imgMap, 500);
        }

        getCoordinates = (elem) => {
            let areaCords = elem.dataset.coords;

            if (!areaCords) {
                areaCords = elem.getAttribute('coords');

                elem.dataset.coords = areaCords;
            }

            return areaCords;
        };
        imgMap = () => {
            this.wPercent = this.imageMap.offsetWidth / 100;
            this.hPercent = this.imageMap.offsetHeight / 100;

            this.areaArray.forEach(this.areaLoop);
        };

        areaLoop = (area) => {
            const coordinates = this.getCoordinates(area).split(',');
            const coordsPercent = coordinates.map(this.mapCoords).join();

            area.setAttribute('coords', coordsPercent);
        };

        mapCoords = (coordinate, index) => {
            const parseCord = parseInt(coordinate, 10);

            return index % 2 === 0 ?
                this.coordinatesMath(parseCord, this.imageW, this.wPercent) :
                this.coordinatesMath(parseCord, this.imageH, this.hPercent);
        };

        coordinatesMath = (coordinates, imgVal, percentVal) =>
            (coordinates / imgVal) * 100 * percentVal;


        resizeEvent = () => {
            this.imgMap();
        };
    }


    const resizeImg = new ImageResize({
        width: 1920,
        height: 1080,
        element: '#project_map'
    })
</script>
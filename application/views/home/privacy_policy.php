<div class="container-fluid">
    <div class="col-lg-12">
        <?php
        if ($meta) {
            if (!empty($meta->page_title)) {
                echo '<h1 class="mb-3">' . $meta->page_title . '</h1>';
            }
            if (!empty($meta->sub_heading)) {
                echo '<div class="mb-3" style="font-size: 20px;font-weight: normal;">' . $meta->sub_heading . '</div>';
            }
        }
        ?>
    </div>
</div>
<div class="container-fluid">
    <div class="col-lg-12" style="padding-right: 0px; padding-left: 0px;">
        <?php
        if ($meta) {
            if (!empty($meta->page_html)) {
                echo '<div style="margin-top:4rem;margin-bottom:5rem;font-size: 20px;font-weight: normal;">' . $meta->page_html . '</div>';
            }
        }
        ?>
    </div>
</div>
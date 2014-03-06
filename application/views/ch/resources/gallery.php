<div class="row well">
    <div class="col-lg-12">
        <div class="page-header">
            <h1>照片集錦</h1>
        </div>

        <?php
            
            print("<br>");
            foreach ($albums as $key => $album)
            {
                $img_path = "gallery/" . $album['name'] . '/' . $album['cover_img_name'];
                $coverImg = base_url() . $img_path;
                $data_src = "";

                # Display a dump image while the image file doesn't exist.
                if ( ! file_exists($img_path))
                {
                    $data_src = "holder.js/250x250/auto/gray:#ffffff/text:Missing Photo";
                }
                
                $albumUrl = site_url() . '/pages/album/' . $album['id'];
                printf('<div class="col-lg-3">');
                printf('<a href="%s">', $albumUrl);
                printf('<img class="img-thumbnail" src="%s" data-src="%s" />', $coverImg, $data_src);
                printf('</a>');
                printf('<b>%s</b>', $album['title']);
                printf('</div>');
            }
            
        ?>
    </div>
</div>
<?php echo '<'.'?xml version="1.0" encoding="UTF-8"?'.'>';?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">

    <url>
        <?php

        foreach(explode("\n", shell_exec("find out -iname '*.html'")) as $html) {
            $filename = $html;
            $html = preg_replace("/index.html$/", "", $html);
            $html = preg_replace("/^out/", "", $html);
            if ( empty($html)) continue;
            if ( $html == "/404.html") continue;
            $title = $html;
            if ( preg_match("/<title>(.*)<\\/title>/", file_get_contents($filename), $m) ) {
                $title = $m[1];
            }
            echo "<loc>https://www.scalawilliam.com/$html</loc>";
        }
        ?>
    </url>

</urlset>

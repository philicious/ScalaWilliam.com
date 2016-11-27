<?php
$title = 'Sitemap';
if ( !defined('DIRECT')) {
require(dirname(__FILE__).DIRECTORY_SEPARATOR."shared".DIRECTORY_SEPARATOR."render.inc.php");

?>
<div class="section" id="william">
    <h2>Sitemap</h2>
</div>
<?php } ?>
<section class="sitemap">
    <dl>
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
            echo "<dt><a href='$html'>$title</a></dt>";
            echo "<dd><a href='$html'>$html</a></dd>";
        }
        ?>
    </dl>
</section>
<?php
if ( !defined('DIRECT')) {
    echo $foot;
}

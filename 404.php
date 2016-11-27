<?php
require(dirname(__FILE__).DIRECTORY_SEPARATOR."shared".DIRECTORY_SEPARATOR."render.inc.php");
define('DIRECT', 'true');
?>
    <div class="section" id="william">
        <h2>Sorry, we could not find the page.</h2>
        <p>Here is a list of pages available:</p>
        <?php require(dirname(__FILE__).DIRECTORY_SEPARATOR."sitemap.php"); ?>
    </div>

<?php echo $foot;

<?php
require "blackpeppertest/vendor/autoload.php";

use bagduch\blackpepper\Csvloader;
$loader = new Csvloader("");
$datas = $loader->get();
if (sizeof($datas) < 1)
{
    exit("no file found");
}
?>

<html class="gr__blackpepper_co_nz">
<head><title>Sample</title>
    <link rel="stylesheet" href="css/blackpepper.css">
</head>

<body data-gr-c-s-loaded="true">
<header>
    <a href="http://www.blackpepper.co.nz/"><img
                src="https://blackpepper-co-nz.imgix.net/images/blackpepper-logo~1555995053.png?fit=fillmax&amp;auto=format&amp;s=695decfe4b96a66a25d25705824960f6"></a>
</header>

<main>
    <?php foreach ($datas as $data) {
        ?>
        <div class="set">
            <div class="pad">
                <h2><?= $data['label'] ?></h2>
                <?php
                foreach ($data['data'] as $company) {
                    ?>
                    <a href="<?= $company->getUrl(); ?>" title="<?= $company->getName(); ?>" target="_blank"><img
                                src="<?= $company->getLogo(); ?>" alt="<?= $company->getName(); ?>"></a>

                    <?php
                }
                ?>
            </div>
        </div>
        <?php
    }
    ?>
</main>
</body>
</html>

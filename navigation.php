<?php $activeClass = "aktiivi"; ?>

<div id="otsake">
    <div id="valikko">
        <ul>
            <li><a href="index.php" title="Palaa etusivulle" class="<?= $activeTab == "index" ? $activeClass : "" ?>">Etusivu</a></li>
            <li><a href="nayttelyt.php" title="Näyttelyt" class="<?= $activeTab == "nayttelyt" ? $activeClass : "" ?>">Näyttelyt</a></li>
            <li><a href="galleria.php" title="Galleria" class="<?= $activeTab == "galleria" ? $activeClass : "" ?>">Galleria</a></li>
            <li><a href="cv.php" title="Curriculum Vitae" class="<?= $activeTab == "cv" ? $activeClass : "" ?>">CV</a></li>
            <li><a href="yhteys.php" title="Yhteystiedot" class="<?= $activeTab == "yhteys" ? $activeClass : "" ?>" style="border-right: 0pt none;">Yhteystiedot</a></li>
        </ul>
    </div>
    <a href="index.php"><img src="kuvat/logo.gif" alt="Taiteilija Sirkka Pelkonen" border="none" /></a>
</div>
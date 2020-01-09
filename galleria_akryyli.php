<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fi" lang="fi">
    <?php
        $title = "Sirkka Pelkonen - Akryylit";
        $activeTab = "galleria";
    ?>
    <?php include_once('header.php'); ?>

    <body>
        <div id="vrapperi">
            <div id="paalaatikko">
                <?php include_once('navigation.php'); ?>

                <div id="sisaltolaatikko">
                    <div class="teksti">
                        <h2>Akryylit</h2>
                        Klikkaamalla kuvaa näet maalauksen suurempana. <br /><br />

                        <div id="gallery">
                            <div class="pikkukuva">
                                <a href="kuvat/ahventaulu.jpg" title="Ahventaulu, 33x41cm, akryyli, 250&#8364;, myydään yhdessä">
                                    <img src="kuvat/ahventaulu_100y.jpg" width='100' alt="Ahventaulu" />
                                </a>
                            </div>
                            <div class="pikkukuva">
                                <a href="kuvat/juuret_pinnalla.jpg" title="Juuret pinnalla, mutta silti niin lujasti maassa, 40x80cm, 250&#8364;">
                                    <img src="kuvat/juuret_pinnalla_100y.jpg" width='100' alt="Juuret pinnalla, mutta silti niin lujasti maassa" />
                                </a>
                            </div>
                            <div class="pikkukuva">
                                <a href="kuvat/kasvi_jolla_on_sydanta.jpg" title="Kasvi jolla on sydäntä, 50x60cm, akryyli, 200&#8364;">
                                    <img src="kuvat/kasvi_jolla_on_sydanta_100y.jpg" width='100' alt="Kasvi jolla on sydäntä" />
                                </a>
                            </div>
                            <div class="pikkukuva">
                                <a href="kuvat/kampela.jpg" title="Kampela, 2x 33x41cm, akryyli, myyty">
                                    <img src="kuvat/kampela_100y.jpg" width='100' alt="Kampela" />
                                </a>
                            </div>
                            <br class="clear" />
                        </div>
                        <br /><br />

                        <div id="paluulinkki">
                            <a href="galleria.php" class="galleria_ala">Takaisin galleriaan</a><br /><br />
                        </div>
                    </div> 
                </div>
            </div>
            <?php include_once('footer.php'); ?>
        </div>
        
        <?php include_once('lightbox_script.php'); ?>
    </body>
</html>
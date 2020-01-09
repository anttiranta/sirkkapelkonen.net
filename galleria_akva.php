<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fi" lang="fi">
    <?php
        $title = "Sirkka Pelkonen - Akvarellit";
        $activeTab = "galleria";
    ?>
    <?php include_once('header.php'); ?>

    <body>
        <div id="vrapperi">
            <div id="paalaatikko">
                <?php include_once('navigation.php'); ?>

                <div id="sisaltolaatikko">
                    <div class="teksti">
                        <h2>Akvarellit</h2>
                        Klikkaamalla kuvaa näet maalauksen suurempana. <br /><br />

                        <div id="gallery">
                            <div class="pikkukuva"><a href="kuvat/aavikon_ruusu.jpg" title="Aavikon ruusu, 73x53cm, akvarelli, 450&#8364;"><img src="kuvat/aavikon_ruusu_100y.jpg" width='100' alt="Aavikon ruusu" /></a></div>
                            <div class="pikkukuva"><a href="kuvat/ransistynyt_kuusi.jpg" title="Ränsistynyt kuusi, 53x73cm, akvarelli, 350&#8364;"><img src="kuvat/ransistynyt_kuusi_100y.jpg" width='100' alt="Ränsistynyt kuusi" /></a></div>
                            <div class="pikkukuva"><a href="kuvat/noitarumpu.jpg" title="Noitarumpu, 51x77cm, akvarelli, ei myytävänä"><img src="kuvat/noitarumpu_100y.jpg" width='100' alt="Noitarumpu" /></a></div>
                            <div class="pikkukuva"><a href="kuvat/skeittari_poika.jpg" title="Skeittari poika, 53x73cm, akvarelli, ei myytävänä"><img src="kuvat/skeittari_poika_100y.jpg" width='100' alt="Skeittari poika" /></a></div> 
                            <div class="pikkukuva"><a href="kuvat/rumpaliukko.jpg" title="Rumpali poika, 53x73cm, akvarelli, ei myytävänä"><img src="kuvat/rumpaliukko_100y.jpg" width='100' alt="Rumpali poika" /></a></div> 
                            <br class="clear" />
                        </div>
                        <br /><br />

                        <div id="paluulinkki">
                            <a href="galleria.php" class="galleria_ala">Takaisin galleriaan</a>
                            <br /><br />
                        </div>
                        
                    </div> 
                </div>
            </div>
            <?php include_once('footer.php'); ?>
        </div>
        
        <?php include_once('lightbox_script.php'); ?>
    </body>
</html>
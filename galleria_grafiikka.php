<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fi" lang="fi">
    <?php
        $title = "Sirkka Pelkonen - Grafiikkatyöt";
        $activeTab = "galleria";
    ?>
    <?php include_once('header.php'); ?>

    <body>
        <div id="vrapperi">
            <div id="paalaatikko">
                <?php include_once('navigation.php'); ?> 

                <div id="sisaltolaatikko">
                    <div class="teksti">
                        <h2>Grafiikkatyöt</h2>
                        Klikkaamalla kuvaa näet työn suurempana. Grafiikkatöitä löytyy myös erivärisinä.<br /><br />

                        <div id="gallery">
                            <div class="pikkukuva"><a href="kuvat/hirvi_ja_koira.jpg" title="Hirvi ja koira, 25x29cm, grafiikkatyö, 80&#8364;"><img src="kuvat/hirvi_ja_koira_100y.jpg" width='100' alt="Hirvi ja koira" /></a></div>
                            <div class="pikkukuva"><a href="kuvat/metsan_elamaa.jpg" title="Metsän elämää, 25x29cm, grafiikkatyö, 80&#8364;"><img src="kuvat/metsan_elamaa_100y.jpg" width='100' alt="Metsän elämää" /></a></div>
                            <div class="pikkukuva"><a href="kuvat/graf1.jpg" title="Osaset, 12x14,5cm, grafiikkatyö, 50&#8364;"><img src="kuvat/graf1_100y.jpg" width='100' alt="Osaset" /></a></div>
                            <div class="pikkukuva"><a href="kuvat/graf3.jpg" title="Perhosen kotilo, 21,5x15cm, grafiikkatyö, 50&#8364;"><img src="kuvat/graf3_100y.jpg" width='100' alt="Perhosen kotilo" /></a></div>
                            <div class="pikkukuva"><a href="kuvat/graf4.jpg" title="Lehdet, 24,5x15cm, grafiikkatyö, 50&#8364;"><img src="kuvat/graf4_100y.jpg" width='100' alt="Lehdet" /></a></div>
                            <div class="pikkukuva"><a href="kuvat/graf5.jpg" title="Ruusu, 15x17cm, grafiikkatyö, 50&#8364;"><img src="kuvat/graf5_100y.jpg" width='100' alt="Ruusu" /></a></div>
                            <br class="clear" />

                            <div class="pikkukuva"><a href="kuvat/graf2.jpg" title="Japaninkukka, 20x24,5cm, grafiikkatyö, 50&#8364;"><img src="kuvat/graf2_100y.jpg" width='100' alt="Japaninkukka" /></a></div>
                            <br class="clear" />
                        </div>
                        <br /><br />

                        <div id="paluulinkki">
                            <a href="galleria.php" class="galleria_ala">Takaisin galleriaan</a><br /><br />
                        </div>
                        
                    </div>
                </div>
            </div>
            <?php include('footer.php'); ?>
        </div>
        
        <?php include_once('lightbox_script.php'); ?>
    </body>
</html>
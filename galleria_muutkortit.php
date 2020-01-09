<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fi" lang="fi">
    <?php
        $title = "Sirkka Pelkonen - Autokortit";
        $activeTab = "galleria";
    ?>
    <?php include_once('header.php'); ?>

    <body>
        <div id="vrapperi">
            <div id="paalaatikko">
                <?php include_once('navigation.php'); ?> 

                <div id="sisaltolaatikko">
                    <div class="teksti">
                        <h2>Vanhat autot</h2>
                        Klikkaamalla kuvaa näet kortin suurempana.<br /><br />

                        <div id="gallery">
                            <div class="pikkukuva"><a href="kuvat/herrasmies_ja_hienot_rouvat.jpg" title="Herrasmies ja hienot rouvat, 15x10cm, kortti"><img src="kuvat/herrasmies_ja_hienot_rouvat_100y.jpg" width='100' alt="Herrasmies ja hienot rouvat" /></a></div>
                            <div class="pikkukuva"><a href="kuvat/huilihetki.jpg" title="Huilihetki, 15x10cm, kortti"><img src="kuvat/huilihetki_100y.jpg" width='100' alt="Huilihetki" /></a></div>
                            <div class="pikkukuva"><a href="kuvat/hakaponton_huolto.jpg" title="Häkäpöntön huolto, 15x10cm, kortti"><img src="kuvat/hakaponton_huolto_100y.jpg" width='100' alt="Häkäpöntön huolto" /></a></div>
                            <div class="pikkukuva"><a href="kuvat/haapari.jpg" title="Hääpari, 15x10cm, kortti"><img src="kuvat/haapari_100y.jpg" width='100' alt="Hääpari" /></a></div>
                            <div class="pikkukuva"><a href="kuvat/kevatta_rinnassa.jpg" title="Kevättä rinnassa, 15x10cm, kortti"><img src="kuvat/kevatta_rinnassa_100y.jpg" width='100' alt="Kevättä rinnassa" /></a></div>
                            <div class="pikkukuva"><a href="kuvat/kylla_herkkusuiden_kelpaa.jpg" title="Kyllä herkkusuiden kelpaa, 15x10cm, kortti"><img src="kuvat/kylla_herkkusuiden_kelpaa_100y.jpg" width='100' alt="Kyllä herkkusuiden kelpaa" /></a></div>
                            <br class="clear"/>

                            <div class="pikkukuva"><a href="kuvat/mielenkiintoista_katseltavaa.jpg" title="Mielenkiintoista katseltavaa, 15x10cm, kortti"><img src="kuvat/mielenkiintoista_katseltavaa_100y.jpg" width='100' alt="Mielenkiintoista katseltavaa" /></a></div>
                            <div class="pikkukuva"><a href="kuvat/rakastunut_nuorimies.jpg" title="Rakastunut nuorimies, 15x10cm, kortti"><img src="kuvat/rakastunut_nuorimies_100y.jpg" width='100' alt="Rakastunut nuorimies" /></a></div>
                            <div class="pikkukuva"><a href="kuvat/vientia_pukkaa.jpg" title="Vientiä pukkaa, 15x10cm, kortti"><img src="kuvat/vientia_pukkaa_100y.jpg" width='100' alt="Vientiä pukkaa" /></a></div>
                            <div class="pikkukuva"><a href="kuvat/vuosimallia_1911.jpg" title="Vuosimallia 1911, 15x10cm, kortti"><img src="kuvat/vuosimallia_100y.jpg" width='100' alt="Vuosimallia 1911" /></a></div>
                            <br class="clear" />
                        </div>
                        <br /><br />

                        <div id="paluulinkki">
                            <a href="galleria_kortit.php" class="galleria_ala">Takaisin kortteihin</a><br /><br />
                        </div>

                    </div> 
                </div>
            </div>
            <?php include('footer.php'); ?>
        </div>
        
        <?php include_once('lightbox_script.php'); ?>
    </body>
</html>
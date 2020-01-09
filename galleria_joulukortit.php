<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fi" lang="fi">
    <?php
        $title = "Sirkka Pelkonen - Joulukortit";
        $activeTab = "galleria";
    ?>
    <?php include_once('header.php'); ?>

    <body>
        <div id="vrapperi">
            <div id="paalaatikko">
                <?php include_once('navigation.php'); ?> 

                <div id="sisaltolaatikko">
                    <div class="teksti">
                        <h2>Joulukortit</h2>
                        Klikkaamalla kuvaa näet kortin suurempana.<br /><br />

                        <div id="gallery">
                            <div class="pikkukuva"><a href="kuvat/jouluikkuna_ostoksilla.jpg" title="Jouluikkuna ostoksilla, 15x10cm, joulukortti"><img src="kuvat/jouluikkuna_ostoksilla_100y.jpg" width='100' alt="Jouluikkuna ostoksilla" /></a></div>
                            <div class="pikkukuva"><a href="kuvat/pukkia_odotellessa.jpg" title="Pukkia odotellessa, 15x10cm, joulukortti"><img src="kuvat/pukkia_odotellessa_100y.jpg" width='100' alt="Pukkia odotellessa" /></a></div>
                            <div class="pikkukuva"><a href="kuvat/lumiukon_iloinen_joulu.jpg" title="Lumiukon iloinen joulu, 15x10cm, joulukortti"><img src="kuvat/lumiukon_iloinen_joulu_100y.jpg" width='100' alt="Lumiukon iloinen joulu" /></a></div>
                            <div class="pikkukuva"><a href="kuvat/nilin_asukin_joulu.jpg" title="Nilin asukin Joulu, 15x10cm, joulukortti"><img src="kuvat/nilin_asukin_joulu_100y.jpg" width='100' alt="Nilin asukin Joulu" /></a></div>
                            <div class="pikkukuva"><a href="kuvat/lumiporo_ja_iloiset_veitikat.jpg" title="Lumiporo ja iloiset veitikat, 15x10cm, joulukortti"><img src="kuvat/lumiporo_ja_iloiset_veitikat_100y.jpg" width='100' alt="Lumiporo ja iloiset veitikat" /></a></div>
                            <div class="pikkukuva"><a href="kuvat/onko_kiltteja_lapsia.jpg" title="Onko kilttejä lapsia?, 15x10cm, joulukortti"><img src="kuvat/onko_kiltteja_lapsia_100y.jpg" width='100' alt="Onko kilttejä lapsia?" /></a></div>
                            <br class="clear"/>

                            <div class="pikkukuva"><a href="kuvat/oma_kotienkeli.jpg" title="Oma kotienkeli, 15x10cm, joulukortti"><img src="kuvat/oma_kotienkeli_100y.jpg" width='100' alt="Oma kotienkeli" /></a></div>
                            <div class="pikkukuva"><a href="kuvat/hyvan_joulun_sanantuoja.jpg" title="Hyvän Joulun sanantuoja, 15x10cm, joulukortti"><img src="kuvat/hyvan_joulun_sanantuoja_100y.jpg" width='100' alt="Hyvän Joulun sanantuoja" /></a></div>
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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fi" lang="fi">
    <?php
        $title = "Sirkka Pelkonen - Pääsiäiskortit";
        $activeTab = "galleria";
    ?>
    <?php include_once('header.php'); ?>

    <body>
        <div id="vrapperi">
            <div id="paalaatikko">
                <?php include_once('navigation.php'); ?> 

                <div id="sisaltolaatikko">
                    <div class="teksti">
                        <h2>Pääsiäiskortit</h2>
                        Klikkaamalla kuvaa näet kortin suurempana.<br /><br />

                        <div id="gallery">
                            <div class="pikkukuva"><a href="kuvat/paasiaiskortti.jpg" title="Pääsiäiskortti, 15x10cm, kortti"><img src="kuvat/paasiaiskortti_100y.jpg" width='100' alt="Pääsiäiskortti" /></a></div>
                            
                            <?php foreach (range(2, 14) as $i) { ?>
                                <div class="pikkukuva"><a href="kuvat/paasiaiskortti<?= $i ?>.jpg" title="Pääsiäiskortti <?= $i ?>, 15x10cm, kortti"><img src="kuvat/paasiaiskortti<?= $i ?>_100y.jpg" width='100' alt="Pääsiäiskortti <?= $i ?>" /></a></div>
                                <?php if ($i % 6 == 0) { ?>
                                    <br class="clear"/>
                                <?php }  ?>
                            <?php } ?>
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
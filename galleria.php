<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fi" lang="fi">
    <?php
        $title = "Sirkka Pelkonen - Galleria";
        $activeTab = "galleria";
    ?>
    <?php include_once('header.php'); ?>

    <body>
        <div id="vrapperi">
            <div id="paalaatikko">
                <?php include_once('navigation.php'); ?>

                <div id="sisaltolaatikko">
                    <div class="teksti">
                        <h2>Galleria</h2>	
                        Tältä sivulta läydät töitäni. 
                        Jos joku työ miellyttää erityisesti <a href="yhteys.php" title="Yhteystiedot" class="underline">ota yhteyttä</a>. 
                        <br /><br />

                        <table width='100%'><tr>
                                <td valign='bottom' width='150'>
                                    <a href="galleria_akva.php"><img src="kuvat/akvarellit2.jpg" alt="Akvarellit" width='150' /></a><br />
                                    <a href="galleria_akva.php" class="galleria"> Akvarellit</a>
                                </td>
                                <td valign='bottom' width='150'>
                                    <a href="galleria_akryyli.php"><img src="kuvat/akryylit.jpg" alt="Akryylit" width='150' /></a><br />
                                    <a href="galleria_akryyli.php" class="galleria"> Akryylit</a>
                                </td>
                                <td valign='bottom' width='150'>
                                    <a href="galleria_oljy.php"><img src="kuvat/oljyvarit2.jpg" alt="Öljyvärit" width='150' /></a><br />
                                    <a href="galleria_oljy.php" class="galleria"> Öljyvärit</a>
                                </td>
                                <td valign='bottom' width='150'>
                                    <a href="galleria_kortit.php"><img src="kuvat/kortit.jpg" alt="Kortit" width='150' /></a><br />
                                    <a href="galleria_kortit.php" class="galleria">Kortit</a>
                                </td>
                            </tr></table>
                        <?php 
                            foreach(range(1, 5) as $i) {
                                echo '<br />';
                            }
                        ?>
                    </div>
                </div>
            </div>

            <?php include_once('footer.php'); ?>
        </div>
    </body>
</html>
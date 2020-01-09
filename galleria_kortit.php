<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fi" lang="fi">
    <?php
        $title = "Sirkka Pelkonen - Kortit";
        $activeTab = "galleria";
    ?>
    <?php include_once('header.php'); ?>

    <body>
        <div id="vrapperi">
            <div id="paalaatikko">
                <?php include_once('navigation.php'); ?>

                <div id="sisaltolaatikko">
                    <div class="teksti">
                        <h2>Kortit</h2>	
                        Klikkaamalla kuvaa aukeaa toinen sivu josta löytyy alakategorian kortit. 
                        <br /><br />

                        <table width='100%'>
                            <tr>
                                <td valign='bottom' width='150'><a href="galleria_muutkortit.php"><img src="kuvat/kortit.jpg" alt="Kortit" width='150' /></a><br />
                                    <a href="galleria_muutkortit.php" class="galleria">Vanhat autot</a>
                                </td>
                                <td valign='bottom' width='150'><a href="galleria_joulukortit.php"><img src="kuvat/joulukortit.jpg" alt="Joulukortit" width='150' /></a><br />
                                    <a href="galleria_joulukortit.php" class="galleria">Joulukortit</a>
                                </td>
                                <td valign='bottom' width='150'><a href="galleria_paasiaiskortit.php"><img src="kuvat/paasiaiskortit.jpg" alt="Pääsiäiskortit" width='150' /></a><br />
                                    <a href="galleria_paasiaiskortit.php" class="galleria">Pääsiäiskortit</a>
                                </td>
                                <td valign='bottom' width='150'><a href="galleria_kesakortit.php"><img src="kuvat/kesakortit.jpg" alt="Kesäaiheiset kortit" width='150' /></a><br />
                                    <a href="galleria_kesakortit.php" class="galleria">Kesäaiheiset kortit</a>
                                </td>
                            </tr>
                        </table>
                        <?php 
                            foreach(range(1, 5) as $i) {
                                echo '<br />';
                            }
                        ?>
                        
                        <div id="paluulinkki">
                            <a href="galleria.php" class="galleria_ala">Takaisin galleriaan</a><br /><br />
                        </div>
                    </div>
                </div>
            </div>
            
            <?php include('footer.php'); ?>
        </div>
    </body>
</html>
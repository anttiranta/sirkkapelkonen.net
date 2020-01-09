<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fi" lang="fi">
    <?php
        $title = "Sirkka Pelkonen - Yhteystiedot";
        $activeTab = "yhteys";
    ?>
    <?php include_once('header.php'); ?>

    <body>
        <div id="vrapperi">
            <div id="paalaatikko">
                <?php include_once('navigation.php'); ?> 

                <div id="sisaltolaatikko">
                    <img src="kuvat/raatteentien_piiritys_370y.jpg" alt="Sirkka Pelkonen: Raatteentien taistelu" class="kuva" />
                    <div class="teksti">
                        <?php
                        if (isset($_GET['message'])) {
                            echo base64_decode($_GET['message']) . '<br />';
                        } else { ?>
                            <h2>Ota yhteyttä</h2>

                            Puhelin: 040-7780381<br />
                            Osoite: Hiidentie 2 E 66, 90550 Oulu<br />
                            Sähköposti: pelkonen.sirkka(at)gmail.com<br />

                            <form name="lomake" action="yhteys_laheta.php" id="lomake" method="post" style="overflow: auto;">
                                <div id="lomake-vrapperi">
                                    <div>
                                        <label for="nimi">Nimi:</label>
                                        <input style="width:280px" type="text" id="nimi" name="nimi" size="40" maxlength="50" class="required" />
                                    </div>
                                    <div>
                                        <label for="email">Sähköposti: </label>
                                        <input style="width:280px" type="text" id="email" name="email" size="40" maxlength="50" class="required email" />
                                    </div>
                                    <div>
                                        <label for="aihe">Aihe: </label>
                                        <input style="width:280px" type="text" name="aihe" size="40" maxlength="50" />
                                    </div>
                                    <div>
                                        <label for="viesti">Viesti:</label>
                                        <textarea id="viesti" style="width:280px" name="viesti" cols=36 ROWS=6 class="required"></textarea>
                                    </div>
                                    <div>
                                        <input type="submit" name="submit" value="Lähetä viesti" />
                                    </div>
                                    <input name="info" id="info" type="text" class="hidden" size="1" />
                                </div>
                            </form>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <?php include_once('footer.php'); ?>
        </div>

        <script type="text/javascript">
            $(document).ready(function () {
                $("#lomake").validate()({
                    debug: false,
                    rules: {
                        nimi: "required",
                        email: {
                            required: true,
                            email: true
                        },
                        viesti: "required"
                    },
                    messages: {
                        nimi: "Nimi täytyy antaa.",
                        email: "Sähköposti täytyy antaa.",
                        viesti: "Viesti täytyy antaa."
                    }
                });
            });
        </script>
    </body>
</html>
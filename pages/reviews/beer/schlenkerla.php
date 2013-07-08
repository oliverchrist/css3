<?php
$basePath = $_SERVER['DOCUMENT_ROOT'];
if(substr($basePath, -1, 1) != '/') { $basePath .= '/'; }
?>
<!DOCTYPE html>
<html>
    <head>
        <?php include $basePath . 'components/global/head.php'; ?>
    </head>
    <body>
        <div class="website">
            <?php include $basePath . 'components/global/header.php'; ?>
            <div id="main">
                <?php include $basePath . 'components/global/subnavi.php'; ?>
                <section class="content">
                    <h1>Aecht Schlenkerla Rauchbier</h1>
                    <a class="floatLeft christbox" href="images/schlenkerla.JPG">
                        <img src="images/schlenkerlaThumb.JPG" alt="Schlenkerla" />
                    </a>
                    <h2>Das Original unter den Bieren</h2>
                    <p>Bamberg und Rauchbier gehören zusammen, eine Liaison, die nicht ohne Folgen geblieben ist. Ihr Lieblingskind ist das "Schlenkerla": Bambergs ergiebigste, meistbesuchte und traditionsreichste Rauchbierquelle. Sie entspringt im Gewinkel der Altstadt, fast akkurat zu Füßen des Hohen Doms, im alten Haus Dominikanerstraße 6, aus dessen Fachwerk sommers die Geranien leuchten. Wer hier nicht eingekehrt ist und nicht den würzigen, unverwechselbaren Geschmack des "Aecht Schlenkerla Rauchbier" gekostet hat, der darf nicht behaupten, in Bamberg gewesen zu sein. "Schlenkerla" ist längst ein Bamberger Zauberwort geworden, doch wissen viele noch nicht, wie diese urige Vokabel zustande gekommen ist. Pate stand der Volksmund. Er nannte einen früheren Brauer des Hauses wegen seines schlenkernden Gangs, der die Folge eines Unfalles war, einfach "das Schlenkerla" und verlieh diesen Namen auch dem seit Jahrhunderten bestehenden Brauhaus. Obwohl mittlerweile die sechste Schlenkerla-Brauer-Generation am Faß steht, ist es dabei bis heute geblieben.</p>
                    <p>Rauchbier vom "Schlenkerla" ist ein sehr dunkles, herbwürziges, untergäriges Märzenbier mit 13,5 Prozent Stammwürze, das entspricht einem Alkoholgehalt von ca. 5,1 Prozent. Keine Frage: Es gibt stärkere Biere, doch sollte man das
                    deswegen nicht unterschätzen. Es kann einen ganz schön schlenkern. Sein - wie die Kenner sagen - nach frischem Geräucherten schmeckendes Aroma wird dadurch erzielt, daß der Rauch brennender Buchenholzscheite - ein würziger, duftender Rauch - bereits auf der Schlenkerla-Darre dem Malz vermählt wird, bevor es sich mit edlem Hopfen im Sud vermischt und im 700jährigen Felsenkeller unterm Stephansberg zu einem Bier reift, das großartig süffig schmeckt, besonders wenn es direkt im "Schlenkerla" getrunken wird. Ein Original unter den Bieren, auch unter den bayerischen. Man trinkt's an weißgescheuerten Holztischen, die unter einer Tischdecke zu verstecken eine Sünd' wär', zu Häupten eine Balkendecke, noch dunkler als das tiefbraune Bier. Trinkt's "drüben" in der Klause, die an das 1310 erbaute alte Dominikanerkloster erinnert, aus dessen Beständen die Brauerei gewachsen ist, oder im Hausflur, wo's auch schmeckt.</p>
                    <p>Der Kenner trinkt genüßlich langsam, doch mit Ausdauer und Ziel. Er weiß, daß das zweite Seidla (Halbliter) besser schmeckt als das erste, und das dritte bereits besser als das zweite. Er trinkt's zum Frühschoppen und am Nachmittag zur Brotzeit, zu der man sich heißen Leberkäs' und Kümmelwecken holt, zu denen sder Bamberger "Kipfla" sagt. Trinkt's zur Bierbrauervesper aus zweierlei Preßsack, Rauchfleisch und Handkäse, zu Bratwürsten mit Kraut. Trinkt's am Abend, trinkt's solo und in Gesellschaft, in Gesellschaft vor allem, denn "Aecht Schlenkerla Rauchbier" macht mitteilsam und fröhlich und verbindet den Einheimischen und den Fremden.</p>
                    <cite>"Dieweilen aber das Gebräu beim ersten Trunk etwas fremd schmecken könnt', laß dir's nicht verdrießen, denn bald wirst du innehaben, daß der Durst nit nachläßt, sintemalen dein Wohlbehagen sichtlich zunimmt."</cite>
                    <p>So steht's auf dem Bierfilz, und der Bierfilz hat recht!</p>
                </section>
                <aside class="teaser"></aside>
                <div class="clear"></div>
            </div>
            <?php include $basePath . 'components/global/footer.php'; ?>
        </div>
    </body>
</html>

<?php
/**
 * @var \App\View\AppView $this
 * @var mixed $Cives
 * @var string $url
 */
?>
<url>
    <loc><?= $url; ?></loc>
    <changefreq>weekly</changefreq>
    <priority>1.0</priority>
</url>
<url>
    <loc><?= $url; ?>donate</loc>
    <priority>0.5</priority>
</url>
<url>
    <loc><?= $url; ?>religion</loc>
    <priority>0.5</priority>
</url>
<url>
    <loc><?= $url; ?>religion/apollo</loc>
    <priority>0.5</priority>
</url>
<url>
    <loc><?= $url; ?>religion/ceres</loc>
    <priority>0.5</priority>
</url>
<url>
    <loc><?= $url; ?>religion/christianity</loc>
    <priority>0.5</priority>
</url>
<url>
    <loc><?= $url; ?>religion/diana</loc>
    <priority>0.5</priority>
</url>
<url>
    <loc><?= $url; ?>religion/dii_consentes</loc>
    <priority>0.5</priority>
</url>
<url>
    <loc><?= $url; ?>religion/juno</loc>
    <priority>0.5</priority>
</url>
<url>
    <loc><?= $url; ?>religion/jupiter</loc>
    <priority>0.5</priority>
</url>
<url>
    <loc><?= $url; ?>religion/major_minor_gods</loc>
    <priority>0.5</priority>
</url>
<url>
    <loc><?= $url; ?>religion/mars</loc>
    <priority>0.5</priority>
</url>
<url>
    <loc><?= $url; ?>religion/mercury</loc>
    <priority>0.5</priority>
</url>
<url>
    <loc><?= $url; ?>religion/minerva</loc>
    <priority>0.5</priority>
</url>
<url>
    <loc><?= $url; ?>religion/neptune</loc>
    <priority>0.5</priority>
</url>
<url>
    <loc><?= $url; ?>religion/venus</loc>
    <priority>0.5</priority>
</url>
<url>
    <loc><?= $url; ?>religion/vesta</loc>
    <priority>0.5</priority>
</url>
<url>
    <loc><?= $url; ?>religion/vulcan</loc>
    <priority>0.5</priority>
</url>
<url>
    <loc><?= $url; ?>cives</loc>
    <priority>0.5</priority>
</url>
<url>
    <loc><?= $url; ?>cives/login</loc>
    <priority>0.5</priority>
</url>
<url>
    <loc><?= $url; ?>cives/signup</loc>
    <priority>0.5</priority>
</url>
<url>
    <loc><?= $url; ?>cives/faq</loc>
    <priority>0.5</priority>
</url>
<?php foreach($Cives as $civis){?>
<url>
    <loc><?php echo $url.'cives/view/'.$civis['CIVISID'] ?></loc>
</url>
<?php } ?>
<url>
    <loc><?= $url; ?>faq</loc>
    <priority>0.5</priority>
</url>
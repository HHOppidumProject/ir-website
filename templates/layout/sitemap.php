<?php
echo '<?xml version="1.0" encoding="UTF-8"?>';
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
echo $this->fetch('content');
echo '</urlset>';
?>
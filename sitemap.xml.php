<?php
// Set the content type to XML
header("Content-Type: application/xml; charset=utf-8");
// Get today's date with time in the required format for sitemaps (e.g., 2024-11-01T12:34:56+00:00)
$today = date('c'); // The 'c' format gives the date in ISO 8601, which is suitable for sitemaps
?>
<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>https://teen-patti-master-site.pages.dev</loc>
        <lastmod><?php echo $today; ?></lastmod>
        <priority>1.0</priority>
    </url>
    <url>
        <loc>https://teen-patti-master-site.pages.dev/latest-teen-patti-master-app.html</loc>
        <lastmod><?php echo $today; ?></lastmod>
        <priority>1.0</priority>
    </url>
    <url>
        <loc>https://teen-patti-master-site.pages.dev/faq.html</loc>
        <lastmod><?php echo $today; ?></lastmod>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>https://teen-patti-master-site.pages.dev/about.html</loc>
        <lastmod><?php echo $today; ?></lastmod>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>https://teen-patti-master-site.pages.dev/privacy-policy.html</loc>
        <lastmod><?php echo $today; ?></lastmod>
        <priority>0.5</priority>
    </url>
    <url>
        <loc>https://teen-patti-master-site.pages.dev/terms-conditions.html</loc>
        <lastmod><?php echo $today; ?></lastmod>
        <priority>0.5</priority>
    </url>
    <url>
        <loc>https://teen-patti-master-site.pages.dev/contactus.html</loc>
        <lastmod><?php echo $today; ?></lastmod>
        <priority>0.5</priority>
    </url>
</urlset>

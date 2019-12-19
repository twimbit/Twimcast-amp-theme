# Twimcast-amp-theme

.htacess
# BEGIN WordPress
# The directives (lines) between `BEGIN WordPress` and `END WordPress` are
# dynamically generated, and should only be modified via WordPress filters.
# Any changes to the directives between these markers will be overwritten.
<IfModule mod_rewrite.c>
RewriteEngine On
RewriteBase /
RewriteCond %{QUERY_STRING} (^|&)m=0(&|$)
# Set a cookie, and skip the next rule
RewriteRule ^ - [CO=mredir:0:my.twimcast.com]

# Check if this looks like a mobile device
# (You could add another [OR] to the second one and add in what you
#  had to check, but I believe most mobile devices should send at
#  least one of these headers)
RewriteCond %{HTTP:x-wap-profile} !^$ [OR]
RewriteCond %{HTTP:Profile}       !^$ [OR]
RewriteCond %{HTTP_USER_AGENT} "acs|alav|alca|amoi|audi|aste|avan|benq|bird|blac|blaz|brew|cell|cldc|cmd-" [NC,OR]
RewriteCond %{HTTP_USER_AGENT} "dang|doco|eric|hipt|inno|ipaq|java|jigs|kddi|keji|leno|lg-c|lg-d|lg-g|lge-" [NC,OR]
RewriteCond %{HTTP_USER_AGENT}  "maui|maxo|midp|mits|mmef|mobi|mot-|moto|mwbp|nec-|newt|noki|opwv" [NC,OR]
RewriteCond %{HTTP_USER_AGENT} "palm|pana|pant|pdxg|phil|play|pluc|port|prox|qtek|qwap|sage|sams|sany" [NC,OR]
RewriteCond %{HTTP_USER_AGENT} "sch-|sec-|send|seri|sgh-|shar|sie-|siem|smal|smar|sony|sph-|symb|t-mo" [NC,OR]
RewriteCond %{HTTP_USER_AGENT} "teli|tim-|tosh|tsm-|upg1|upsi|vk-v|voda|w3cs|wap-|wapa|wapi" [NC,OR]
RewriteCond %{HTTP_USER_AGENT} "wapp|wapr|webc|winw|winw|xda|xda-" [NC,OR]
RewriteCond %{HTTP_USER_AGENT} "up.browser|up.link|windowssce|iemobile|mini|mmp" [NC,OR]
RewriteCond %{HTTP_USER_AGENT} "symbian|midp|wap|phone|pocket|mobile|pda|psp" [NC]
RewriteCond %{HTTP_USER_AGENT} !macintosh [NC]

# Check if we're not already on the mobile site
RewriteCond %{HTTP_HOST}          !^m\.
# Can not read and write cookie in same request, must duplicate condition
RewriteCond %{QUERY_STRING} !(^|&)m=0(&|$) 

# Check to make sure we haven't set the cookie before
RewriteCond %{HTTP_COOKIE}        !^.*mredir=0.*$ [NC]

# Now redirect to the mobile site
RewriteRule ^ https://twimcast.com%{REQUEST_URI} [R,L]


RewriteRule ^index\.php$ - [L]
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule . /index.php [L]


</IfModule>

# END WordPress

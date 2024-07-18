*************THIS IS FOR CLONING THE BACKEND FOR NEW PC**************************
******LARAVEL BREEZE RESETS THE ROUTES AND THE LAYOUTS******************************
***************IMPORTANT****************************

# Backup web.php file
cp routes/web.php routes/web.php.bak

# Backup layouts directory
cp -r resources/views/layouts resources/views/layouts.bak

# Install Breeze
php artisan breeze:install blade

# Restore web.php file
cp routes/web.php.bak routes/web.php

# Restore layouts directory
cp -r resources/views/layouts.bak/* resources/views/layouts

# traversalist

Welcome!

This is where we'll keep the codebase for the blog, and potentially the content too (might need to exlude images and store those elsewhere, we'll see). The content will be backed up in Google Docs - you can keep images inline in those documenents and GDocs stores them at full-resolution, and easy to extract.

### Issues (Ideas!)

I like to to use the Issues tab here to keep track of **ideas for new features** (and of course to track issues/bugs). Any ideas you have, please feel free to add as an issue, and we can discuss in the comment thread there. Alternatively, you can def just drop your ideas in Discord, and I'll create the Issue myself. Do what you like! `Feel f r e e.`

### Dev/Staging vs Production

There's a staging/development site at https://trav-dev.benhickson.com/ and commits are generally made to a branch named `dev` and then merged into production/`master` after testing.

<br>

## Setup Notes

### DotEnv

1. If you don't already have composer installed on your system, <a href="https://getcomposer.org/download/" target="_blank">install it here</a>.
2. Run `composer install`
3. The DotEnv module should now be installed.
4. Copy the `.env.example` file to `.env`. **DO NOT** delete the original!
5. Make the necessary changes to the environment variables

<!-- <br> -->

### Image Engine: ImageMagick for file creation and XSendFile for serving.

#### For Mac OSX:

1. Download the source code for XSendFile
	```sh
	cd ~ && git clone git@github.com:nmaier/mod_xsendfile.git xsendfile-source && cd xsendfile-source
	```
2. Compile the module:
	```sh
	sudo apxs -cia -Wc,"-arch i386 -arch x86_64" -Wl,"-arch i386 -arch x86_64" mod_xsendfile.c
	```
#### For Debian/Ubuntu:

1. Use apt to download and install XSendFile 
	```sh
	sudo apt-get install libapache2-mod-xsendfile

2. Enable XSendFile
	```sh
	sudo s2enmod xsendfile

#### For All:

3. Add this line to your apache config to enable files to be served from that path:
	```apache
	XSendFilePath /path/to/traversalist/images/optimized
	```
4. Install ImageMagick and the imagick php module. On Ubuntu, this can be done in one command:
	```sh
	sudo apt-get install php-imagick
	```
5. Restart Apache. Check `phpinfo()` to confirm that the two modules are loaded.
6. Set the folder `images/optimized` with permissions `777` to enable new files to be created.
	```sh
	chmod 777 images/optimized
	```

### Log Files

- PHP's log file path is set in `.htaccess`. Create this file and set its permissions to `666` to avoid issues in writing to it.
	```sh
	touch logs/php-errors.log
	chmod 666 logs/php-errors.log
	```


<br><br><br>
<img alt=":kami:" src="https://cdn.discordapp.com/attachments/509601705789358083/673662258546606122/Kami.png" width="55">

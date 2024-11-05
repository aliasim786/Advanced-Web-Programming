# Installing Composer

> Composer is a dependency manager. Composer is used to load and manage third-party code and libraries. For us this means downloading and managing Laravel and all the libraries that Laravel depends on.

## If you are using XAMPP on a USB Stick

- Click on the following link https://getcomposer.org/composer.phar
- Save the file into the _PHP_ folder on _XAMPP_
- From the XAMPP control panel click 'shell'
- A command line shell should open. Enter:

```
cd php
```

- Then enter

```
dir
```

- The list of all the files and folders in the php folder will be shown. Make sure you can see the _composer.phar_ file you have just downloaded.
- To make Composer usable we need to create a _.bat_ file. Copy the following carefully into the XAMPP shell (this generates a batch file)

```
echo @php "%~dp0composer.phar" %*>composer.bat
```

Now enter

```
composer
```

If it has installed correctly, a list of composer commands will be shown

- You can now close the shell window and you are ready to use Laravel

## If you are using XAMPP on a Windows PC

- From the Composer homepage (https://getcomposer.org/download/) select Download
- Download and run _Composer-Setup.exe_ - it will install the latest Composer version.
  - Check the PHP location is correct (it should point to the _php.exe_ on your xampp e.g. _C:\xampp\php\php.exe_). Check the box that says add php to your path.
  - You shouldn't need to use a proxy so you can just say 'next'.
  - Then click install.
- Testing it works
  - In File Explorer open your _xampp/htdocs_ folder
  - Right-click and select 'Open in Terminal'. A terminal window should open.
  - Enter `composer`.
  - If it has installed correctly, a list of composer commands will be shown.

## If you are using XAMPP on a Mac
- It seems like it might not be quite as straightforward as the instructions at https://getcomposer.org/doc/00-intro.md#installation-linux-unix-macos suggest. If you are having no luck you can try:
  - Following the advice at [https://gist.github.com/djandyr/c04950a1375e96814316](https://gist.github.com/Udara-Dananjaya/9706190fb1d72030614affdea6c372d4) (you already have XAMPP installed so just follow from 'Configure Paths'). 


# TUGAS 1 TRAINING IT

# Team
Calvin Nickholas Kurniawan - Universitas Negeri Semarang - nickholascalvin1@gmail.com                  
Dede Maulana - Universitas Bina Sarana Informatika - dedemaulana162@gmail.com          
Edo Laksana Widodo - Universitas Lampung - edolaksana12@gmail.com                       
Erlangga Bagus Prasetyo - argelznozel@gmail.com                                            
Muhammad Alimul Fadli Naufal - Universitas Negeri Surabaya - fadliannaufal30@gmail.com     
M Rafli Aditya - Institut Pertanian Bogor - rafli14aditya@gmail.com                         
Muhammad Rosyid Ridho - Universitas Negeri Malang - rsyidh23@gmail.com                   
Rendy Lutfi Prabowo - Universitas Lampung - rendylutfiprabowo123@gmail.com                
Reza Daffa Zaki Pratama - Muhammadiyah Surakarta - rezadzp@gmail.com                     
Wan Muhammad Fikri Aushaf - Institut Pertanian Bogor - wan.aushaf@gmail.com                  

# Dokumentasi
Docs : https://docs.google.com/document/d/1Scw6bE7LKXIATLpgnx4n0TGqcKYaVJi_3ShBz3Kzy90/edit?usp=sharing                    
Miro : https://miro.com/app/board/uXjVMrjs5Ik=/                                                                 
Figma : https://www.figma.com/files/project/103971019/KELOMPOK-6-JAYA-JAYA?fuid=908529643800458197               

# php spark db:create
 
## What is CodeIgniter?

CodeIgniter is a PHP full-stack web framework that is light, fast, flexible and secure.
More information can be found at the [official site](https://codeigniter.com).

This repository holds a composer-installable app starter.
It has been built from the
[development repository](https://github.com/codeigniter4/CodeIgniter4).

More information about the plans for version 4 can be found in [CodeIgniter 4](https://forum.codeigniter.com/forumdisplay.php?fid=28) on the forums.

The user guide corresponding to the latest version of the framework can be found
[here](https://codeigniter4.github.io/userguide/).

## Installation & updates

`composer create-project codeigniter4/appstarter` then `composer update` whenever
there is a new release of the framework.

When updating, check the release notes to see if there are any changes you might need to apply
to your `app` folder. The affected files can be copied or merged from
`vendor/codeigniter4/framework/app`.

## Setup

Copy `env` to `.env` and tailor for your app, specifically the baseURL
and any database settings.

## Important Change with index.php

`index.php` is no longer in the root of the project! It has been moved inside the *public* folder,
for better security and separation of components.

This means that you should configure your web server to "point" to your project's *public* folder, and
not to the project root. A better practice would be to configure a virtual host to point there. A poor practice would be to point your web server to the project root and expect to enter *public/...*, as the rest of your logic and the
framework are exposed.

**Please** read the user guide for a better explanation of how CI4 works!

## Repository Management

We use GitHub issues, in our main repository, to track **BUGS** and to track approved **DEVELOPMENT** work packages.
We use our [forum](http://forum.codeigniter.com) to provide SUPPORT and to discuss
FEATURE REQUESTS.

This repository is a "distribution" one, built by our release preparation script.
Problems with it can be raised on our forum, or as issues in the main repository.

## Server Requirements

PHP version 7.4 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php) if you plan to use MySQL
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library

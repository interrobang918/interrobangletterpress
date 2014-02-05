Thanks for downloading Revolver.
Lock, load & FiRE!

This package contains:
Four PHP files, an image directory with five demo images and the Read Me file you are now reading.

What Is Revolver:
Revolver is a Fast Image Rotation Engine (FiRE). It can be used to show a stream of images without the need for an image viewer utility or a custom interface. Just click on an image and it revolves to the next image in the cue. When you get to the last image, Revolver "revolves" to the newest image in the stack and starts over from the beginning. Revolver is designed for users with HTML experience and FTP access to their own web space. 

Revolver can be used as a clean, simple way to showcase a portfolio or design sketchbook, as a visual/image blog, as a simple slideshow utility, or even as a gallery for product images on an E-Commerce website. Uses abound. Be creative, invent your own. 

Revolver. FiRE at will.

Use Caution - Revolver is fully loaded:
+ Works with any image format supported by web browsers
+ Add more images with ease
+ RSS feed
+ Super easy to install
+ No database required
+ Only 3k!
+ No admin login information to remember
+ Pre-date images for future release
+ Customizable background color to coordinate with each image
+ Advertising free!
+ No clutter or interface to customize.
+ Starting HTML code is valid XHTML 1.0 Transitional.

Revolver needs:
PHP 4.0 or above.

Loading your Revolver:
1. Unzip the Revolver.
2. Modify the script settings ($sitetitle, $dir, $thisfilename, $datedriven, $defaultbackcolor...) in the config.php file.
3. Add in your meta tags in index.
4. Alter the HTML as you desire.
5. Upload your files via FTP to your web server.
6. Prepare your image files and name them according to the Image Naming Scheme.
7. Upload them to your Revolver images folder.

Image Naming Scheme:
In order for Revolver to work properly, in date driven mode, your image names must match the following example:

20060305_01_003333.gif
2007 = year
____12 = month
______09 = day
_________01 = sorting number (for days with multiple posts)
____________003333 = color for background of page
__________________.gif = file format extension

Always remember:
The date format is YEAR:MONTH:DAY as in 2006/03/05
Always use Leading Zeros for dates: 01 for January, 02 for February, 01 for the 1st day of the month, 03 for the 3rd day of the month, etc.
Always use Leading Zeros for the Sorting Number: 01 for the 1st image, 05 for the 5th image, etc.
If you leave the color code off the end of the file name it will be set to the default color.
If $datedriven is true follow the Image Naming Scheme. If false name your images whatever you like.

Updating images in your Revolver:
Just upload a new image to your Revolver images folder via FTP following the Image Naming Scheme. That's it!

Revolver Credit:
Tubatomic Studio
3804 St. Elmo Avenue
Suite 111
Chattanooga, TN 37409
423.821.6210 Office
http://www.tubatomic.com

License:
Please don't distribute Revolver as your own script. Be creative, change all you want.

Versions:
1.0
First Release.

1.1
Fixed date driven bug.

1.1.1
Fixed bug for OS X. Script now ignores the hidden file DS_Store.

1.2
+ Added $prevpage variable that can be used to create a previous button.
+ Added ability for script to work with out color value on end of image name.
+ Added $getbackgroundcolorfromfilename this setting determines if the background color will be defined from the file names.
+ Added $highest_lowest This sets the order for images to appear. if set to true images appear highest to lowest. EAMPLE: 3.jpg > 2.jpg > 1.jpg.

1.3
+ Added Play and Stop buttons that activate new javascript functions.
+ Added new variable $playdefault to control auto play.
+ Added new variable $delay to control timing of slides.
+ Fixed bug on next button when $highest_lowest is set to false.

1.4
+ Fixed next and previous page targeting in index.
+ Added RSS feed and new file rss.php.
+ Added check to make sure all image files end with GIF, JPG, or PNG.
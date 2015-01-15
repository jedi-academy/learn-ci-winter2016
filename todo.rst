##############
Things to Fix?
##############

Record here things that probably need doing.
If anyone feels strongly enough, they can be raised as github issues.

*************
Webapp Issues
*************

- Feedback logging needs rework ... pseudo-csv format spills across lines of text :(
- timestamps for feedback have messed up timezone coding (all Z-05.00?)

******************
Webapp Suggestions
******************

- Format the HTML better?


*************
Course Issues
*************

- Tutorial 1a: Need to incorporate Mac OSX instructions from Don

******************
Course Suggestions
******************

General: 
- it could be useful for most slide to have a summary piece of text 
    under the slide title that tells you what this slide is about
- Jim, is there a way to download your slides?? 
    Sometimes my wireless connection sucks so I can't see the slides. 
    I want to download it onto my desktop or something...

Lesson 1a:
- provide a screencast to expand on ideas

Lesson 1b: 
- link to deeper content
- this lesson would greatly benefit from being presented with 
    additional notes and insight (as the first presentation was given). 
    Only reading the points in these slides gives too brief an overview of 
    the Model-View-Controller relationship. Code examples would be great.	
- Provide examples of sites using CI

Tutorial 1a: 
- You covered Windows and LInux setup screenshots but not Mac.
- What about a mac tutorial installation guide??
- The directory that windows installs httpd.conf to is 
    C:\xampp\apache\conf, as far as i could see you didn't have a slide 
    that explicitly listed this (I only saw a slide for linux: /etc/httpd/conf)
- maybe instead of alternating the slides for the windoes setup and 
    linux setup, do all the windows (or linux) setup turorial first, 
    then the other operating system after. 
    i got confused a little because the slides alternated.
- Don't forget to mention that port "443" of the SSL Conf 
    for XAMPP needs to be changed as well if you're using a program such as skype.
- You should keep the Linux slides consecutive (e.g. slides 6 
    through 13) and the Windows slides consecutive (e.g. slides 14 through 21) 
    so we're not jumping back and forth between two different OS as we're 
    proceeding through the slides.

Lab 1: 
- more detail about git with NetBeans
- override "magic method" __toString instead of providing our own toString
- use PHP_EOL instead of "\n"
- Better explanation of screenshots... 
    It's hurting this lab. The pictures in the tutorials too are confusing. 
    Sometimes there are pictures that are just there with no caption or text and it's really confusing.
- Better tie-in to the tutorial?
    For those of us coming into the lab with a Java background, it might be good 
    to add in footnotes to point out aspects of PHP in the example that will 
    look different, which revisits some of the previous PHP tutorial content. 
    For me, these were as follows (although it has been a long time since I 
    coded in java so some of these might also be the way you do it in Java!):
    1) If you assign values to an array without the index, PHP will 
        automatically increment the internal reference so each value goes 
        into the next element
    2) The -> operator is used to access class members
    3) Variable are preceded with a $ sign
    4) you concatenate strings using the ""."" operator, or .=
    5) use ' or "" for strings but you must use "" if it contains special 
        characters, like \n
    6) When traversing an array of key/value pairs 
        e.g. foreach($this->arrayData as $key=>$value){
        you use the => operator to tell PHP to put the current key into 
        the $key variable and the associated value at the key into the 
        $value variable
    7) PHP functions definitions do not specify the return type

Tutorial 1b:
- Slide 3 regarding the modification with the hosts file should have the warning 
    on the same slide instead of 3 slides later. Although the warning did not 
    help me, I thought I might add a suggestion to add to help others in the 
    future. If even running notepad as an admin and changing permissions 
    doesn't work (an error of read-only file), right click the file, 
    select properties, and uncheck "read-only" has solved my problem
- The VirtualHost port number in httpd-vhosts.conf needs to match the port 
    number specified for Apache if you've changed it for XAMPP 
    (e.g. "Listen 4711"), you should probably mention that in your slides.

Lesson 2:
- the /views/errors/... folder needs to be included if you just want them to
    drop the application folder in a project
- (seem like it's a CI2 project and a CI3 system? since you look for a CI3 
    core file only avaiavle in CI3 and have the errors folder outside 
    and not in views.

Example webapp - contacts:

Lesson 2b:

Tutorial 2a:
- i found it a little confusing about why i was doing some of these things, 
    but i could ask the teacher, so that was good
- This is retarded...
    because your tutorial is not descriptive enough in the slide that is titled
    "Syncronize your fork with the main repo"
    what does that even mean?
    "The first time you do this, you will need to add the remote repository, 
    and you should call it "upstream"."
    this was never done, i have no idea what this is refering to and i was 
    constantly worried this was the reason i could not get this to work. 
    Although upon switching to the "master" branch within netbeans and 
    checking out, then i went to "pull from upstream" then i switched to the 
    origin/master and pushed
    
    this finally worked, i did all of this through trial and error i ended up 
    deleting my fork, netbeans solution and local files a good 5 times before 
    encountering a permutation of these instructions that worked.

    overall a lot of frustration could have been avoided if the "Syncronize 
    your fork with the main repo" tutorial slide was more descriptive, the 
    image on that slide is meaningless no offense, i would have rather seen 
    a few images of say screenshots of switching branches from update/myname 
    to master, then pressing the check out, then pressing the pull from 
    upstream then say another image for switching to the origin/master and pushing.


Tutorial 2b:
- Please make explicit from the beginning that the CodeIgniter folder is to be 
    split into two folders: the "system3" folder and the "codeigniter3-starter" 
    starter folder.\nPlease use screenshots that show the exact final 
    placements of the folders/content

Tutorial 2c:
- A lot of the instructions were unclear such as setting up the database. 
    In the end, I did not feel like I learned much, as it was mostly just copy 
    and paste. I think if this tutorial was broken down more and had portions 
    explaining more in depth to our actions, it would greatly improve the quality.

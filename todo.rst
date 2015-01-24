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

------
Week 1
------

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

------
Week 2
------

Lesson 2:
- the /views/errors/... folder needs to be included if you just want them to
    drop the application folder in a project
- (seem like it's a CI2 project and a CI3 system? since you look for a CI3 
    core file only avaiavle in CI3 and have the errors folder outside 
    and not in views.
- I had to go back through this lesson and make some notes as a lot of it 
had not sunk in when I came to do the lab. 
Having gone through it again, a few key things became clear when also 
googling the bits I wasn't clear on although some bits could still do with 
some clarification. 
- Initially thought the names MY-Model and MY_Controller were just your 
choice of a name to use in the slides but it appears they are actually "the" 
names you need to use when defining your own base model/controller in /core. 
Is this the case ie convention over configuration? 
- I think the slide on controller URI format would benefit from an example 
that calls out the various parts as this wasn't clear to me e.g. 
"If we consider the URI below: example.com/index.php/products/shoes/sandals/123 
the 'segments' that make up this URI correspond to the following: 
â€¢ index.php - the default controller filename 
â€¢ products - the controller class name 
â€¢ shoes - a function of the controller 
â€¢ sandals - parameter one of the shoes function 
â€¢ 43 - parameter two of the shoes function 
Hence, our controller definition of "products" in the index.php file 
will look like the following: 
&lt;?php class Products extends CI_Controller {      
public function shoes($style, $size)     {         
echo $style;         echo $size;     } } ?&gt;

- Do you have to copy the support components you want to use from the system 
subdirectories into the subfolders of the application	 
or can you leave them in he system hierarchy and refer to them there?
- I think it would be good to point out that the name used to refer to a helper 
file when loading it is the file name with the "_helper.php" removed
- It was also interesting to note that the helper files don't contain classes 
but standalone functions as I am new to PHP and hadn't reliased you could have 
standalone functions outside of a class



Example webapp - contacts:

Lesson 2:
- Slide 9 Could you indicate that Kohana and Laravel are PHP frameworks, or 
    mention them as examples on slide 8?  
- Slide 9 Probably worth a side note to let people know the :: represents the 
    mechanism for accessing static methods and properties of a class 
    (Route in this case) as this is the first time this has been used  
- Slide 15 Can you clarify if MY_Model and MY_Controller are classes you 
    have created or example classes that are supplied with the CI framework?  
- Slide 24&25 Not clear about the contents on these slides. 
    Can you provide examples?   
- Slide 39 First line of code listing for Laravel overlaps Kohana listing  
- Slide 40-46 Forgot I was doing a lesson and not a tutorial and so tried 
    to follow the steps! I think you might be better replacing these slides 
    with a single slide explaining what the tutorial this week will cover at a high level

Lesson 2b:
- Slide 4 Diagram appears to have got a bit corrupted compared to the original 
    atlassian one  
- slide 6 Not clear what the diagram is telling me as it doesn't appear to be
     related to the text on the slide

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
- The tutorial was easy to follow, but it's lacking explanations as for
     why I'm doing what I'm doing. Even though I could complete the tutorial 
    pretty easily, I don't understand what I actually did. 
    What does forking do exactly? What is the purpose of creating a new branch? 
    Why do I need to create a branch and merge it back? etc.
- Some of the steps for not explained properly...
- Slide 4 It would be good to indicate what is the command line equivalent to 
    checking the "Add Signed-off-by line to commit message" box is  
- Slide 5 I assume you have covered what forking is and how to do this in 
    previous courses? For the newbies, it would be good to add a reminder here  
- Slide 7 Stupid question, but should the branch name be myname or are 
    students supposed to replace "myname" with their name. I assume the former.  
- Slide 8 & 9 Need to edit this as it is referring to ReadMe.rst instead of 
    ClassList.rst and TeamList.rst  
- Slide 10 I think I need to do some reading up on git here as I'm not 
    clear if the instructions on this slide are a summary of the subsequent 
    slides or a pre-requisite to the steps described in later slides! 
    Up to this point, I have forked the repository (copying it to another 
    repository, but still held remotely), cloned it (whch copies it to 
    my local drive), created a branch, edited the file in that branch and 
    committed to that branch. So not clear why I am checking out the master branch   
- Slide 11 What should the Update Local References dialog box be set to?  
- Slide 13 Interesting that the comparison doesn't simply show the additional 
    line but shows everything as deleted and inserted. Is this normal for Git 
    as it would surely be a nightmare to determine what has changed?
- I wouldn't say that this tutorial is long now that i know how to do it. 
    I said that this tutorial is long because I had to restart so many times. 
    A lot of things can go wrong with this tutorial and when they did I had no 
    idea what the problem was so I deleted everything and started over until 
    it worked. It's like going through a maze blind and it's very frustrating.


Tutorial 2b:
- Please make explicit from the beginning that the CodeIgniter folder is to be 
    split into two folders: the "system3" folder and the "codeigniter3-starter" 
    starter folder.\nPlease use screenshots that show the exact final 
    placements of the folders/content
- Slide 2 Should that say "There may be two versions of CodeIgniter" instead of 
    "...CodeIgniter 3
- Slide 6 Are you suggesting we should actually delete the develop files? 
    Slide 7 would suggest that is what you mean. If so  might be better to say 
    delete rather than eliminate
- Slide 8 Interesting behaviour in windows 7 as it will not allow you to 
    create the file .htaccess in some cases e.g. you cannot rename a file 
    to this as you get an error. Instead you need to save from notepad as 
    type All Files. Alternatively you need to use the AccessFileName 
    directive in Apache to tell it the filename is call something like ht.acl 
    as well as .htaccess
    although when I looked in the httpd.conf file	 
    this parameter did not exist in the file &#40	not even commented out&#41
- What do you mean when you say starter's root when placing .htaccess? 
Is it in the starter folder itself, or is it in the parent folder of the starter folder?
- Slide 6 Typo: fodlers


Tutorial 2c:
- A lot of the instructions were unclear such as setting up the database. 
    In the end, I did not feel like I learned much, as it was mostly just copy 
    and paste. I think if this tutorial was broken down more and had portions 
    explaining more in depth to our actions, it would greatly improve the quality.

- The tutorial has several bugs and badly presented elements within it. 
    The only reason I was able to complete the tutorial without have complete 
    stand still problems was because I already had previous framework experience. 
    For those new to frameworks they would have no hope. 
    I have had to help numerous people with the same bugs that I ran into but 
    they could not fix. I listed the bugs below:  
- 1) From the documentation for codeigniter, when making your own controllers, 
    they have to be pre-fixed with "MY_". Using the naming of "Application" in 
    some cases (specifically ubuntu linux) causes it unable to find the controller, 
    which is no surprise since codeigniter documentation says it will fail. 
    Nowhere in the tutorial specifies controller naming conventions and the 
    tutorial should not be teaching something that potentially may not work 
    ESPECIALLY since its documented 
- 2) When parsing the welcome view in the welcome controller, the view you 
    want to call is the index.php file. Either the controller needs to be 
    edited to call "index" or the file needs to be renamed to be "welcome.php". 
    Tutorial does not state this issue 
- 3) There is a typo/inconsistency when 
    creating the custom "Application" controller. The copied over data tries 
    to load the page elements into the template file, but in the copied text 
    the controller is looking for "_template.php" when your instructions say 
    to name the file "template.php". This causes a serious bug that would be 
    very challenging if not impossible for a new programmer to php frameworks 
    to detect as the cause 
- 4) It is not clear in the tutorial as to where the common_helper and parser 
    libraries are located. Especially since the parser library is supplied 
    and just needs to be activated in the autoload, but the common_helper 
    file is not. Loading a number of these libraries is also all squished 
    into one big wall of text, when previous slides have shown images guiding 
    the reader where to look. These libraries should be a bit more explained 
    and have images to help look for them    

- In my opinion, this tutorial, like most of the previous ones, is lacking 
    explanations. Why are we doing what we are doing? What is the purpose 
    of the parser? I have already worked with CodeIgniter in the past, so 
    it's less confusing for me, but people who haven't worked with a MVC 
    framework before seem to get pretty lost.  
    In addition to that, this tutorial seems rather incomplete. 
    For example, in MY_Controller we use the build_menu_bar function, 
    but there's no mention anywhere that we should also replace the hard-coded 
    menubar in the template by {menubar}. Moreover, even if you do this, 
    the build_menu_bar function is actually not working properly. 
    The line:   $result .= '<li>' . anchor($link, $name) . '</ul>';  
    in common_helper.php should read as:  $result .= '<li>' . anchor($link, $name) . '</li>';  
    But even after fixing this, it still won't work, because the anchor 
    function will create links such as: mydomain/index.php/features instead of 
    mydomain/features. In config.php, you need to set $config['index_page'] = ''; 
    (which is by default set to index.php).  
    Also, the tutorial directs us to call the template "template.php

- I had this issue where my links would add an "index.php" into the url, 
    which broke the image and css and js links...unless i modified them 
    by prepending an "../" in front of each one...  I learned a lot in this 
    tutorial, however it was a little long, and i had to take some extra 
    steps...i mean taking extra steps and figuring things out for myself 
    isnt a bad thing, but i can imagine some students being very frustrated and lost. 
-  here are some of the extra steps that i had to take that weren't mentioned 
    in the tutorial i think:     
- the views/template.php file should be named views/_template.php. in 
    slide "build a master view template" we are told to name it "template.php
 - we never actually used the {menubar} in the views/_template.php file on 
    slide "build a master view template".		
 - the menuloader function had a little bug	 it didn't properly close the <li> tag	
 - when making the simple controllers	 we're nt told to add the 
    "pagetitle" parameter to the "data" array	
 - i didn't know how to create a database	 and import the images	 
    but i figured it out. pretty cool!
 - had to configure the database.php	 but that wasnt mentioned in the tutorial	

- The directions were very frustrating!! There was no indication of how to 
    change the view gallery.php to include all the dynamically generated content. 
    I didn't figure it out until slide 25, where you say to do what we 
    did before, and include a small illustration of what to do at that point.
- There are many missing parts and unclear instructions.  
    Having alot of problems getting things setup.

- On page 2 or 3, please state where in the Netbeans IDE we can change the 
    name of the folder we clone the project into. This wasn't mentioned in 
    previous tutorials.  
- On page 7, when you say similar controllers, do we put in public function 
    index() into all the controllers?  
- On page 8, why is it still showing index.html when welcome.php 
    is already there? Which index.html are we supposed to change anyway?  
- On page 12, the webapp won't load unless the file is named _template.php,
     NOT template.php.  
- On page 17, where do we put the line of code for autoload? 
- And I only see a build_menu_bar and not a build_menu function in common_helper.  
- On page 18, how do we set up the database?

- Overall, found the tutorial confusing and hard to follow 
- many of the steps explained "what
 - didn't like the over	reliance on screenshots vs. written instructions

Specifics: 			
- The step to define the template.php file refers to "zap the middle" 	 
    it's not clear what "the middle" is. 	
- The same step asks you to name the file template.php. Later on in the tutorial 
    it is discovered that it should have been _template.php	 
    as another script refers to it with an underscore. 	
- Step where the autoloader file is modified is not clear enough as to where 
    to find the file and what to change. 		
- The database setup step is not clear enough that the user needs to actually 
    create a database using mysql	 access	 or myphpadmin. "

- PLS make the instruction simple and easy to follow. 
    Use verb + none instead of sentences. 
    And I wish all the instructions could be tested first and then public 
    to us in order to avoid misunderstanding parts!

------
Week 3
------

Lesson 3:

Tutorial 3:
- i know in the beginning, it says to read over all the slides before tackling 
the lab, but i didn't do that; i think on slide 4, it should mention that 
there's a list of what should be done on slide 5. 
- It took me a little while to understand what you meant on page 5 but 
everything else was clear.

Lab 3:


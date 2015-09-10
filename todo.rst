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
- add "Want to know more?" button & links as appropriate, specifically in lessons

------
Week 1
------



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

- Tutorial 02c: slide 7
Interesting that the class is "Welcome" but the default controller in 
routes.php is "welcome". Are these not case sensitive, or does the 
routes.php actually refer to the filename without its .php extension 
and not the class?

- Slide 2
I followed step 2 by cloning and then on slide 3 discovered you had cloned it 
to a different name. As I am new to git, I didn't know you could do 
this so it would be good to tell the user e.g.
"- You can clone it to any folder inside your htdocs folder by adding 
that subfolder name as an additional parameter to the "git clone" common.
- I have cloned it to my-lab02 by specifiying git clone <lab02 url> my-lab02
- Don't forget to update the virtual hosts mapping file, 
httpd-vhosts.conf, with this document root!"

- Slide 3
Revise depending on suggested edits above
There is a typo: "Substitute you choices"
It would be helpful to also add in the step, "Create a new project in 
netbeans based on the files in the my-lab02 folder"

- Slide 7
Interesting that the class is "Welcome" but the default controller in 
routes.php is "welcome". Are these not case sensitive, or does the 
routes.php actually refer to the filename without its .php extension 
and not the class?

- Slide 9
Where have I told CI what the default page should be for comp4711.local 
i.e. the Welcome.php file. Has this been specified somewhere as the default 
controller? (see slide 11 comment, where we discover the answer!)

- Slide 10
The screenshot does not match mine as the css folders have not been moved yet. 
You could therefore either add that instruction on the same slide but probably 
better to have a second step to move the css

- Slide 11
As with slide 9, where have I specified what the homepage corresponds to? 
A quick google search confirms that welcome.php is the default controller 
in CI, configured in config/routes.php so it would be good to mention this 
in the tutorial on slide 9

- Slide 15
I think there is a typo in your code: '/ about'
2nd line of render() is truncated
As there is no line to load the Parser class in the controller, where is 
this being done (autoload.php doesn't refer to it)?
This slide feels like a bit of a jump, probably because I have forgotten 
the lesson where we touched upon the MY_Controller.php. However, going back 
though the tutorials and lessons to remind myself I can't find it described 
anywhere! Can you remind me where we convered the MY_Controller we are copying 
here and all its functions?

I would welcome some more explanation about what is going on here.
Some questions: 
a) we are initialising the $data and $choices members on declaration but then 
reassiging an array in the constructor - why not simply assign them in the constructor?
b) Assigning the reference to the data array to the data element of the data 
array looks a bit weird  but I assume all will become clear later - 
maybe some explanation of what is going on here?
c) I don't think we have described the parser->parse class method yet have we?
d) where was the parser class loaded?
e) having read the user guide about the parser class
 it says that the parameters to the parse method are the view name and the 
data containing the data that will be used to substitute the pseudo variables 
in the view files. However	 as it is the template.php that contains the 
pseudo-variables	 and not the view file e.g. about.php	 how does 
render() know about the template.php?


Slide 17

1. It would be good to explicitly tell the user to copy the common_helper 
file to the application/helper folder of the application
2. Whilst you say we should load the parser library
 it would be good to show this line in the listing as well as the helper autoload 
and also to state where to put this code i.e. application/config/autoload.php

3. When I tried running it I got an error because it couldn't find _template.php. 
Is there a typo on slide 12 as it specifies template.php instead of _template.php?
4. My screenshot does not look like the slide because I hadn't copied the 
/public/css folder up a couple of levels to the same level in the folder hierarchy as /application

Slide 18

Quite a bit of stuff here I am not familiar with as I am new to netbeans so I 
would take it a bit slower: 
1. The first step is to estabvlish a connection to 
the MySQL instance you installed with xampp. Bring up the xampp Control Panel 
and click on Start next to the MySQL to start the database then cick on Config 
to confirm the database connection details
2. Click on the Services tab in netbbeans
 right click on "Databases" in the tree and select "New Connection"
3. Follow the steps to create the connection to the local MySQL database using 
the Config setting obtained from XAMPP
4. Right-click on the newly created MySQL connection and choose "Create Database..." 
entering the details opposite
5. Once created  connect to this database and ...
** at this point you say "import the sql script" but I am not sure what you mean
 by this as I was just expecting to execute the sql from the database menu. 
You might want to reword this and simply say "Right click on the picassos database
 select "Execute Command" and paste in the contents of the  images.sql file"


Slide 22:
I think an explanation of the parser class is overdue!
Also  having just gone ahead to slide 25	 I have just realised 
there was no explanation of how to edit the gallery.php file	 
which still contains the hard-coded html for the table and its images. 
Going through the code	 I figured out that you are generating the table 
html in the controller and assigning this to a placeholder {thetable}


Slide 23: 
Is there meant to be a difference as they look identical to me?!

Slide 25:
See note for slide 22 as this is the first time you show that you rpelaced 
the html for the table with a placeholder  {thetable}.


In sumamry
 I struggled with this exercise and towards the end found myself copying the
 code without having an understanding of what it was doing as these aspects had
 not been explained e.g. parser	 how substitution of placeholders work etc"


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

Although your tutorial was right that once you figure out how to do the first part, 
the others will be easy. I spent much too long trying to figure out how to fix 
the first link because I had no idea what I was doing.  
For example in First.php I used: 
$this->data = array_merge($this->data, $this->quotes->first());  
and I spent 3~5 hours pondering what the heck I was doing,
 why I was using this code, and why should I use this code when I 
don't even understand how it works. 
I later figured out that array_merge( firstParameter, secondParameter ) 
is a function where You get the array from the first parameter, 
and the array from the second parameter and merge it together. 
The $this->quotes->first() function is a method in the Models/Quotes.php 
which returns an array of the first id. 
 Afterwards in the routes on page 5/8 where I had to remap to 
first::zzz it took me awhile to figure out that I was supposed 
to map to first/zzz and not first::zzz.  But once I understand that, 
everything felt like a breeze. Because I understand how the php and 
code igniter works with routing and controllers now. 
So... I guess I learnt how controllers and routings work but the process of 
learning was very awkward and more time consuming than it should be.

Slide 3 - truncated text off the bottom of the page

Slide 4 - You may want reword "There is a default controller, welcome, in any folder" 
as I am not clear what is meant by this, specifically "in any folder" as this 
suggests you can put the default "welcome" controller in any folder you like 
and disregard the /application/controllers folder, which I assume you don't mean! 
Might also be good to reword to "This default is specified in /config/routes.php 
if you want to change it

Slide 4: Having read http://www.codeigniter.com/userguide3/general/controllers.html
 I think it is important to reiterate the naming convention as that page states 
that class names and filenames must begin with an uppercase letter (whilst the 
name in the URI can be lowercase as URIs are case insensitive)

Slide 7: 
 I think this needs to be reworded so it follows on from the previous slide as 
I was thinking about parameters passed via the URI but we are now describing 
passing data to the controller using a completely different mechanism  
e.g. "You may use a controller method to process data submitted by an HTML form. 
In this case  form fields are not passed as URI segments but are instead 
accessed in the controller method via the Input class."

Slide 8: Typo "paremeter"

Slide 10: Could we have an extra clarification here after the first paragraph 
e.g. "The loader will assign the loaded support component to a property of 
the controller with the support component name e.g. $this>something"
Does that mean that once loaded  the helper is available as a property in ALL 
instances of ALL controllers? Would be good to clarify this

Slide 16: Would be good to add the line after the code listing stating 
"where 'name' is the name of the view file with the '.php' characters removed"

Slide 17: I think you should also add the following after the line ending 
(e.g. {somefield}). "Alternatively passing TRUE (boolean) as a 3rd parameter 
will result in the parse() function returning the parsed result. 
We saw this in the gallery controller from our earlier lab."

Slide 18: Following on from point above change "View:" to "View (view filename is blah.php)"

Slide 21: I think the following needs to be reworded: 
"An example such rule lets you change the default controller"

Slide 23: Is the first example correct? i.e. I thought banana would be the 
first parameter and so the value of the routing rule would be "$2/id_$1"?

Slide 24: you lost me on that one!

 As a relative newbie to PHP the final point about the closing PHP tag is lost 
on me and does raise an earlier question I was going to ask about why we don't
 have a closing php tag. Presumably it is something about the way the code 
igniter code is parsed?"

Lab 3:


------
Week 4
------

Lesson 4:

Slide 8: Is C## a shorthand notation for C# and C++ or just a typo ;-)
Slide 15-16: Struggling to follow these slides. more examples might help
Slide 19: Typo. Missing closed bracket in "DELETE(x to the service"
Slide 21: Regarding naming convention, your example shows 'customer' as lowercase, whilst the previous slide stated the model class should begin with an uppercase letter. If so, why not 'Customer'? Is it because you have another convention that the corresponding model's table is lowercase (are tables case sensitive?!). Also see note on slide 36
Slide 24: Typo "which males it awkward"
Slide 24: Didn't get the last sentence about including source files. Would an example help?
Slide 25: Introduced the concept of interface. Will need to go off and read about those in my PHP book!
Slide 31: Not clear about the last paragraph - what sorts of systems are you referring to and what sort of interaction are we talking about here?
Slide 36: Can you put this content into slide 21 and change your example in slide 21 to be 'customers'?
Slide 36: I think you have missed a slide here, introducing the concept of a CRUD controller. Specifically, you mention the various ways in which a controller can be asscoiated with a view and a model in the first few slides then focus on the Model class. I was thinking of CRUD as being methods on the Model class, not the controller.
Slide 38: Typo, "configuraiton"
Slide 39: Typo, "including dropping and tables" - should be "any" not "and"

Tutorial 4:

-Some portions (such as proceed button) seem to not work as expected, 
naming conventions are also a little hard to follow 
(order_num vs num vs code vs item). 
Extreme lack of feedback from prior labs, and only a single lab 
session usually taken up by github or some other topic rather then a 
chance to go over mistakes made on previous labs to improve marks for coming ones. 

Lab 4:

------
Week 5
------

Lesson 5:


------
Week 6
------

Lesson 6:

------
Week 7
------

Midterm Review:

Tutorial 5b:
- pages 26 and 27 are identical, apart from the title
- pages 28 and 29 are nearly identical
- the quote field now only allows a maximum of 40 characters
- There were a few slides that were duplicates of each other.
- The message box at the end resulted having a cap on the number of characters that were able to be typed into it (before processing the quote)

The end result image is from the wrong weeks lab.
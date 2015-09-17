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
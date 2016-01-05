##############
Things to Fix?
##############

Record here things that probably need doing.
If anyone feels strongly enough, they can be raised as github issues.

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

******************
Questions/Comments
******************

Some questions/comments have been raised about the midterm. I am presenting 
them here, with my feedback, highlighted in yellow.

Thank you for taking the time to provide thoughtful comments – it will help 
ensure the fairness of your grades, and help me improve materials for the next 
offering of the course!

I can see that I need to be more careful with my question wording, and with questions based on my knowledge but not evidenced in the course material :-/
-------------------------------------------------------------------------------------------------------------


1. Which of the following does not have both a library and a helper in CodeIgniter? 

I'm not sure this was a fair question to ask. To know the answer we'd either 
have to have read all of the CI documentation or memorize the contents of both 
the library and helper folders in CI.

From the given options, only the Security library and the Session library have 
been discussed in lecture. The Email library/helper and Language library/helper 
have never been mentioned or used in class. And even for the Security and Session 
libraries, knowing that these exist does not tell us anything about whether also 
helpers for these exist or not. So unless you expected us to memorize the list 
of available libraries and helpers, there was no way for us to know the correct 
answer to this question.

We haven't had much exposure to many of these topics.  Security was mentioned 
and there were a few slides on Sessions and it mentioned there was a session 
library, but to be confident that there was no Session helper seems very 
unrealistic to me.

Agreed; unfair question & will not be counted.

2. The naming convention for view filenames is... 

All the views we used have a lower case file name.  I can find nowhere in your 
slides where it indicates than any other naming is acceptable, desired or recommended.

In lesson 3, the “Producing Output” slide specifically points out that view 
filenames are case-sensitive, unlike other components. This is something I have 
been trying to drive home since the beginning of the course, using upper-case-first 
names for classes, lower-case only for helpers, and mixed-but-matching-case for 
views and for method names.
I'm going to stand by my original answer for this question.

5. The biggest problem with cross-platform compatibility is... 

To me it seems that both answers (b) and (e) are valid problems that have been 
addressed in lecture and in labs, so how were we supposed to determine which of 
these problems is the “biggest” one? To me this questions seems ambiguous.

both B and E seem like very similar answers.  Path names are the real issue, 
whether it is case, using drive names or slashes.  Also, each platform is 
consistent in its enforcement, just not the same as some other platforms. 

Hard-coding a path name is a bad practice regardless of cross-platform issues. 
Running/testing on multiple platforms will amplify the issue, but they are not 
the root cause.
Case sensitivity, however, is specifically a cross-platform issue.
The answer, (b), is the most (if not the only) correct one.

6. Which of the following is least likely to be considered a competitor PHP 
webapp framework to CodeIgniter? 

You note the answer as d) node.js. Why is node.js not a competitor? It's a 
javascript framework that - while maybe isn't an MVC framework by default - 
has plenty of plugins that can turn it into one. (Express, handlebars, etc.) . 
I would argue that node.js is in fact a competitor, so that the correct answer 
to this question would be e) All of the above. 

We had no real knowledge of any of these frameworks.  Despite the fact that 
node.js ends in .js, names are funny, and that may not mean anything regarding PHP.  
It seems better to test us on things we have learned rather than things we might 
be able to guess. 

Node.js is an excellent framework, and has been mentioned several times. It is 
indeed a competitor to any of the PHP frameworks, generally, but it is not a 
PHP framework. The other three were all mentioned as PHP webapp frameworks – 
some on the frameworks type slide in lesson 2, and all used as examples of 
other framework practices.
I will see if I can figure out an elegant way to highlight the “important part” 
of a question stem more clearly.
The answer, (d), makes most sense to me.

8. The standard tool for managing dependencies in a PHP webapp is... 

Again, I'm not sure this was a fair question. We're familiar with NetBeans, but 
I can't find any reference to the other applications on this list anywhere in 
the slides (except maybe SVN). Was Composer mentioned somewhere in the lecture 
notes? Did I miss it? 

Composer was part of an example in lesson 2, “Configuration Examples From Other 
Frameworks”, but not explained there.
In lesson 6, however, the slide “PACKAGE MANAGEMENT” presents Composer as “the 
de facto standard for managing package dependencies”. I don't profess to be 
expert in it, but tried to communicate its importance, and that I am bringing 
myself up to speed on its use.
Of the other possible answers, the only one which is/was a tool for managing 
dependencies is (d) Sparks, and that has been dead for a few years now.
The answer, (c), is correct. 

16. The purpose of an autoloader in an MVC framework is to... 

The most detailed explanation for autoload I can find on your slides is “specify 
components to pre-load” on slide 38 of lesson 2. Given this information and how 
we have been using the autoload functionality, I cannot see why we were supposed 
to choose answer (c) over answer (a).

Purpose of autoloader... Locate sources for previously unreferenced components.  
This doesn't make sense to me.  I understand the purpose to be pre-loading things 
that you will generally use. 

You are correct – my material only discussed “config/autoload.php”, and did not 
properly present the general notion of a framework's “autoloader”, namely the 
class that makes loading decisions (answer c), and which uses something like 
the config/autoload.php for initialization.
Agreed; unfair question & will not be counted.

22. Using the template parser, iteration in a view template is done by... 

I'm unclear about this question. Technically a, b, and d would all work. z 
a) variable pair - yes, works, we've seen this in an example. 
b) A nested view template -> if you used the parse and a view fragment, this would be true 
d) An embedded foreach loop -> while this would be bad practice, it would technically work. 
Those three are - in my mind - all good options. What makes a) variable pair the best answer? 

To me it seems that all of the three answers (a), (b), and (d) are valid options. 
For example, the foreach loop could be used within a template instead of the 
substitution variable pair, even together with the template parser. Also, I was 
very unsure about answer (a) because of the term “variable pair”, which is why 
I asked you during the exam. You said it is a fixed term, but I actually cannot 
find it anywhere in your lecture notes.

Answer (b) has any iteration done in the controller, using a separate view 
template (the nested one). This is a wrong answer.
Answer (c) is a distractor – there is no such directive.
Answer (e) is incorrect ... we know that iteration can be handled using the 
template parser.
Answer (d) does iteration without using the template parser at all, and it is 
legal though a poor practice. 
Answer (a) was demonstrated in lesson 5, on the slide “View Construction Using 
the Template Parser”, but the “{records} ... {/records}” (which is a variable pair) 
was not named as a variable pair. I thought I mentioned the proper name for 
this in class, but could be mistaken. The term “variable pair”, and its use, 
is clear in the CodeIgniter user guide – the page on the template parser class.
I will concede that the question could be better worded, and that (b) or (d) 
could be argued to be correct using a literal interpretation of the question. 
Resolution: I will not count this question.

23. What is meant by "discipline"?


26. Which of the following is true of a “good” view fragment in CodeIgniter? 

I'm just curious what the distinction between a) and c) is for this one that 
makes a) a better answer than c). 
a) .php extension, no php script (correct answer) 
c) .php extension, only html

Both (a) and (c) would lead to “good” views, but (a) is “more correct” as it 
expressly advocates not having any PHP script in the view file.
Being pedantic, one could argue that (c) precludes the use of Javascript or 
other directives and that (a) doesn't, but the point of a “good” view in such a 
framework is that we don't include PHP script in the view, and that we use a 
templating engine/tool instead.
Answer (a) is most correct.

29. CodeIgniter provides several components to help prepare an HTML form to 
send to the browser, not including which of... 

As I understand there is a File Uploading class in CI. If a form had a file 
upload section could the file uploader class not be used? Why is e) File uploading 
class not included (and therefore the answer.)? Is this an error in the answer 
key for this question?

Two of the options given here, the Pagination class and HTML helper, have never 
been mentioned in lecture or in labs, which makes it difficult to answer a 
question about them. Also, the HTML table class has only been used in connection 
with the image gallery lab, which had nothing to do with HTML forms; moreover, 
using a table for a form layout would be considered bad practice. I cannot see 
how pagination relates specifically to a form, either. Therefore, (a) Form helper 
and (e) File uploading class are, in my opinion, the only answers that are 
directly related to forms. However, your solutions says (e) is not, even though 
in your lecture notes the File uploading class is used for forms. I find this 
very confusing.

We have not dealt with file uploading or pagination.  Granted file uploading 
doesn't seem to have much to do with sending a form to the browser, but neither 
does pagination.  Seems like a question not relevant to the material covered.

Agreed, confusing. The file uploading class is only used server-side, for the 
processing of an HTML form which includes an uploaded file. It has nothing to 
do with the preparation of a form. That wasn't clear in my material, and the 
tutorial using it was not available, nor was the pagination class talked about.
Conclusion: This question will not be considered.

31. Incorporating most of your business logic in model classes is referred to 
as a(n) _ _ _ approach. 

Even though “heavy model” sounds like a reasonable answer, I do not think this 
is a fair question, as you expect us to know something that has not been covered 
in this class. In fact, we have never encountered this term in lecture or in labs.

Acknowledged. I will strike this question.

32. A CodeIgniter controller would retrieve the value of an HTML form field 
named 'product' using... 

According to the official CodeIgniter documentation, both answers (c) and (e) 
are valid. Your question does not specify that the form is using the POST method. 
If the form were using the GET method, you would have to use $this->input->get(‘product’) instead.

You are correct. I did not specify the “method” attribute setting for the form 
element this would refer to. I will take either (c) or (e) as correct answers.

34. Which of the following is a core CodeIgniter framework class? 

None of the given options have been mentioned in lecture or in labs. In fact, 
the only “core” classes that have ever been mentioned explicitly are the CI_Controller 
and CI_Model classes. I do not see how we could have answered this question other than just guessing.

I don't feel like we have covered any of these classes in depth, if they exist.  
Knowing which ones are core CodeIgniter seems unrealistic.  Just because the 
framework is called CodeIgniter doesn't mean it has a CodeIgniter Class.

Agreed. This would only be apparent by reading index.php or going through the 
CodeIgniter user guide. I will strike this question.

35. The core CodeIgniter component responsible for sending output to a browser is the... 

I'm not sure how we would have known the Output class is the answer to this, as 
I don't believe we've ever discussed it and I can't find any reference to it 
in the lecture notes

Again, I am pretty sure this has not been covered. There is no mention of an 
“Output class” anywhere in your lecture notes or in the labs, so I do not think 
this is a fair question to ask.

I can't find  reference to the output class in the slides.  Views are the main 
thing we dealt with that displayed things to the browser.

Agreed. This would only be apparent by going through the CodeIgniter user guide, 
or having done the optional “hook” part of lab 3. I will strike this question.

38. With a default CodeIgniter configuration, which of the following would 
be considered your base controller? 

Based on the wording of the question, I disagree with the answer key on this one. 
The question specifies a "default" configuration - e.g. I haven't done anything 
with my app yet. So by "default", I wouldn't have a MY_Controller, because I'd 
have to create that myself by overriding CI_Controller in system/core. 
My feeling is that the correct answer would be system/core/Controller --> and 
so the actual answer - to me - isn't even given as an option. 

I have to disagree with you on this one. Lesson 2 talks about “CI_Controller” 
and then “your base controller”, which is clearly identified as “application/core/MY_Controller.php”. 
Alternately, answers (a) through (d) make no sense in any context, leaving only (e).
Resolution: (e) remains the correct answer.

42. What does an MVC framework add to a conventional non-MVC one? 

Could you just clarify why the answer to this question is (a) ? Are there not 
other ways to do routing without using an MVC framework? 

I do not see how routing relates to MVC. Why would a non-MVC framework not be 
able to support routing of user requests? Routing is a consequence of the Front 
Controller design pattern, and while I agree that MVC incorporates the Front 
Controller pattern, it is exclusive to MVC. Any non-MVC framework could still 
implement the Front Controller pattern, could it not? In my opinion, none of the 
options are legit, but I ended up choosing (d) because the MVC pattern affects 
the application architecture and thus fundamentally the way things are implemented. 
A development methodology was the closest thing to that.

I feel like all of the answers are possible for both an MVC and non-MVC framework.  
This seems like a guess with no particularly compelling options to me. 

Agreed – poorly worded question. I should have mentioned something along the 
lines of using default folders for different kinds of components, which is not 
something typical of a non-MVC framework, although you could argue that an 
“MVC-like” framework could do that while remaining short of a “proper” such 
framework. Groan.
Resolution: this question will be struck.
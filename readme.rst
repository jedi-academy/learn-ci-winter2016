############################
Learning CodeIgniter Website
############################

This is an unofficial informational website for learning
Webapp Development using  
`CodeIgniter <http://codeigniter.com/>`_.

This webapp is an experiment.
If it works well, it will be proposed for integration into the
main CodeIgniter site.

*****
Setup
*****



*****************
Programming Style
*****************

Some of the programming design decisions reflected:

-   The architecture adheres more to the "model-view-adapter" convention,
    where the view is unaware of the source of data and the model is unaware of
    how any data might be presented. The controllers are go-betweens.
-   A "theme template" presents the organizing pages for a course, in a
    visual style consistent with the main CodeIgniter site.
-   A "show template" presents a learning activity as a slideshow suited
    to presentation or print, using the S5 framework from Eric Meyer.
-   A base controller takes care of assembling finished pages, using the 
    master template.
-   Using the template parser eliminates PHP code from
    the views, where possible.
-   View fragments are used to style single "records" on their own,
    improving cohesion.
-   The CodeIgniter framework folder has been moved outside of the webapp,
    in this case to a "system3" folder at the same hierarchy level as the 
    document root.
-   An ".htaccess" file is incorporated, to configure Apache to remote
    index.php from any URLs.
-   The site is XML-driven, abstracting as much as possible so that the
    webapp can be used for other courses. XML was chosen over an RDB
    because of the rich data structures it can support.

***************
Project Folders
***************

/data           XML & figures for learning activities
/download       reserved
/feedback       reserved

Assumed: CI system folder is in ../system3

*******
License
*******

Please see the `license
agreement <http://codeigniter.com/userguide3/license.html>`_

*********
Resources
*********

-  `Informational website <http://codeigniter.com/>`_
-  `Source code repo <https://github.com/bcit-ci/CodeIgniter/>`_
-  `User Guide <http://codeigniter.com/userguide3/>`_
-  `Community Forums <https://forum.codeigniter.com/>`_
-  `Community Wiki <https://github.com/bcit-ci/CodeIgniter/wiki/>`_
-  `Community IRC <http://codeigniter.com/irc>`_

***************
Acknowledgement
***************

This webapp was written by James Parry, Instructor in Computer Systems
Technology at the British Columbia Institute of Technology,
and Project Lead for CodeIgniter.

CodeIgniter is a project of B.C.I.T.
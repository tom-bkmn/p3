p3
==

###Tom Beikman's P3 assigment for Dynamic Web Applications, CSCI E-15

• Live URL of the project:
 [p3.tombeikman.me](http://p3.tombeikman.me)
 
• Project description: The goal of the project is to provide tools for the generation of fake content used in the development of Web sites.  There are two tools offered:

1. Lorem Epsum.  Paragraphs of text are available.  The number of paragraphs are user defined.
2. Fake users.  Generate a list of fake users with first and last name, birthdate and biographical data. 
 
• Demo information:  Right now, i'm still hoping to record and upload the demo.
The url to watch the demo is: http://screencast.com/t/vQICXND8g.
 
• Additional details:  Attempted a couple extra features:

1. Option to include birthdate in user profile.
2. Option to include profile data.  This is accomplised via a custom, homemade, class.  And dig this, the bio is programmatically composed from multiple text fragments so that each user may have a unique, if fake, biographical sketch.  Find the class in: app\classes\ProfileGenerator.php
3. User input validation: Make sure users don't enter text when integers are requested, and that the values entered are within accepted values.
 
• Third party resources acknowledgment: 

1. Badcow Lorem Ipsum: https://packagist.org/packages/badcow/lorem-ipsum
2. Fzaninotto/faker for the best fake users this side of the Mississippi: https://packagist.org/packages/fzaninotto/faker



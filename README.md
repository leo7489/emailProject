We're asking candidates to provide a small PHP script that does the following:
* presents a web form
* provides user the ability to input any number or emails separated by whitespace
* processes the submitted values containing the emails
* and presents a unique list of email domains.

For instance a sample input would be

bob@example.com fred@example.com suzy@example.com
harry@test.com junk
hank@hank.co.uk joe@fun.co.uk
sally@america.edu

And the response would be:
Number Domain
1 example.com
2 test.com
3 hank.co.uk
4 fun.co.uk
5 america.edu

# FAQ 
Epic (User stories)

Introduction
The feature that has been created helps students, professors and even faculty to communicate with one another. The feature can be accessed by anyone and allows the users to like or dislike an idea, statement or anything that the user would have posted. Users will also be able to answer questions and post reactions to ideas of other users. 

User Stories
•	Post questions. Ideas, statements etc.…
•	Users can answer or react to posted comments
•	Users can communicate on a public forum 
•	Users can like and dislike the posted comment
•	Users can use the public to help inform decisions 

To run the FAQ project: 
   
1. git clone https://github.com/NJIT-WIS/faq.git

2.   CD into FAQ and run composer install

3.   cp .env.example to .env

4.   run: php artisan key:generatep artisan migrate:refresh --seed

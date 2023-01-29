# The Q4 Impact Test Theme
This is a stripped down version of our starter theme. There is basically just a home page, news page, and events page. As you will see the events archive is just copy and pasted version of the news archive. 

## Setup
Fork this repo to your local environment and set up the database. It is all set up to be http://localhost:8888/test_theme. The databse is named test_theme. database user is root and password is root. This is all in the wp_config. If you need to login to the admin area, the username is admin and the password is Password123.

## Tasks to do
I don't want you to spend more than 3-4 hours working on this. Just get done whatever you can in that time. You can use any ways that you feel fit to accomplish the tasks below. 

Once complete, push your changes back up to Github and let me know. 

### Merge Events into News archive
This is the first task to accomplish. On the news archive page, set it up so that both news and events post types are shown on the news page. They should still be in chronological order with the posts mixed together. 

### Create a category filter
Create a filter with category checkboxes that automatically pull in all of the categories. When any of the checkboxes are checked and you click the submit button, the page reloads with only the posts checked categories displayed. This will probably involve url parameters and some javascript. You will see a file already pulled in for the filter on the news archive. Use that file to accomplish this. It doesn't matter how the filter looks unless you wanted to style it. 

### Add pagination
Setup pagination for one of the post types to show only 3 posts at a time. Have the ability to move through the pagination as well

### Change the order of posts
Add a button that will switch the posts' chronological order when clicked. If the first post is event 10, when the button is clicked it will now be event 1

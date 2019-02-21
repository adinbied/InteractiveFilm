index.php  is welcome screen -- calls AJAX that waits until tmp/filmbegin.txt is found (checks once per second)
If tmp/filmbegin.txt is found, then the AJAX on index.php redirects to wait.html
wait.html is grey for 17 seconds using JS then redirects to vote1.html
vote1.html is the first question -- uses JQuery for progress bar and is set to 45 sec before it times out and goes to waitq1.html
If a vote is cast on vote1.html before the timer runs out, the button then calls phppaths/q1left.php or phppaths/q1right.php, both of which perform a CURL operation that pushes data to the RethinkDB backend before redirecting to waitq1.html

NOTE: Issue with OBS live updating votes requires a reset of the VM node app
Add a few sec of black to the end of Intro-Q1
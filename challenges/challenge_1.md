# file-upload Challenge 1

----------------------

All players in my game have a profile pic. Currently, they have to stick in a url to some outside image hosting source for that pic - which I've gotten many complaints about. My players want to know why they can't just upload the images straight in my game.

I've been experimenting with a feature to allow this, but before launching it, was hoping you could help me out by testing to see if it is secure. Could you see if you can do anything malicious with it?

It's available in game, you'll see it in the menu on the left with the title "Preferences: Challenge 1".

After uploading an image, you can click "My Profile" in the menu on the left to see it (perhaps right click it if it's a broken image, and click open image in new tab).

-Breakthenet Game Owner

----------------------

Stuck? 
----------------------
<details> 
  <summary>Click for hint 1</summary>
   This is not a black box challenge, you can look in the source code for clues if you get stuck! The particular code you are looking for is [here](https://github.com/breakthenet/file-upload-exercises/blob/master/preferences_c1.php#L213-L245).
</details>

<details> 
  <summary>Click for hint 2</summary>
  What does the strpos function in php actually search for?
</details>

<details> 
  <summary>Click for hint 3</summary>
   Is it possible to have multiple extensions on a file (chained together?)
</details>




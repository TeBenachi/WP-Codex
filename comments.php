//////////

(1) Password require to view comments
(2) Comment form ( If not logged in, show Name + Email + URL)
(3) LOOP if have comments ==> foreach( $comments as $comment ){} 
  a. Total number of comments
  b. Avatar
  c. Author
  d. Date
  e. Comment text
//////////

<?php 

if( post_password_required($post) ) {
  return; 
}

?>

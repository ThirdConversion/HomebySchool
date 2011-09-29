<?
  if (isset($_POST['email'])) {

  }
?><form action="<? the_permalink() ?>" method=post>
  <label>Name <input name=name placeholder="Your name" /></label>
  <label>Phone Number <input name=phone_number placeholder="(123) 456-7890" /></label>
  <label>E-mail <input name=email type=email placeholder="you@somewhere.com" required /></label>
  <label>Message <textarea name=message placeholder="Your question or message"></textarea></label>
  <input type=submit value="Ask Agent" />
</form>

<div class="darkener" id="darkener" onclick="closeForm()"></div>

<ul class="navBox" id="navbar" aria-label="Navigation bar">
	<li class="navPoint">
		<a class="navLink" href="/index.php">
			<i class="fas fa-home"></i><p class="navText">&nbsp;Home</p>
		</a>
	</li>
 	<li class="navPoint">
 		<a class="navLink" href="/about.php">
 			<i class="fas fa-info"></i>
 			<p class="navText">&nbsp;About</p>
 		</a>
 	</li>
 	<li class="navPoint">
 		<a class="navLink" href="/wip.php">
 			<i class="fas fa-code"></i>
 			<p class="navText">&nbsp;WIP</p>
 		</a>
 	</li>



 	<li class="navPoint right"><button class="navLink" onclick="openForm('signup')"><i class="navIcon fas fa-sign-in-alt"></i><p class="navText">&nbsp;Signup</p></button></li>


<!--

	// preperation for later

<?php if (!isset($_SESSION['userid'])) {
	$url = $_SERVER['REQUEST_URI'];
	echo "<li class=\"navPoint right\"><button class=\"navLink\" onclick=\"openForm('login')\"><i class=\"navIcon fas fa-sign-in-alt\"></i><p class=\"navText\">&nbsp;Login</p></button></li>";
    echo "<li class=\"navPoint right\"><form method\"post\" action=\"signup?signup\"><input type=\"hidden\" name=\"url\" value=".$url." /><button class=\"navLink\" type=\"submit\"><i class=\"navIcon fas fa-edit\"></i><p class=\"navText\">&nbsp;Sign up</p></button></form></ul></li>";
} else {
    $user = new user($_SESSION['userid']);

   	// TODO: this should only be diplayed for admin users

    echo "<li class=\"navPoint\"><form method=\"post\" aria-label=\"Make a new post\" action=\"post?newpost\"><button class=\"navLink\" type=\"submit\"><i class=\"navIcon fas fa-edit\"></i><p class=\"navText\">&nbsp;New Post</p></button></form></li>";

    echo "<li class=\"navPoint right\"><form method=\"post\" aria-label=\"Your account\" action=\"user?userid=".$user->id."\"><button class=\"navLink\" type=\"submit\"><i class=\"navIcon fas fa-user\"></i><p class=\"navText\">&nbsp;".$user->name."</p></button></form></li>";
    echo "<li class=\"navPoint right\"><button class=\"navLink\" onclick=\"openForm('logout')\"><i class=\"navIcon fas fa-sign-out-alt\"></i><p class=\"navText\">&nbsp;Logout</p></button></li>";
}
	echo "<div class=\"darkener\" id=\"darkener\" onclick=\"closeForm()\"></div>";
?>

-->

</ul>

<?php
	include 'login.php';
#	include 'logout.php';
?>
<?php
$od=opendir("theme");
while($file=readdir($od))
{	
	if($file!='.' && $file!='..')
	{
	
		echo "<a href='HomePage.php?conTheme=$file'>
			
				<img src='theme/$file' height='200' width='200'> 
			</a>";
	}
}

?>
<?php

echo "<a href=index.php?action=list&file=><img src='" . ASSETS_PATH . "/arrowup.png' height=25></a><a href=$_SERVER[PHP_SELF]?action=list&file=$rootdir[dirname]/>$rootdir[dirname]</a>/<b>$filenameX</b><br></h4>";

echo "Document views: <b><a href=index.php?action=xEdit&file=" .$dir.">xEdit</a></b> ";

echo "<b><a href=index.php?action=doc&file=" .$dir.">". DOC_TAB_MESSAGE
."</a></b> ";

echo "<a href=index.php?action=visual&file=" .$dir."> Visual</a> ";

echo "<a href=index.php?action=print&file=" .$dir.">".PRINT_TAB_MESSAGE."</a> &emsp; ";

echo "Source views: <a href=index.php?action=source&file=" .$dir.">". SOURCE_TAB_MESSAGE."</a> ";

echo "<a href=index.php?action=edit&file=" .$dir.">".EDIT_TAB_MESSAGE."</a> ";

echo "<a href=index.php?action=openedit&file=" .$dir.">". COMPLETE_TAB_MESSAGE."</a> ";

echo "<a href=index.php?action=ipld&file=" .$dir.">". IPLD_TAB_MESSAGE
."</a> ";

echo "<a href=" . URLFORDOCSINREPO . $dir.">GitHub</a> &emsp; ";

echo "<a href=" . URLFORREPO . "/search?utf8=✓&q=" .$dir. ">  </a>  &emsp; ";


echo "(rare: 'ShowMe' <a href=index.php?action=showme1&file=" .$dir.">". 1
."</a> ";

echo "<a href=index.php?action=showme2&file=" .$dir.">". 2
."</a> )";


?>

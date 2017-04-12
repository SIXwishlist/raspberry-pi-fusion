<?php 

function pif_Credits()
{
    $result = array();

    $credits = file('../docs/3RD-PARTY-LICENSES.md');
    
    for ($i=0; $i < count($credits); $i++) {
		list($source, $purpose, $author, $license, $url) = explode(" | ", $credits[$i]);
        
		$result[$i]['source'] = trim($source, "- ");
		$result[$i]['purpose'] = $purpose;
		$result[$i]['author'] = $author;
		$result[$i]['license'] = $license;
		$result[$i]['url'] = $url;
    }
    
	return $result;
}

function pif_Contributors()
{
    $result = array();

    $contributors = file('../docs/CONTRIBUTORS.md');
    
    for ($i=0; $i < count($contributors); $i++) {
		list($name, $type, $what, $email, $url) = explode(" | ", $contributors[$i]);
        
		$result[$i]['name'] = trim($name, "- ");
		$result[$i]['type'] = $type;
		$result[$i]['what'] = $what;
		$result[$i]['email'] = $email;
		$result[$i]['url'] = $url;
    }
    
	return $result;
}

?>
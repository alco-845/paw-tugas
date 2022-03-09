<?php 

function HelloWorld($no) {
    echo '<br>Hello World! - ' . $no;
}

for ($i=1; $i < 6; $i++) { 
    HelloWorld($i);
}

?>
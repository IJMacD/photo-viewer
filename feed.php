<?php

$dir = "img";

echo json_encode(glob($dir."/*.{jpg,JPG}", GLOB_BRACE));

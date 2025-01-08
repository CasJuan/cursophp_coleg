<?php

function createFile(string $fileName){
    
    touch($fileName);
    
}

function createTempFile(string $fileName){
    
    touch("./temp/".$fileName);
    
}
function createPDF(string $fileName, bool $tempFile = false, bool $isPDF = false){
    
    touch("./pdf/".$fileName);
    
}

createFile("Permanente.txt");
createTempFile("Temporal.txt");
createPDF("Permanente.txt");

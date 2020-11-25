<?php
    include ("document.php");
    include ("ContentObject.php");

    $content = new Document();

    $contentTemplate = $content->getFileContent("template.html");

    $overrideDataAsArray = array(
        "title" => "title_passed",
        "content" => "content_passed",
        "subcontent" => "subcontent_passed");
    $overrideDataAsObject = new ContentObject();

    $parsedContentFromArray = $content->parse($contentTemplate, $overrideDataAsArray);
    $parsedContentFromArrayAndObject =  $content->parse($parsedContentFromArray, $overrideDataAsObject);
    
    echo $parsedContentFromArrayAndObject;
    
    

?>
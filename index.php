<?php
    include ("document.php");

    $content = new Document();

    $contentTemplate = $content->getFileContent("template.html");

    $placeholderData = array(
        "title" => "title_passed",
        "content" => "content_passed",
        "subcontent" => "subcontent_passed");

    $parsedContent = $content->parse($contentTemplate, $placeholderData);

    echo $parsedContent;
?>
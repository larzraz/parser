<?php
    class Document
    {
        function getFileContent($fileName)
        {
            if (file_exists($fileName)) {
                $content = file_get_contents($fileName);
            } else {
                $content = "File doesnt exist";
            }
            return $content;
        }

        function parse($templateContent, $placeholderData)
        {
            foreach ($placeholderData as $placeholderKey => $placeholderValue) {
                $templateContent = str_replace("{{{$placeholderKey}}}", $placeholderValue, $templateContent);
            }
            return $templateContent;
        }
    }
?>
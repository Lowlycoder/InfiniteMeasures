<?php

namespace core;

/** Global model that other controllers extend */
class Model
{
    /**
     * Get the html for a view file.
     *
     * @param string $viewFile Name of the view file. Path starts from the Views folder.
     */
    public function getViewHtml(string $viewFile, array $data = []): string
    {
        // convert data array key/values to individual variables for the view
        extract($data);
        ob_start(); // start output buffer
        require_once __DIR__."/../app/views/$viewFile.php"; // load the specified view

        return ob_get_clean(); // return output buffer contents and clear buffer
    }
}

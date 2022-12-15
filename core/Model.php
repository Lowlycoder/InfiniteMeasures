<?php

namespace core;

/** Global model that other controllers extend */
class Model
{
    /**
     * Escape html correctly for output in the browser.
     *
     * @param string $string string to be escaped for output.
     * @return string that is ready for output to the browser.
     */
    function escapeHtml(string $string): string
    {
        return htmlentities($string, ENT_QUOTES, 'UTF-8');
    }

    /**
     * Get the html for a view file.
     *
     * @param string $viewFile Name of the view file. Path starts from the Views folder.
     * @param array $data
     * @return string
     */
    public function getViewHtml(string $viewFile, array $data): string
    {
        // convert data array key/values to individual variables for the view
        extract($data);
        ob_start(); // start output buffer
        require_once __DIR__ . "/../app/views/$viewFile.php"; // load the specified view
        return ob_get_clean(); // return output buffer contents and clear buffer
    }
}

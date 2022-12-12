<?php

namespace core;

/** Global model that other controllers extend */
class Model
{
    public ?Database $database;

//    public function loadAllModels(Autoloader $autoloader, string $loadToModelName): void
//    {
//        if (property_exists($loadToModelName, 'allModelsLoaded')) return; // if all models have already been loaded for use
//        foreach ($autoloader->getLoadedModels() as $model) {
//            $modelName = $model['model_name'];
//
//            if ($loadToModelName != $modelName && 'Model' != $modelName) { // ignore core Model and target model matching the model variable name
//                // target model and add on the new model with the variable name as its class name
//                $this->loadModel($modelName);
//            }
//        }
//    }

    /**
     * Instantiate the model and create a class variable for it by model name.
     *
     * @param string $modelName Name of the model to instantiate.
     * @return void
     */
//    public function loadModel(string $modelName): void
//    {
//        // instantiate the model under a class variable with the name of the model
//        $this->$modelName = new $modelName($this->autoloader);
//    }

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

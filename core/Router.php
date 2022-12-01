<?php

namespace core;

class Router
{
    private string $_controller = '';
    private string $_method = '';
    private array $_params;

    private array $routes = [];

    /**
     * Calculate route based on the query string.
     *
     * @param array $params Router params for instantiation.
     * $params ['default_controller' => string Default controller to load.
     *          'default_method' => string Default method to load.]
     */
    public function __construct(array $params)
    {
        // check for base folder
        $_SERVER['REQUEST_URI'] = !str_contains($_SERVER['REQUEST_URI'], basename(dirname(__DIR__))) ? '/' . basename(dirname(__DIR__)) . $_SERVER['REQUEST_URI'] : $_SERVER['REQUEST_URI'];


        // update request uri base to be our current folder only, ex: baseurl/?test=1&test2=2
        $_SERVER['REQUEST_URI'] = strstr($_SERVER['REQUEST_URI'], basename(dirname(__DIR__)));

        // explode on ? for any uri variables, ex: test=1&test2=2
        $requestUriVariables = explode('?', $_SERVER['REQUEST_URI']);

        // set server query string to variables if they are found after the first "?"
        $_SERVER['QUERY_STRING'] = $requestUriVariables[1] ?? '';

        // set php $_GET array to every variable found in the query string
        parse_str($_SERVER['QUERY_STRING'], $_GET);

        // explode uri on slash to get pieces
        $uriStringPieces = array_filter(explode('/', $_SERVER['REQUEST_URI']));

        foreach ($uriStringPieces as $key => &$mvcPathPiece) {
            $mvcPathPiecePieces = explode('?', $mvcPathPiece); // explode piece on "?" in case we have params
            $mvcPathPiece = $mvcPathPiecePieces[0]; // update piece so the params are removed from url
        }
        unset($mvcPathPiece);

        // rekey and remove empty array values
        $uriStringPieces = array_values(array_filter($uriStringPieces));

        // set controller name to the first query string piece or default
        $this->setController($uriStringPieces[1] ?? $params['default_controller']);

        // save all other variables to the params
        $this->_params = $uriStringPieces;
    }

    public function get(string $path, $callback): void
    {
        $this->routes['get'][$path] = $callback;
    }

    public function post(string $path, $callback): void
    {
        $this->routes['post'][$path] = $callback;
    }

    public function resolve()
    {
        $method = strtolower($_SERVER['REQUEST_METHOD']);
        $path = $_SERVER['REDIRECT_URL'] ?? '/';
        $callback = $this->routes[$method][$path] ?? false;
        if (!$callback) {
            http_response_code(404);
            return $this->renderView('404', ['title' => '404']);
        }
        if (is_string($callback)) {
            return $this->renderView($callback);
        } else if (is_array($callback)) {
            $callback[0] = new $callback[0]();
        }
        return call_user_func($callback);
    }

    public function renderView($view, $params = []): array|bool|string
    {
        return Application::$app->view->renderView($view, $params);
    }

    public function getController(): string
    {
        return $this->_controller;
    }

    public function setController(string $controller): void
    {
        $this->_controller = $controller;
    }

    public function getMethod(): string
    {
        return $this->_method;
    }

    public function setMethod(string $method): void
    {
        $this->_method = $method;
    }
}

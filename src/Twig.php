<?php

namespace Bloge\Renderers;

/**
 * Twig renderer adapater
 * 
 * @package bloge/twig-renderer
 */
class Twig implements IRenderer
{
    /**
     * @var string $path
     */
    protected $path;
    
    /**
     * @var \Twig_Environment $twig
     */
    protected $twig;
    
    /**
     * @param string $path
     * @param array $options
     */
    public function __construct($path, array $options = [])
    {
        $this->path = $path;
        $this->twig = new \Twig_Environment(
            new \Twig_Loader_Filesystem($path), $options
        );
    }
    
    /**
     * @return \Twig_Environment
     */
    public function twig()
    {
        return $this->twig;
    }
    
    /**
     * @{inheritDoc}
     */
    public function partial($view, array $data = [])
    {
        return $this->twig->render($view, $data);
    }
    
    /**
     * @{inheritDoc}
     */
    public function render(array $data = [])
    {
        $view = isset($data['view']) ? $data['view'] : '';
        
        return $this->partial($view, $data);
    }
}
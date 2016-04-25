<?php namespace Anomaly\StrPlugin;

use Anomaly\Streams\Platform\Addon\Plugin\Plugin;
use Anomaly\Streams\Platform\Support\Str;
use Illuminate\Contracts\Auth\Guard;
use Twig_SimpleFunction;

/**
 * Class StrPlugin
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\Streams\Addon\Plugin\Auth
 */
class StrPlugin extends Plugin
{

    /**
     * The str store from Laravel.
     *
     * @var Str
     */
    protected $str;

    /**
     * Create a new StrPlugin instance.
     *
     * @param Str $str
     */
    public function __construct(Str $str)
    {
        $this->str = $str;
    }

    /**
     * Return plugin functions.
     *
     * @return array An array of functions
     */
    public function getFunctions()
    {
        return [
            new Twig_SimpleFunction(
                'str_*',
                function ($name) {

                    $arguments = array_slice(func_get_args(), 1);

                    return call_user_func_array([$this->str, camel_case($name)], $arguments);
                }
            )
        ];
    }

    /**
     * Get the filters.
     *
     * @return array
     */
    public function getFilters()
    {
        return [
            new \Twig_SimpleFilter('camel_case', [$this->str, 'camel']),
            new \Twig_SimpleFilter('snake_case', [$this->str, 'snake']),
            new \Twig_SimpleFilter('studly_case', [$this->str, 'studly']),
            new \Twig_SimpleFilter('humanize', [$this->str, 'humanize']),
            new \Twig_SimpleFilter(
                'str_*',
                function ($name) {

                    $arguments = array_slice(func_get_args(), 1);

                    return call_user_func_array([$this->str, camel_case($name)], $arguments);
                }
            ),
        ];
    }
}

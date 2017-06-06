<?php 

namespace JD\SEO;

use Backend;
use JD\SEO\Components\Tags;
use System\Classes\PluginBase;

/**
 * SEO Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Super Simple SEO',
            'description' => 'Place dynamic SEO tags in your pages.',
            'author'      => 'JD',
            'icon'        => 'icon-search'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
            Tags::class => 'seoTags',
        ];
    }
    
}

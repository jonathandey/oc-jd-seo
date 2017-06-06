<?php 

namespace JD\SEO\Components;

use Request;
use JD\SEO\SEO;
use Cms\Classes\Page;
use Cms\Classes\Theme;
use Cms\Classes\ComponentBase;

class Tags extends ComponentBase
{
    public $meta;

    public function componentDetails()
    {
        return [
            'name'        => 'SEO Tags',
            'description' => 'Add SEO tags to the page'
        ];
    }

    public function defineProperties()
    {
        return [
            'metaDescription' => [
                'title' => 'Meta Description',
                'description' => 'A default meta description',
                'type' => 'string',
            ],
        ];
    }

    public function onRun()
    {
        $theme = Theme::getActiveTheme();
        $themeData = $theme->getCustomData();

        $appendTitle = ' | ' . $themeData->site_name;

        $title = ($this->page->meta_title)?: $this->page->title . $appendTitle;
        $description = $this->property('metaDescription', ($this->page->meta_description)?: null);

        $this->meta = SEO::meta($title, $description)
            ->appendTitle($appendTitle)
            ->canonicalUrl(Request::url())
        ;
    }
}

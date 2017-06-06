## Super Simple SEO for OctoberCMS

#### How to use

##### Installation
1. Install the plugin to your plugins folder under `plugins/jd/seo`
2. In the `head` tag of your website insert the component `{% component 'seoTags' %}`

##### Controlling the output
There are 1 of 2 ways you can control the output of each tag.
1. By using the default CMS Page meta title or description field
2. Programatically defining the tags in your own plugin or CMS page

##### Programmatically controlling the SEO tags
Programmatically controlling your output will override a pages meta title and description fields.

    use JD\SEO\SEO;
    
    ...
    
    public function onRun()
    {
        SEO::meta()->title('My awesome page')
            ->description('This is my awesome page description.')
            ->keywords(['awesome', 'page'])
        ;
    }

This will output...

    <title>My awesome page</title>
    <meta name="description" content="This is my awesome page description." />
    <meta name="keywords" content="awesome, page" />
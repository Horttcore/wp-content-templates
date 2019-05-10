<?php
namespace Horttcore\ContentTemplates;

class ContentTemplate
{


    /**
     * Constructor
     *
     * @param string $postType Post type
     * @param array $template Template
     * @param string $templateLock Lock template empty string, all or insert
     **/
    public function __construct(string $postType, array $template, string $templateLock = '')
    {
        $this->postType = $postType;
        $this->template = $template;
        $this->templateLock = $templateLock;
    }


    /**
     * Register
     *
     * @return void
     **/
    public function register()
    {
        add_action('register_post_type_args', [$this, 'postTemplate'], 10, 2);
    }


    /**
     * Register content template for post type
     *
     * @param array $args Post type args
     * @param string $postType Post type slug
     * @return array Post type args
     **/
    protected function postTemplate(array $args, string $postType): array
    {
        if ($postType != $this->postType) {
            return $args;
        }

        $args['template'] = $this->template;

        if (!$this->templateLock) {
            return $args;
        }

        $args['template_lock'] = $this->templateLock;

        return $args;
    }
}

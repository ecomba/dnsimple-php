<?php


namespace Dnsimple\Struct;

/**
 * Represents a DNS record for a template in DNSimple
 * @package Dnsimple\Struct
 */
class TemplateRecord
{
    /**
     * @var int The template record ID in DNSimple
     */
    public int $id;
    /**
     * @var int The template ID in DNSimple
     */
    public int $templateId;
    /**
     * @var string The template record name (without the domain name)
     */
    public string $name;
    /**
     * @var string The plain-text template record content
     */
    public string $content;
    /**
     * @var int The template record TTL value
     */
    public int $ttl;
    /**
     * @var int|null The priority value, if the type of template record accepts a priority
     */
    public ?int $priority;
    /**
     * @var string The type of template record, in uppercase
     */
    public string $type;
    /**
     * @var string When the template record was created in DNSimple
     */
    public string $createdAt;
    /**
     * @var string When the template record was last updated in DNSimple
     */
    public string $updatedAt;

    public function __construct($data)
    {
        $this->id = $data->id;
        $this->templateId = $data->template_id;
        $this->name = $data->name;
        $this->content = $data->content;
        $this->ttl = $data->ttl;
        $this->priority = $data->priority;
        $this->type = $data->type;
        $this->createdAt = $data->created_at;
        $this->updatedAt = $data->updated_at;
    }
}

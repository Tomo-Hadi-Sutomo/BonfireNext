<?php namespace Bonfire\Addons;

/**
 * Class AddonDefinition
 *
 * This is the base class for any addons definition files
 * that MUST be present for each addon.
 *
 * @package Bonfire\Modules
 */
class AddonDefinition
{
    /**
     * The Module title to display in the UI.
     *
     * @var string
     */
    protected $title;

    /**
     * The version of the module. Should be in a
     * format that PHP's version_compare function
     * can recognize, i.e. 1.0.2.dev
     *
     * @var string
     */
    protected $version;

    /**
     * A short blurb about this module.
     * Used in the settings page.
     *
     * @var string
     */
    protected $description;

    /**
     * The type of addon.
     *
     * Allowed: application, plugin
     *
     * @var string
     */
    protected $type;

    /**
     * Can this module be disabled?
     *
     * @var bool
     */
    protected $allowDisable = true;

    /**
     * Should this module be hidden
     * in the addons management page?
     *
     * @var bool
     */
    protected $hidden = false;

    /**
     * Called when the module is first loaded
     * for the front-end.
     *
     * @return mixed
     */
    public function init() {}

    /**
     * Called when the module is first loaded
     * in the admin area. Should insert any
     * menu items, etc.
     *
     * @return mixed
     */
    public function initAdmin() {}

    /**
     * Called the first time that a module is found
     * and should handle running any migrations, etc.
     */
    public function install() {}

    /**
     * Called whenever this module's version is found
     * to be higher than the module currently installed.
     * Useful for updating database, etc.
     *
     * @param string $currentVersion
     */
    public function upgrade(string $currentVersion) {}

    /**
     * Returns the module's title.
     *
     * @return string
     */
    public function title()
    {
        return $this->title;
    }

    /**
     * Returns the module's description.
     *
     * @return string
     */
    public function description()
    {
        return $this->description;
    }

    /**
     * Returns the module's current version.
     *
     * @return string
     */
    public function version()
    {
        return $this->version;
    }

    /**
     * @return bool
     */
    public function canDisable(): bool
    {
        return (bool)$this->allowDisable;
    }

    /**
     * @return bool
     */
    public function canSee(): bool
    {
        return ! (bool)$this->hidden;
    }
}

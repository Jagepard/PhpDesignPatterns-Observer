<?php

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\Observer;


trait NameTrait
{
    private string $name;

    /**
     * Sets the name
     * --------------------------
     * Устанавливает наименование
     *
     * @param  string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * Gets a name
     * ---------------------
     * Получает наименование
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}

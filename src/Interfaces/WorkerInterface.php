<?php
/**
 * Worker interface.
 */

namespace Interfaces;

interface WorkerInterface
{
    /**
     * Displaying a work message
     *
     * @return void None is returned
     */
    public function work(): void;
}
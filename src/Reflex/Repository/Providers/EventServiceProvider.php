<?php
namespace Reflex\Repository\Providers;

use Illuminate\Support\ServiceProvider;

class EventServiceProvider extends ServiceProvider
{

    /**
     * The event handler mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'Reflex\Repository\Events\RepositoryEntityCreated' => [
            'Reflex\Repository\Listeners\CleanCacheRepository'
        ],
        'Reflex\Repository\Events\RepositoryEntityUpdated' => [
            'Reflex\Repository\Listeners\CleanCacheRepository'
        ],
        'Reflex\Repository\Events\RepositoryEntityDeleted' => [
            'Reflex\Repository\Listeners\CleanCacheRepository'
        ]
    ];

    /**
     * Register the application's event listeners.
     *
     * @return void
     */
    public function boot()
    {
        $events = app('events');

        foreach ($this->listen as $event => $listeners) {
            foreach ($listeners as $listener) {
                $events->listen($event, $listener);
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    public function register()
    {
        //
    }

    /**
     * Get the events and handlers.
     *
     * @return array
     */
    public function listens()
    {
        return $this->listen;
    }
}

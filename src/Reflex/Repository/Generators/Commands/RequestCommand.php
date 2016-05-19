<?php

namespace Reflex\Repository\Generators\Commands;

use Illuminate\Console\GeneratorCommand;

class RequestCommand extends GeneratorCommand
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'make:reflexrequest';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new form request class';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Request';

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return __DIR__ . '/../Stubs/request.stub';
    }

    protected function getCleanName()
    {
        $name = $this->getNameInput();

        $name = str_replace('CreateRequest', '', $name);
        $name = str_replace('UpdateRequest', '', $name);

        return $name;
    }

    /**
     * Get the default namespace for the class.
     *
     * @param  string  $rootNamespace
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace.'\Entities\\' . $this->getCleanName() . '\Requests';
    }
}

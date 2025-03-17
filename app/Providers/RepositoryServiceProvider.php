<?php

namespace App\Providers;

use App\Interfaces\Classrooms\ClassroomRepositoryInterface;
use App\Interfaces\Sections\SectionRepositoryInterface;
use Illuminate\Support\ServiceProvider;
use App\Interfaces\Stages\StageRepositoryInterface;
use App\Repositories\Classrooms\ClassroomRepository;
use App\Repositories\Sections\SectionRepository;
use App\Repositories\Stages\StageRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /***
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(StageRepositoryInterface::class, StageRepository::class);
        $this->app->bind(ClassroomRepositoryInterface::class, ClassroomRepository::class);
        $this->app->bind(SectionRepositoryInterface::class, SectionRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}

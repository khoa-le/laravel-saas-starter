<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Artisan;
use Stancl\Tenancy\Contracts\Tenant;
use App\Events\CreatingStorageSymlink;
use App\Events\StorageSymlinkCreated;

class CreateStorageSymlinks implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * @var \Stancl\Tenancy\Contracts\Tenant
     */
    public Tenant $tenant;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Tenant $tenant)
    {
        $this->tenant = $tenant;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        event(new CreatingStorageSymlink($this->tenant));

        Artisan::call('tenants:link', [
            '--tenants' => [$this->tenant->getTenantKey()],
        ]);

        event(new StorageSymlinkCreated($this->tenant));
    }
}

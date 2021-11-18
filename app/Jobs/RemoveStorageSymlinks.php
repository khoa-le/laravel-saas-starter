<?php

namespace App\Jobs;

use App\Events\RemovingStorageSymlink;
use App\Events\StorageSymlinkRemoved;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Artisan;
use Stancl\Tenancy\Contracts\Tenant;

class RemoveStorageSymlinks implements ShouldQueue
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
        event(new RemovingStorageSymlink($this->tenant));

        Artisan::call('tenants:link', [
            '--remove' => true,
            '--tenants' => [$this->tenant->getTenantKey()],
        ]);

        event(new StorageSymlinkRemoved($this->tenant));
    }
}

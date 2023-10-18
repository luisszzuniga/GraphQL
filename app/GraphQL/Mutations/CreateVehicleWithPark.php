<?php declare(strict_types=1);

namespace App\GraphQL\Mutations;

use App\Models\Park;
use App\Models\Vehicle;
use Illuminate\Support\Facades\DB;

final readonly class CreateVehicleWithPark
{
    /** @param  array{}  $args */
    public function __invoke(null $_, array $args)
    {
        return DB::transaction(function () use ($args) {
            $park = Park::create([
                'name' => $args['park_name'],
            ]);

            return Vehicle::create([
                'name' => $args['name'],
                'park_id' => $park->id
            ]);
        });
    }
}

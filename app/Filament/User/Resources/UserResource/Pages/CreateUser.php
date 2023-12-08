<?php

namespace App\Filament\User\Resources\UserResource\Pages;

use App\Filament\User\Resources\UserResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;
}

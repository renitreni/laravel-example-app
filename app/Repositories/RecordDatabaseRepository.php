<?php

namespace App\Repositories;

use Illuminate\Support\Facades\Storage;

class RecordDatabaseRepository implements RecordRepository
{
    public function get(): array
    {
        return unserialize(Storage::get('data.ser'));
    }

    public function save($params): void
    {
        $data   = unserialize(Storage::get('data.ser'));
        $data[] = $params;

        Storage::put('data.ser', serialize($data));
    }

    public function delete($record): void
    {
        $data = unserialize(Storage::get('data.ser'));
        unset($data[$record]);

        Storage::put('data.ser', serialize($data));
    }
}

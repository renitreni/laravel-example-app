<?php

namespace App\Repositories;

interface RecordRepository
{
    public function get(): array;

    public function save($params): void;

    public function delete($record): void;
}

<?php

namespace App\Http\Controllers;

use App\Http\Resources\AddressResource;
use App\Models\Address;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class AddressController extends Controller
{
    /**
     * @throws \Psr\Container\ContainerExceptionInterface
     * @throws \Psr\Container\NotFoundExceptionInterface
     */
    public function index(): AnonymousResourceCollection
    {
        $address = Address::query()
                          ->when(request()->get('q'), function ($q) {
                              $keyword = request()->get('q');
                              $q->where('city', 'like', "%$keyword%")
                                ->orWhere('state', 'like', "%$keyword%");
                          })
                          ->get();

        return AddressResource::collection($address);
    }
}

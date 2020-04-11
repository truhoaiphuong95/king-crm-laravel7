<?php

namespace Core\Repositories;

interface TicketRepositoryContract
{
    public function all();
    public function paginate();
    public function find($id);
    public function store($data);
    public function update($id, $data);
    public function destroy($id);
    public function getView($id);
    public function getAllWithoutDone();
}
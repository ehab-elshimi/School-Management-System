<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Model;

abstract class BaseServices
{
    protected $model;
    /**
     * Retrieve all records.
     *
     * @return \Illuminate\Support\Collection
     */
    public function retrieve($paginated = true)
    {
        return $paginated ? $this->model->paginate() : $this->model->get();
    }

    /**
     * Create a new record.
     * @param array $data
     * @return Model
     */
    public function store(array $data)
    {
        return $this->model->create($data);
    }

    /**
     * Update an existing record.
     * @param array $data
     * @param int $id
     * @return Model
     */
    public function update(int $id, array $data)
    {
        $model = $this->model->findOrFail($id);
        $model->update($data);
        return $model;
    }

    /**
     * Show a record by ID.
     * @param model $model
     * @param int $id
     * @return Model
     */
    public function show($id)
    {
        return $this->model->findOrFail($id);
    }

    /**
     * Delete a record by ID.
     * @param int $id
     * @return bool
     */
    public function delete($id)
    {
        $this->model->findOrFail($id)->delete();
    }
}
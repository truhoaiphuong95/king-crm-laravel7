<?php

namespace Core\Repositories;
use App\Models\Course_student;

class CourseStudentRepository implements CourseStudentRepositoryContract
{
    protected $model;

    public function __construct(course_student $model)
    {
        $this->model = $model;
    }

    public function all()
    {
        return $this->model->all();
    }
    
    public function paginate() {
        return $this->model->paginate(10);
    }

    public function find($id) {
        return $this->model->findOrFail($id);
    }

    public function store($data) {
        $data['staff_id'] = UserInfo();
        return $this->model->create($data);
    }

    public function update($id, $data) {
        $model = $this->find($id);
        return $model->update($data);
    }

    public function destroy($id) {
        $model = $this->find($id);
        return $model->destroy($id);
    }
}
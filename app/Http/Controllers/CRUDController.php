<?php

namespace App\Http\Controllers;

use App\Models\BaseModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CRUDController extends BaseController
{
    protected string $class = BaseModel::class;
    protected string $modelRequest = Request::class;
    protected string $modelName = '';
    protected string $modelNameMultiple = '';
    protected bool $hasTenant = false;

    public function __construct()
    {
        $className = explode('\\', $this->class);
        $className = array_pop($className);
        $string = preg_replace('/(?<=\\w)(?=[A-Z])/', '_$1', $className);
        $string = strtolower($string);
        $this->modelName = $this->modelName != '' ?: $string;
        $this->modelNameMultiple = $this->modelNameMultiple != '' ?: $string . 's';
    }

    public function index() {
        return view($this->modelNameMultiple . '.index', [
            $this->modelNameMultiple => $this->class::all()
        ]);
    }

    public function create() {
        return view($this->modelNameMultiple . '.create');
    }

    public function store(Request $request) {
        $request = app($this->modelRequest);

        $this->class::create([
            ...$request->except('_token'),
            'tenant_id' => $this->hasTenant ? auth()->user()->tenant_id : null,
        ]);

        return $this->ajaxRedirect($this->modelNameMultiple . '.index');
    }

    public function edit(string $model_id) {
        $model = $this->class::find($model_id);

        return view($this->modelNameMultiple . '.edit', [
            $this->modelName => $model,
        ]);
    }

    public function update(Request $_, string $model_id) {
        $request = app($this->modelRequest);

        $model = $this->class::find($model_id);

        $model->update($request->except('_token'));

        return $this->ajaxRedirect($this->modelNameMultiple . '.index');
    }

    public function delete(string $model_id) {
        $model = $this->class::find($model_id);
        $model->delete();

        return redirect(route($this->modelNameMultiple . '.index'));
    }

    private function createValidator($data) {
        return Validator::make(
            $data,
            (new $this->modelRequest)->rules(),
            (new $this->modelRequest)->messages() ?? [],
        );
    }
}

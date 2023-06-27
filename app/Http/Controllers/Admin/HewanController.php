<?php

namespace App\Http\Controllers\Admin;

use App\Base\Controllers\AdminController;
use App\Http\Controllers\Admin\DataTables\HewanDataTable;
use App\Models\Hewan;
use Illuminate\Http\Request;

class HewanController extends AdminController
{
    protected $validation = [
        'name'      => 'required|string',
        'weight_start'  => 'required|integer',
        'weight_end'  => 'required|integer',
        'price'  => 'required|integer',
        'category'  => 'required|string',
        'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000',
    ];

    /**
     * @param \App\Http\Controllers\Admin\DataTables\HewanDataTable $dataTable
     *
     * @return mixed
     */
    public function index(HewanDataTable $dataTable)
    {
        return $dataTable->render('admin.table', ['link' => route('admin.hewan.create')]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|string
     */
    public function create()
    {
        return view('admin.forms.hewan', $this->formVariables('hewan', null,$this->options()));
    }

    /**
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Exception
     */
    public function store(Request $request)
    {   
        return $this->createFlashRedirect(hewan::class, $request,'image');
    }

    /**
     * @param \App\Models\hewan $hewan
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|string
     */
    public function show(Hewan $hewan)
    {
        return view('admin.show.hewan', $this->formVariables('hewan', $hewan,$this->options()));
    }

    /**
     * @param \App\Models\hewan $hewan
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|string
     */
    public function edit(Hewan $hewan)
    {
        return view('admin.forms.hewan', $this->formVariables('hewan', $hewan,$this->options()));
    }

    /**
     * @param \App\Models\hewan $hewan
     * @param \Illuminate\Http\Request  $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Exception
     */
    public function update(hewan $hewan, Request $request)
    {
        return $this->saveFlashRedirect($hewan, $request,'image');
    }

    /**
     * @param \App\Models\hewan $hewan
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Exception
     */
    public function destroy(hewan $hewan)
    {
        return $this->destroyFlashRedirect($hewan);
    }

    /**
     * @return array
     */
    protected function options()
    {
        return ['options' => ["1"=>"KAMBING","2"=>"SAPI","3"=>"DOMBA","4"=>"KERBAU"]];
    }
}   

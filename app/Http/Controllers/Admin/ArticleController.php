<?php

namespace App\Http\Controllers\Admin;

use App\Base\Controllers\AdminController;
use App\Http\Controllers\Admin\DataTables\ArticleDataTable;
use App\Models\Category;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends AdminController
{
    /**
     * @var array
     */
    protected $validation = [
        'content'      => 'required|string',
        'category_id'  => 'required|integer',
        'description'  => 'required|string|max:200',
        'published_at' => 'required|string',
        'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000',
        'title'        => 'required|string|max:200'
    ];
    protected $validationUpdate = [
        'content'      => 'required|string',
        'category_id'  => 'required|integer',
        'description'  => 'required|string|max:200',
        'published_at' => 'required|string',
        'image'        => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000',
        'title'        => 'required|string|max:200'
    ];

    /**
     * @param \App\Http\Controllers\Admin\DataTables\ArticleDataTable $dataTable
     *
     * @return mixed
     */
    public function index(ArticleDataTable $dataTable)
    {
        return $dataTable->render('admin.table', ['link' => route('admin.article.create'),'cannotAdd'=>true]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|string
     */
    public function create()
    {
        return view('admin.forms.article', $this->formVariables('article', null, $this->options()));
    }

    /**
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Exception
     */
    public function store(Request $request)
    {   
        return $this->createFlashRedirect(Article::class, $request,'image');
    }

    /**
     * @param \App\Models\Article $article
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|string
     */
    public function show(Article $article)
    {
        return view('admin.show.article', $this->formVariables('article', $article, $this->options()));
    }

    /**
     * @param \App\Models\Article $article
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|string
     */
    public function edit(Article $article)
    {
        return view('admin.forms.article', $this->formVariables('article', $article, $this->options()));
    }

    /**
     * @param \App\Models\Article $article
     * @param \Illuminate\Http\Request  $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Exception
     */
    public function update(Article $article, Request $request)
    {
        return $this->saveFlashRedirect($article, $request,'image');
    }

    /**
     * @param \App\Models\Article $article
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Exception
     */
    public function destroy(Article $article)
    {
        return $this->destroyFlashRedirect($article);
    }

    /**
     * @return array
     */
    protected function options()
    {
        return ['options' => Category::pluck('title', 'id')];
    }
}

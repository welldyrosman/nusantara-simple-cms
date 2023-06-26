<?php

namespace App\Http\Controllers\Application;

use App\Base\Services\SitemapService;
use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use App\Models\Page;

class PageController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getIndex()
    {   
        $page=Page::find(4);
        return view('app.beranda', [
            'title' => $page->title,
            'description' => $page->content,
            'articles' => Article::published()->paginate(5),
            'top_articles'=>Article::popular()->paginate(5),
        ]);
    }
    public function aqiqah()
    {
        $page=Page::find(1);

        return view('app.aqiqah', [
            'title' => $page->title,
            'description' => $page->content,        
            'articles' => Article::published()->paginate(4),
            'top_articles'=>Article::popular()->paginate(5),
        ]);
    }
    public function artikel()
    {
        $page=Page::find(1);

        return view('app.articles', [      
            'articles' => Article::published()->paginate(10),
            'top_articles'=>Article::popular()->paginate(5),
        ]);
    }
    public function kurban()
    {
       
        $page=Page::find(2);
        return view('app.kurban', [
            'title' => $page->title,
            'description' => $page->content,
            'articles' => Article::published()->paginate(4),
            'top_articles'=>Article::popular()->paginate(5),
        ]);
    }
    public function profil()
    {
       
        $page=Page::find(3);
        return view('app.profile', [
            'title' => $page->title,
            'description' => $page->content,
            'articles' => Article::published()->paginate(4),
            'top_articles'=>Article::popular()->paginate(5),
        ]);
    }
    /**
     * @param \App\Models\Category $category
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getCategory(Category $category)
    {
        return view('app.articledetail', [
            'title' => getTitle(),
            'description' => $category->description,
            'articles' => Article::where('category_id', $category->id)->paginate(4),
        ]);
    }

    /**
     * @param \App\Models\Page $page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getPage(Page $page)
    {
        return view('app.content', ['object' => $page]);
    }

    /**
     * @param \App\Models\Article $article
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getArticle(Article $article)
    {
        $page=Page::find(1);
        $article->incrementViewCount();
        return view('app.articledetail', [
            'title' => $page->title,
            'article'=>$article,
            'articles' => Article::where('category_id', $article->category_id)->paginate(4),
            'top_articles'=>Article::popular()->paginate(5),
        ]);
    }

    /**
     * @param \App\Base\Services\SitemapService $sitemapService
     *
     * @return mixed
     * @throws \Exception
     */
    public function getSitemap(SitemapService $sitemapService)
    {
        return $sitemapService->render();
    }
}

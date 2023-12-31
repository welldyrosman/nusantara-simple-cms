<?php

namespace App\Models;

use App\Base\SluggableModel;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends SluggableModel
{
    use HasFactory;

    /**
     * Carbon instance fields
     *
     * @var array
     */
    protected $dates = ['published_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tags()
{
    return $this->hasManyThrough(Tag::class, ArticleTag::class, 'article_id', 'id', 'id', 'tag_id');
}

    public function article_tag(){
        return $this->hasMany(ArticleTag::class);
    }
    public function category(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    public function incrementViewCount()
    {
        $this->view_qty++;
        $this->save();
    }
    /**
     * @param $query
     *
     * @return mixed
     */
    public function scopePublished($query)
    {
        return $query->where('published_at', '<=', now())->orderBy('published_at', 'desc');
    }
    public function scopePopular($query)
    {
        return $query->where('published_at', '<=', now())->orderBy('view_qty', 'desc');
    }

    /**
     * @return string
     */
    public function getLocalizedPublishedAtAttribute(): string
    {
        return $this->published_at->formatLocalized('%e %B %Y');
    }

    /**
     * Prepare a date for array / JSON serialization.
     *
     * @param  \DateTimeInterface  $date
     * @return string
     */
    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    /**
     * @return string
     */
    public function getLinkAttribute(): string
    {
        return route('article', ['aSlug' => $this->slug]);
    }
}

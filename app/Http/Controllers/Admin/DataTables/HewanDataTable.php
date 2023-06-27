<?php

namespace App\Http\Controllers\Admin\DataTables;

use App\Base\Controllers\DataTableController;
use App\Models\Hewan;

class HewanDataTable extends DataTableController
{
    /**
     * @var string
     */
    protected $model = Hewan::class;

    /**
     * Columns to show
     *
     * @var array
     */
    protected $columns = ['name','weight_start','weight_end','price','category'];

    /**
     * Columns of relations, relation name as key, relation property as value
     *
     * @var array
     */

    /**
     * Common columns for translation
     *
     * @var array
     */
    protected $common_columns = [ 'created_at', 'updated_at'];

    /**
     * @var bool
     */
    protected $ops = true;

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $users = Hewan::query();
        return $this->applyScopes($users);
    }
}
    
<?php

namespace LeanCommerce\Debtor\Datagrids;

use Illuminate\Support\Facades\DB;
use Webkul\UI\DataGrid\DataGrid;

class DebtorDataGrid extends DataGrid
{

    protected $index = 'id';

    protected $sortOrder = 'asc';

    protected $enableSearch = true;


    public function prepareQueryBuilder()
    {
        // $queryBuilder = DB::table('debtors')->addSelect('id');

        // $this->setQueryBuilder($queryBuilder);

        $queryBuilder = DB::table('debtors')
            ->addSelect(
                'debtors.id',
                'debtors.access_code',
                'debtors.full_name',
            );

        $this->addFilter('id', 'debtors.id');

        $this->setQueryBuilder($queryBuilder);
    }

    public function addColumns()
    {
        $this->addColumn([
            'index'      => 'id',
            'label'      => 'Id',
            'type'       => 'number',
            'searchable' => false,
            'sortable'   => true,
            'filterable' => true,
        ]);

        $this->addColumn([
            'index'      => 'access_code',
            'label'      => 'Access Code',
            'type'       => 'string',
            'searchable' => false,
            'sortable'   => false,
            'filterable' => false,
        ]);

        $this->addColumn([
            'index'      => 'full_name',
            'label'      => 'Full Name',
            'type'       => 'string',
            'searchable' => false,
            'sortable'   => false,
            'filterable' => false,
        ]);
    }

    public function prepareActions()
    {
        // $this->addAction([
        //     'title'  => trans('ui::app.datagrid.edit'),
        //     'method' => 'GET',
        //     'route'  => 'admin.debtors.edit',
        //     'icon'   => 'pencil-icon',
        // ]);

        // $this->addAction([
        //     'title'        => trans('ui::app.datagrid.delete'),
        //     'method'       => 'DELETE',
        //     'route'        => 'admin.debtors.delete',
        //     'confirm_text' => trans('ui::app.datagrid.massaction.delete', ['resource' => 'user']),
        //     'icon'         => 'trash-icon',
        // ]);
    }
}

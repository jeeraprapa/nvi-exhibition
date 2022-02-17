<?php

namespace App\Admin\Controllers;

use App\Models\Booth;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class BoothController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Booth';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Booth());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('short', __('Short'));
        $grid->column('type', __('Type'));
        $grid->column('youtube', __('Youtube'));
        $grid->column('logo', __('Logo'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));
        $grid->column('deleted_at', __('Deleted at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Booth::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('short', __('Short'));
        $show->field('type', __('Type'));
        $show->field('youtube', __('Youtube'));
        $show->field('logo', __('Logo'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
        $show->field('deleted_at', __('Deleted at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Booth());

        $form->text('name', __('Name'));
        $form->text('short', __('Short'));
        $form->text('type', __('Type'));
        $form->text('youtube', __('Youtube'));
        $form->image('logo', __('Logo'));

        return $form;
    }
}

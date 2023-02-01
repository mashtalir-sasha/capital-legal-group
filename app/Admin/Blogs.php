<?php

use SleepingOwl\Admin\Model\ModelConfiguration;
use App\Models\Blog;
use App\Models\BlogCategory;

AdminSection::registerModel(Blog::class, function (ModelConfiguration $model) {

    $model->setTitle('Відеоматеріали');
    $model->onDisplay(function () {
        $display = AdminDisplay::table()->setColumns([
            AdminColumn::text('id')->setLabel('ID'),
            AdminColumn::text('title')->setLabel('Заголовок'),
            AdminColumn::text('link')->setLabel('ID відео з Youtube'),
            AdminColumn::lists('category.title')->setLabel('Категорії'),
            AdminColumn::text('created_at')->setLabel('Дата створення'),
            AdminColumn::text('updated_at')->setLabel('Дата зміни'),
        ]);
        return $display;
    });

    $model->onCreateAndEdit(function () {

        $form = AdminForm::panel();
        $form->setHtmlAttribute('enctype', 'multipart/form-data');

        $tab = AdminDisplay::tabbed([
            'Українська' => new \SleepingOwl\Admin\Form\FormElements([
                AdminFormElement::text('title', 'Заголовок')->required(),
                AdminFormElement::textarea('text', 'Короткий опис (200 символів)')->required(),
            ]),
            'Русский' => new \SleepingOwl\Admin\Form\FormElements([
                AdminFormElement::text('titleRU', 'Заголовок')->required(),
                AdminFormElement::textarea('textRU', 'Краткое описание (200 символов)')->required(),
            ]),
        ]);

        $form->addBody([
            AdminFormElement::columns()
                ->addColumn(function () {
                    return [
                        AdminFormElement::multiselect('category', 'Категорії')->setModelForOptions(new BlogCategory)->setDisplay('title'),
                        AdminFormElement::text('link', 'ID відео з Youtube')->required(),
                    ];
                })
                ->addColumn(function () use ($tab) {
                    return [
                        $tab
                    ];
                }),
        ]);

        return $form;
    });
});
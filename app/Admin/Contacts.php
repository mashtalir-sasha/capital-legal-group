<?php

use SleepingOwl\Admin\Model\ModelConfiguration;
use App\Models\Contacts;

AdminSection::registerModel(Contacts::class, function (ModelConfiguration $model) {

    $model->setTitle('Контакти');
    $model->onDisplay(function () {
        $display = AdminDisplay::table()->setColumns([
            AdminColumn::text('updated_at')->setLabel('Дата зміни')
        ]);
        return $display;
    });

    $model->disableCreating();
    $model->disableDeleting();

    $model->onCreateAndEdit(function () {

        $form = AdminForm::panel();
        $form->setHtmlAttribute('enctype', 'multipart/form-data');

        $form->addBody([
            AdminFormElement::columns()->addColumn(function () {
                return [
                    AdminDisplay::tabbed([
                        'Українська' => new \SleepingOwl\Admin\Form\FormElements([
                            AdminFormElement::text('address', 'Адреса')->required(),    
                        ]),
                        'Русский' => new \SleepingOwl\Admin\Form\FormElements([
                            AdminFormElement::text('addressRU', 'Адрес')->required(),
                        ]),
                    ]),
                    AdminFormElement::text('email', 'E-mail')->required(),
                    AdminFormElement::text('phone', 'Телефон')->required(),
                ];
            })->addColumn(function () {
                return [
                    AdminFormElement::textarea('map', 'Google карта')->required(),
                    AdminFormElement::text('facebook', 'Facebook'),
                    AdminFormElement::text('instagram', 'Instagram'),
                    AdminFormElement::text('youtube', 'Youtube'),
                ];
            }), 
        ]);

        return $form;
    });
});